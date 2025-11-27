<?php

/*
franklin espinoza alvarez
15/04/2024
**/
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

class EncrypPassRestV2
{
    private $_user = null;
    private $_pass = null;
    private $_headers = array();
    private $_pxp = false;


    public function addHeader($header)
    {
        array_push($this->_headers,$header);
        return $this;
    }

    public function setCredentialsPxp($user, $pass) {

        $prefix = uniqid('pxp');
        $this->_pxp = true;
        $this->_pass = md5($pass);

        $this->_user = $this->encrypt($prefix . '$$' . $user, $this->_pass);

        $this->addHeader("Pxp-user: $user");
        $this->addHeader("auth-version: 2");
        $this->_pass = $this->encrypt($prefix . '$$' . $this->_pass, $this->_pass);

        return $this->_pass;
    }


    public function encrypt($plaintext, $password) {
        $ivLength = openssl_cipher_iv_length('AES-256-CBC');

        $iv = openssl_random_pseudo_bytes($ivLength);

        $salt = openssl_random_pseudo_bytes(256);
        $iterations = 999;
        $hashKey = hash_pbkdf2('sha512', $password, $salt, $iterations, (256 / 4));

        $encryptedString = openssl_encrypt($plaintext, 'AES-256-CBC', hex2bin($hashKey), OPENSSL_RAW_DATA, $iv);

        $encryptedString = base64_encode($encryptedString);
        unset($hashKey);

        $output = ['ciphertext' => $encryptedString, 'iv' => bin2hex($iv), 'salt' => bin2hex($salt), 'iterations' => $iterations];
        unset($encryptedString, $iterations, $iv, $ivLength, $salt);

        return base64_encode(json_encode($output));
    }
}

$response = array("success" => false, "password" => "", "mensaje" => "password creado");

if ((isset($request->user) && !empty($request->user)) && (isset($request->pw) && !empty($request->pw))) {
    $user_pxp = new EncrypPassRestV2();
    $pass = $user_pxp->setCredentialsPxp($request->user, $request->pw);
    $response["success"] = true;
    $response["password"] = $pass;
}else{
    $response["mensaje"] = "credenciales de usuario invalidas.";
}


echo json_encode($response);

?>

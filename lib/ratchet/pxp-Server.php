<?php
require '../DatosGenerales.php';
require '../lib_control/CTincludes.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;


require 'vendor/autoload.php';

require 'pxp.php';

ini_set("error_log", "/tmp/php-error.log");
error_log( "Hello, errors!" );

ignore_user_abort(true);

ini_set('max_execution_time', 0);

set_time_limit(0);

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Pxp()
        )
    ),
    $_SESSION['_PUERTO_WEBSOCKET']
);

$server->run();

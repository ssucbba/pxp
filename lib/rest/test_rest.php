<?php
	
	
	include 'PxpRestClient2.php';

//Generamos el documento con REST


$pxpRestClient = PxpRestClient2::connect('172.17.58.62', 'kerp/pxp/lib/rest/')->setCredentialsPxp('admin','admin');
//var_dump($pxpRestClient);exit;
//$pxpRestClient = PxpRestClient::connect('192.168.11.82', 'kerp_capacitacion/pxp/lib/rest/')->setCredentialsPxp('admin','123');

/*$res = $pxpRestClient->doPost('seguridad/aesEncryption',
    array(	"value"=>"jrivera",
        "key"=>'123'));
		
echo $res;
*/
/*
$res = $pxpRestClient->doPost('tesoreria/PlanPago/reporteActaConformidad',
    array(	"id_proceso_wf"=>68528,
        "firmar"=>'si',
        "fecha_firma"=>'01/01/2016',
        "usuario_firma"=>'jmp',
        "nombre_usuario_firma"=>'jmp'));
echo $res;
*/
//$a = 0;

/*$data = json_decode( file_get_contents('http://sigeppre-wl12.sigma.gob.bo/ejecucion-gasto/api/cola/ega_partidas/8543290ADA79009CE053C0A866596EB4'), true );

var_dump($data["data"]);exit;*/
/*////////////////////////////////DELETE(C31)//////////////////////////////////////////////*/
/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
    array(	"sys_origin"=>'erp',
        "json"=>'{"usuario":"rzabala", "gestion":2019, "nroPreventivo":4045, "nroCompromiso":1, "nroDevengado":1}',
        "service_code"=>"DEL"
    ));
$result= json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
echo $variable;
/*////////////////////////////////DELETE(C31)//////////////////////////////////////////////*/
/*////////////////////////////////BENEFICIARIO(REGISTRO)//////////////////////////////////////////////*/
//while($a<=20) {
    /*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
        array("sys_origin" => 'erp',
            "json" => '{"usuario":"beneficiario", "numeroDocumento":310740020}',
            "service_code" => "BENEF"
        ));
    $result = json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
    echo $variable;*/
    //$a ++;
//}
/*/////NATURAL///////*/
/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
    array(	"sys_origin"=>'erp',
        "json"=>'{"usuario":"beneficiario", "numeroDocumento":5241984, "primerApellido":"PARRA", "segundoApellido":"MOYA", "nombres":"JOSE FERNANDO", "fechaNacimiento":"05-06-1982"}',
        "service_code"=>"BENEFN"
    ));
$result= json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
echo $variable;*/
/*////////////////////////////////BENEFICIARIO(REGISTRO)//////////////////////////////////////////////*/
/*////////////////////////////////COMPROMETIDO-DEVENGADO(REGISTRO)//////////////////////////////////////////////*/
/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
    array(	"sys_origin"=>'erp',
        //"json"=>'{"usuario":"claudia.guzman", "usuario_apro":"casiana.alvarez", "usuario_firm":"hugo.tapia", "gestion":2019, "nroPreventivo":3960, "fechaElaboracion":"22/07/2019", "claseGastoCip":4, "idCatprv":null, "sigade":null, "otfin":null,"resumenOperacion":"PUBLICIDAD SIGEP JUNIO 2019", "moneda":69, "fechaTipoCambio":"22/07/2019", "compraVenta":"C", "totalAutorizadoMo":10, "totalRetencionesMo":0, "totalMultasMo":0, "liquidoPagableMo":10, "partidas":[{"idPtogto":3099137, "montoMo":10}], "respaldos":[{"tipoDocRdo":4, "nroDocRdo":737, "secDocRdo":1, "totalDocRdo":1,"fechaElaboracionRdo":"22/07/2019", "fechaRecepcionRdo":"22/07/2019", "fechaVencimientoRdo":"22/07/2019"}], "beneficiarios":[{"beneficiario":27118, "banco":1014, "cuenta":10000006158378, "montoMo":10, "montoRetencionesMo":0, "montoMultasMo":0}], "libretas":[{"secEgaclib":1, "idFuente":12, "idOrganismo":16, "bancoOrigen":1004, "cuentaOrigen":"3987069001", "libretaOrigen":"00578012002"}]}',
        "json"=>'{"usuario":"rzabala", "gestion":2019, "fechaElaboracion":"20/09/2019", "claseGastoCip":4, "idCatprv":null, "sigade":null, "otfin":null,"resumenOperacion":"PRUEBA CIP SIGEP SEPT 2019", "moneda":69, "fechaTipoCambio":"20/09/2019", "compraVenta":"C", "totalAutorizadoMo":10, "totalRetencionesMo":0, "totalMultasMo":0, "liquidoPagableMo":10, "partidas":[{"idPtogto":3099624, "montoMo":10}], "respaldos":[{"tipoDocRdo":74, "nroDocRdo":736, "secDocRdo":1, "totalDocRdo":1,"fechaElaboracionRdo":"20/09/2019", "fechaRecepcionRdo":"20/09/2019", "fechaVencimientoRdo":"20/09/2019"}], "beneficiarios":[{"beneficiario":26619, "banco":1003, "cuenta":4010587901,"montoMo":10, "montoRetencionesMo":0, "montoMultasMo":0}], "libretas":[{"secEgaclib":1, "idFuente":12, "idOrganismo":16, "bancoOrigen":1004, "cuentaOrigen":"3987069001", "libretaOrigen":"0057801202"}]}',
        "service_code"=>"CON_IMPUTACION"
    ));
$result= json_decode($variable, true);


echo $variable;*/
/*////////////////////////////////COMPROMETIDO-DEVENGADO(REGISTRO)//////////////////////////////////////////////*/
/*////////////////////////////////PLANILLAS(REGISTRO)//////////////////////////////////////////////*/
/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
    array(	"sys_origin"=>'erp',
        "json"=>'{"usuario":"edith.zeballos", "gestion":2019, "fechaElaboracion":"04/12/2019", "claseGastoCip":1, "idCatprv":null, "sigade":null, "otfin":null, "resumenOperacion":"PRUEBA PLANILLLA SIGEP DICIEMBRE 2019", "moneda":69, "fechaTipoCambio":"04/12/2019", "compraVenta":"C", "totalAutorizadoMo":1000, "totalRetencionesMo":200, "totalMultasMo":0, "liquidoPagableMo":800, "partidas":[{"idPtogto":3098461, "montoMo":"105.00"}, {"idPtogto":3098664, "montoMo":"105.00"}, {"idPtogto":3098772, "montoMo":"95.00"}, {"idPtogto":3198177, "montoMo":"34.00"}, {"idPtogto":3198182, "montoMo":"34.00"}, {"idPtogto":3198186, "montoMo":"34.00"}, {"idPtogto":3098463, "montoMo":"34.00"}, {"idPtogto":3098669, "montoMo":"34.00"}, {"idPtogto":3098782, "montoMo":"34.00"}, {"idPtogto":3198173, "montoMo":"34.00"}, {"idPtogto":3198178, "montoMo":"34.00"}, {"idPtogto":3198183, "montoMo":"34.00"}, {"idPtogto":3557550, "montoMo":"34.00"}, {"idPtogto":3198174, "montoMo":"34.00"}, {"idPtogto":3198179, "montoMo":"34.00"}, {"idPtogto":3446958, "montoMo":"34.00"}, {"idPtogto":3098655, "montoMo":"34.00"}, {"idPtogto":3098742, "montoMo":"34.00"}, {"idPtogto":3098446, "montoMo":"34.00"}, {"idPtogto":3098650, "montoMo":"31.00"}, {"idPtogto":3098732, "montoMo":"30.00"}, {"idPtogto":3198176, "montoMo":"30.00"}, {"idPtogto":3198181, "montoMo":"30.00"}, {"idPtogto":3198185, "montoMo":"30.00"}], "respaldos":[{"tipoDocRdo":27, "nroDocRdo":733, "secDocRdo":1, "gestionRdo":2019, "mesRdo":12, "tipoRdo": "ME", "totalDocRdo":1, "fechaElaboracionRdo":"04/12/2019", "fechaRecepcionRdo":"04/12/2019", "fechaVencimientoRdo":"04/12/2019"}], "beneficiarios":[{"beneficiario":26353, "banco":1004, "cuenta":3910069001, "montoMo":800, "montoRetencionesMo":0, "montoMultasMo":0}], "retenciones":[{"acreedor":1, "montoMo":"1.00"}, {"acreedor":74, "montoMo":"35.00"}, {"acreedor":205, "montoMo":"44.00"}, {"acreedor":301, "montoMo":"1.00"}, {"acreedor":302, "montoMo":"1.00"}, {"acreedor":303, "montoMo":"1.00"}, {"acreedor":304, "montoMo":"1.00"}, {"acreedor":305, "montoMo":"1.00"}, {"acreedor":306, "montoMo":"1.00"}, {"acreedor":307, "montoMo":"25.00"}, {"acreedor":308, "montoMo":"25.00"}, {"acreedor":320, "montoMo":"30.00"}, {"acreedor":321, "montoMo":"30.00"}, {"acreedor":324, "montoMo":"1.00"}, {"acreedor":325, "montoMo":"1.00"}, {"acreedor":327, "montoMo":"1.00"}, {"acreedor":328, "montoMo":"1.00"}], "libretas":[{"secEgaclib":1, "idFuente":12, "idOrganismo":16, "bancoOrigen":1004, "cuentaOrigen":"3987069001", "libretaOrigen":"00578012002"}]}',
        "service_code"=>"PLANI"
    ));
$result= json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
echo $variable;*/
/*////////////////////////////////PLANILLAS(REGISTRO)//////////////////////////////////////////////*/
/*////////////////////////////////PREVENTIVO-COMPROMETIDO-DEVENGADO(REGISTRO)//////////////////////////////////////////////*/
/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
    array(	"sys_origin"=>'erp',
        "json"=>'{"usuario":"rzabala", "gestion":2019, "fechaElaboracion":"11/09/2019", "claseGastoSip":1, "idCatpry":255429, "sigade":null, "otfin":"BOA-FINPRO-2018", "resumenOperacion":"Para registrar el pago al SERVICIO DE IMPUESTOS NACIONALES por concepto del IVA (C21- 3363 y SIP 580) FONDOS EN CUSTODIA, correspondiente al mes de AGOSTO 2019, solicitado por Control Tributario, según documentación adjunta.", "moneda":69, "fechaTipoCambio":"11/09/2019", "compraVenta":"C", "totalAutorizadoMo":10, "totalRetencionesMo":0, "totalMultasMo":0, "liquidoPagableMo":10, "respaldos":[{"tipoDocRdo":4, "nroDocRdo":13256, "fechaElaboracionRdo":"11/09/2019", "fechaRecepcionRdo":"11/09/2019", "fechaVencimientoRdo":"11/09/2019"}], "beneficiarios":[{"beneficiario":321507, "banco":1009, "cuenta":732790039,"montoMo":10, "montoRetencionesMo":0, "montoMultasMo":0}], "contables":[{"cuentaContable":"1.1.3.7", "montoMo":10}], "libretas":[{"secEgaclib":1, "idFuente":null, "idOrganismo":null, "bancoOrigen":1004, "cuentaOrigen":"3987069001", "libretaOrigen":"00578012002"}]}',
        //"json"=>'{"usuario":"rzabala", "gestion":2019, "fechaElaboracion":"20/08/2019", "claseGastoCip":4, "idCatprv":null, "sigade":null, "otfin":null,"resumenOperacion":"REGULARIZACION SIGEP AGOSTO 2019", "moneda":1, "fechaTipoCambio":"20/08/2019", "compraVenta":"V", "totalAutorizadoMo":10, "totalRetencionesMo":0, "totalMultasMo":0, "liquidoPagableMo":10, "partidas":[{"idPtogto":3108003, "montoMo":10}], "respaldos":[{"tipoDocRdo":74, "nroDocRdo":73, "secDocRdo":1, "totalDocRdo":1,"fechaElaboracionRdo":"20/08/2019", "fechaRecepcionRdo":"20/08/2019", "fechaVencimientoRdo":"20/08/2019"}], "beneficiarios":[{"beneficiario":83797, "montoMo":10, "montoRetencionesMo":0, "montoMultasMo":0}], "libretas":[{"secEgaclib":1, "idFuente":12, "idOrganismo":16, "bancoOrigen":3002, "cuentaOrigen":"308661", "libretaOrigen":""}]}',
        "service_code"=>"REGULARIZAS"
    ));
$result= json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
echo $variable;
/*////////////////////////////////PREVENTIVO-COMPROMETIDO-DEVENGADO(REGISTRO)//////////////////////////////////////////////*/
/*//////////////////////PARA INICIAR EL PROCESO DE POST Y GET AL SIGEP///////////////////////////////////////*/
/*----------Carga el Servicio ya creado en ServiceConfig.php---------------------*/
	/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/insertarServiceRequest',
		array(	"sys_origin"=>'erp',
                //"json"=>'{"usuario":"claudia.guzman","usuario_apro":"casiana.alvarez","gestion":2019,"fechaElaboracion":"30\/05\/2019","claseGastoCip":4,"idCatprv":null,"sigade":null,"otfin":null,"resumenOperacion":"UTILES DE ESCRITORIO Y OFICINA - Gastos destinados a la adquisici\u00f3n de \u00fatiles de escritorio como ser: tintas, l\u00e1pices, bol\u00edgrafos, engrapadoras, perforadoras, medios magn\u00e9ticos, toners para impresoras y fotocopiadoras y otros destinados al funcionamiento de oficinas.","moneda":69,"fechaTipoCambio":"30\/05\/2019","compraVenta":"C","totalAutorizadoMo":"110464.00","totalRetencionesMo":0,"totalMultasMo":0,"liquidoPagableMo":"110464.00","partidas":[{"idPtogto":3467401,"montoMo":"1880.00"},{"idPtogto":3467401,"montoMo":"85.00"},{"idPtogto":3467401,"montoMo":"238.00"},{"idPtogto":3467401,"montoMo":"14100.00"},{"idPtogto":3467431,"montoMo":"3796.00"},{"idPtogto":3467431,"montoMo":"2350.00"},{"idPtogto":3467431,"montoMo":"102.00"},{"idPtogto":3467431,"montoMo":"52.00"},{"idPtogto":3467431,"montoMo":"78.00"},{"idPtogto":3467431,"montoMo":"34.00"},{"idPtogto":3467431,"montoMo":"136.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"68.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"34.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"51.00"},{"idPtogto":3467431,"montoMo":"17.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"34.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"102.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"85.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"85.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"34.00"},{"idPtogto":3467431,"montoMo":"3542.00"},{"idPtogto":3467431,"montoMo":"26.00"},{"idPtogto":3467431,"montoMo":"68.00"},{"idPtogto":3467431,"montoMo":"3796.00"},{"idPtogto":3467431,"montoMo":"51.00"},{"idPtogto":3467431,"montoMo":"91.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467458,"montoMo":"153.00"},{"idPtogto":3467458,"montoMo":"39.00"},{"idPtogto":3467458,"montoMo":"68.00"},{"idPtogto":3467458,"montoMo":"39.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467458,"montoMo":"68.00"},{"idPtogto":3467458,"montoMo":"26.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467458,"montoMo":"51.00"},{"idPtogto":3467458,"montoMo":"51.00"},{"idPtogto":3467458,"montoMo":"26.00"},{"idPtogto":3467458,"montoMo":"102.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467458,"montoMo":"18800.00"},{"idPtogto":3467458,"montoMo":"3796.00"},{"idPtogto":3467458,"montoMo":"136.00"},{"idPtogto":3467458,"montoMo":"34.00"},{"idPtogto":3467431,"montoMo":"3760.00"},{"idPtogto":3467431,"montoMo":"68.00"},{"idPtogto":3467431,"montoMo":"170.00"},{"idPtogto":3467431,"montoMo":"4700.00"},{"idPtogto":3467431,"montoMo":"3796.00"},{"idPtogto":3467431,"montoMo":"4700.00"},{"idPtogto":3467431,"montoMo":"238.00"},{"idPtogto":3467401,"montoMo":"170.00"},{"idPtogto":3467401,"montoMo":"3760.00"},{"idPtogto":3467401,"montoMo":"3796.00"},{"idPtogto":3467401,"montoMo":"3050.00"},{"idPtogto":3467401,"montoMo":"3050.00"},{"idPtogto":3467401,"montoMo":"2720.00"},{"idPtogto":3467401,"montoMo":"3160.00"},{"idPtogto":3467401,"montoMo":"5180.00"},{"idPtogto":3467401,"montoMo":"5180.00"},{"idPtogto":3467401,"montoMo":"5180.00"},{"idPtogto":3467401,"montoMo":"3050.00"},{"idPtogto":3467431,"montoMo":"34.00"}],"respaldos":[{"tipoDocRdo":"4","nroDocRdo":"6754","secDocRdo":"1","totalDocRdo":"","fechaElaboracionRdo":"30\/05\/2019","fechaRecepcionRdo":"30\/05\/2019","fechaVencimientoRdo":null}]}',
				//"json"=>'{"usuario":"claudia.guzman","usuario_apro":"casiana.alvarez","gestion":2019,"fechaElaboracion":"31/05/2019","claseGastoCip":4,"idCatprv":null,"sigade":null,"otfin":null,"resumenOperacion":"PUBLICIDAD SIGEP may 2019","moneda":69,"fechaTipoCambio":"31/05/2019","compraVenta":"C","totalAutorizadoMo":200,"totalRetencionesMo":0,"totalMultasMo":0,"liquidoPagableMo":200,"partidas":[{"idPtogto":3098887,"montoMo":100}, {"idPtogto":3108003,"montoMo":100}],"respaldos":[{"tipoDocRdo":4,"nroDocRdo":7,"secDocRdo":1,"totalDocRdo":1,"fechaElaboracionRdo":"31/05/2019","fechaRecepcionRdo":"31/05/2019","fechaVencimientoRdo":null}]}',
                "json"=>'{"usuario":"claudia.guzman","usuario_apro":"casiana.alvarez","gestion":2019,"fechaElaboracion":"22/07/2019","claseGastoCip":4,"idCatprv":null,"sigade":null,"otfin":null,"resumenOperacion":"DE ACUERDO A INSTRUCCIONES IMPARTIDAS EN NUMERO DE TRAMITE CNAPD-000124-2019, SE RESERVA FONDOS PARA LA CONTRATACION DE PUBLICIDAD SIGEP JULIO 2019, DE ACUERDO A DOCUMENTACION ADJUNTA.","moneda":69,"fechaTipoCambio":"22/07/2019","compraVenta":"C","totalAutorizadoMo":10,"totalRetencionesMo":0,"totalMultasMo":0,"liquidoPagableMo":10,"partidas":[{"idPtogto":3099137,"montoMo":10}],"respaldos":[{"tipoDocRdo":4,"nroDocRdo":124,"secDocRdo":1,"totalDocRdo":1,"fechaElaboracionRdo":"22/07/2019","fechaRecepcionRdo":"22/07/2019","fechaVencimientoRdo":null}]}',
				"service_code"=>"PREVE"
				));
$result= json_decode($variable, true);

//var_dump($result['ROOT']['datos']);exit;
	echo $variable;*/
	//var_dump($page);

/*----------Ejecuta el Servicio ya creado en SigepServiceRequest.php---------------------*/
	//if($a = 20) {
	    //while ($b <= 40) {
            $variable = $pxpRestClient->doPost('sigep/SigepServiceRequest/procesarServices',
                array("user" => 'admin'
                ));
            $result = json_decode($variable, true);
            //var_dump($result['data']['beneficiario']);
            echo $variable;
            //$b++;
        //}
    //}

/*----------Revertir el Servicio ya creado en ServiceConfig.php---------------------*/
	/*$variable = $pxpRestClient->doPost('sigep/ServiceRequest/getServiceStatus',
		array(	"id_service_request"=>1611
				));
$result= json_decode($variable, true);
//foreach ($result as $a=>$b){
  //  echo $b;
//}
//var_dump($result['ROOT']['datos']['last_message']);exit;
	echo $variable;*/

/*/////////////////////////////////////////////////////////////////////////HASTA AQUI//////////////////////////////////////////////////////////////////////////*/

/*
	echo $pxpRestClient->doPost('sqlserver/CabeceraViatico/validarViatico', 
		array(	"id_funcionario"=>39,
				"id_int_comprobante"=>37473
				));
*/
/*
echo $pxpRestClient->doPost('sqlserver/CabeceraViatico/insertarViatico',
		array(	"id_funcionario" => 39,
				"tipo_viatico" => "administrativo",
				"descripcion" => "Por concepto de Rendicion de Viaje OB.AI.OV.31.2017",
				"acreedor" => "Funcionarios BoA",
				"fecha" => "14/06/2017",
				"nro_sigma" => "c-3658",
				"id_int_comprobante_ajusvar_dump($res->errorInfo());
		exit;te" => 37380,
				"tipo_ajuste" => "disminucion",
				//"json_detalle"=>'[{"tipo_viaje":"nacional","tipo_transaccion":"credito","tipo_credito":"banco","monto":450,"id_centro_costo":844,"forma_pago":"transferencia","acreedor":"BOA","glosa":"Devolucion de Viaticos del Funcionario JHONN EDWARD CLAROS ROJAS por Viaje a CBB-VVI-MIA-VVI-CBB"},{"tipo_viaje":"internacional","tipo_transaccion":"credito","tipo_credito":"banco","monto":2083.52,"id_centro_costo":844,"forma_pago":"transferencia","acreedor":"BOA","glosa":"Devolucion de Viaticos del Funcionario: JHONN EDWARD CLAROS ROJAS por Viaje a: CBB-VVI-MIA-VVI-CBB"},{"tipo_viaje":"","tipo_transaccion":"debito","tipo_credito":"banco","monto":2533.52,"id_centro_costo":844,"forma_pago":"transferencia","acreedor":"Funcionarios de BOA","glosa":"Creditos para el Viatico Administrativo"}]',
				  "json_detalle"=>'[{"tipo_viaje":"nacional","tipo_transaccion":"credito","monto":450,"id_centro_costo":844,"tipo_credito":"banco","forma_pago":"transferencia","acreedor":"BOA","glosa":"Devolucion de Viaticos del Funcionario: JHONN EDWARD CLAROS ROJAS por Viaje a: CBB-VVI-MIA-VVI-CBB"},{"tipo_viaje":"internacional","tipo_transaccion":"credito","monto":2083.52,"id_centro_costo":844,"tipo_credito":"banco","forma_pago":"transferencia","acreedor":"BOA","glosa":"Devolucion de Viaticos del Funcionario: JHONN EDWARD CLAROS ROJAS por Viaje a: CBB-VVI-MIA-VVI-CBB"},{"tipo_viaje":"","tipo_transaccion":"debito","monto":2533.52,"id_centro_costo":844,"tipo_credito":"banco","forma_pago":"transferencia","acreedor":"Funcionarios de BOA","glosa":"Creditos para el Viatico Administrativo"}]'
		));
*/
/*
		echo $pxpRestClient->doPost('almacenes/Item/listarSaldoXItem', 
		array(					
				"codigo"=>"3.2.1.1",
				"id_almacen"=>1
				));
	
	echo $variable;
*/
/*
	echo $pxpRestClient->doPost('almacenes/Item/listarSaldosXItems', 
		array(					197588
				"codigos"=>"3.4.1.54.1,3.4.1.54.2,3.4.1.54.3,3.4.1.54.4,3.4.1.54.5,3.4.1.60,3.4.2.1.3,3.4.2.1.4,3.4.2.1.5,3.4.2.1.6,3.4.2.1.7,3.4.2.1.8,3.4.2.1.9,34,35,3.4.2.2.3,3.4.2.2.4,3.4.2.2.5,3.4.2.2.6,3.4.2.2.7,3.4.2.2.8,3.4.2.2.9,15,3.4.1.27.3,3.4.1.27.4,3.4.1.27.5,3.4.1.27.6,3.4.1.27.7,16,17,3.4.1.12.1.2,3.4.1.12.1.3,3.4.1.12.1.4,3.4.1.12.1.5,F,14,14.5,3.4.1.3.1.1,3.4.1.3.1.2,3.4.1.3.1.3,3.4.1.3.1.4,3.4.1.3.1.5,3.4.1.3.1.6,3.4.1.3.1.7,3.4.1.3.1.7.5,3.4.1.50.1,3.4.1.4.1.1,3.4.1.4.1.2,3.4.1.4.1.3,3.4.1.4.1.4,3.4.1.4.1.5,3.4.1.4.1.6,3.4.1.4.1.7,3.4.1.4.1.7.5,3.4.1.26.3,3.4.1.26.4,3.4.1.26.5,3.4.1.26.6,3.4.1.26.7,3.4.1.25.3,3.4.1.25.4,3.4.1.25.5,3.4.1.25.6,3.4.1.7.1,3.4.1.7.2,3.4.1.7.3,3.4.1.7.4,3.4.1.7.5,3.4.1.15.2,3.4.1.15.3,3.4.1.15.4,3.4.1.15.5,3.4.1.15.6,3.4.1.5.1.2,3.4.1.5.1.3,3.4.1.5.1.4,3.4.1.5.1.5,3.4.1.5.1.6,3.4.1.5.2.1,3.4.1.5.2.2,3.4.1.5.2.3,3.4.1.5.2.4,3.4.1.5.2.5,3.4.1.5.2.6,3.4.1.5.2.7,XXXL,3.4.1.51,3.4.1.18.2,3.4.1.18.3,3.4.1.18.4,3.4.1.18.5,3.4.1.18.6,3.4.1.64,3.4.1.48,3.4.1.29,3.4.1.33,3.4.1.19,3.4.1.31,3.4.1.30,3.4.1.12.1.6,3.4.1.11.4,3.4.1.11.5,3.4.1.1.1.3,3.4.1.1.1.4,3.4.1.1.1.5,3.4.1.1.1.6,3.4.1.1.2.1,3.4.1.1.2.2,3.4.1.1.2.3,3.4.1.14.6,3.4.1.14.7,3.4.1.50.2,3.4.1.1.1.2,3.4.1.21,3.4.1.53,3.4.1.63,3.4.1.20,3.4.1.7.6,3.4.1.11.3",
            //"codigos"=>"3.4.1.5.1.3",
            "id_almacen"=>1
				));
	
	echo $variable;
*/
/*echo $pxpRestClient->doPost('organigrama/Cargo/listarCargoAcefalo',
    array(
        "tipo_contrato"=>"planta",
        "fecha"=>"26/01/2017",
        //"id_gerencia"=>"",
        "cargo"=>"trafi"
    ));*/

/*echo $pxpRestClient->doPost('organigrama/Funcionario/getDatosFuncionario',
    array(
        "nombre_empleado"=>"rivera",
        "start"=>0,
        "limit"=>50

    ));*/


/*
echo $pxpRestClient->doPost('obingresos/Deposito/subirArchivoDeposito',
    array(
        "id_deposito"=>"49929",
        "nombre_archivo"=> "Archivo-20170920_034547.docx"

    ));
*/
/*echo $pxpRestClient->doPost('obingresos/DetalleBoletosWeb/insertarBilletePortal',
    array(
        "billete"=>"9304017399622",
        "medio_pago"=>"CUENTA-CORRI",//CUENTA-CORRI,PBANCA-ELECTRONI
        "entidad"=>"NINGUNA",//NINGUNA,BUN
        "moneda"=>"BOB",
        "importe"=>279,
        "fecha_emision"=>"06/08/2017",//DD/MM/YYYY
        "nit"=>"1234",
        "razon_social"=>"jrivera",
        "fecha_pago"=>"06/08/2017",//DD/MM/YYYY
        "id_entidad"=>1906,
        "comision"=>23.3,
        "neto"=>233,
        "numero_autorizacion"=>"c2e56673-03cf-4690-9286-1b3bedac3c9c"

    ));

*/

/*echo $pxpRestClient->doPost('obingresos/PeriodoVenta/listarTotalesPeriodoAgencia',
    array(
        "id_periodo_venta"=>"5",
        "start"=>0,
        "limit"=>1000

    ));
*/
/*echo $pxpRestClient->doPost('obingresos/Agencia/subirArchivoContrato',
    array(
        "id_documento_wf"=>"197624",
        "nombre_archivo"=>" Archivo-20170522_170031.pdf"

    ));

echo $pxpRestClient->doPost('obingresos/Agencia/insertarBoletaAgencia',
    array(
        "id_contrato"=>"197624",
        "banco"=>"BUN",
        "tipo_boleta"=>"poliza",
        "fecha_inicio"=>"01/01/2017",
        "fecha_fin"=>"31/01/2017",
        "moneda"=>"BOB",
        "monto"=>"100"

    ));

*/
/*
echo $pxpRestClient->doPost('almacenes/Item/nombreClasificacionItems',
    array(
        "codigos"=>"3.4.1.55.2,3.4.1.52,3.4.1.52,3.4.1.1.2.2"
    ));
*/

/*echo $pxpRestClient->doPost('obingresos/Deposito/listarDeposito',
    array(
        "id_deposito"=>"33645",
        "start"=>0,
        "limit"=>50

    ));base64_encode(
	            mcrypt_encrypt(
	                MCRYPT_RIJNDAEL_256,
	                $sSecretKey, $sValue, 
	                MCRYPT_MODE_ECB, 
	                mcrypt_create_iv(
	                    mcrypt_get_iv_size(
	                        MCRYPT_RIJNDAEL_256, 
	                        MCRYPT_MODE_ECB
	                    ), 
	                    MCRYPT_RAND)
	                )
	            )
	*/
/*
echo $pxpRestClient->doPost('obingresos/PeriodoVenta/listarDetallePeriodoAgencia',
    array(
        "id_agencia"=>"228",
        "id_periodo_venta"=>"",
        "tipo"=>'cuenta_corriente'

    ));
*/

/*echo $pxpRestClient->doPost('obingresos/PeriodoVenta/ResumenEstadoCC',
    array(
        "id_agencia"=>"4618"

    ));*/

/*echo $pxpRestClient->doPost('obingresos/MovimientoEntidad/anularAutorizacion',
    array(
        "autorizacion"=>"b2cc105a-00ce-4956-a104-43f7fbbda7b5",
        "billete"=>"9302400005121"

    ));
*/
/*
$res = $pxpRestClient->doPost('legal/ContratoComercial/ReporteContratoComercial',
    array(
    	"id_documento_wf"=>'199874',	
    	"tipo"=>"1",//1 banca,2 poliza ,3 prepago
        "codigo_documento"=>'CC1',
        "nombre_agencia"=>'aries',
        "direccion"=>'direccion agencia',
        "esquina"=>'',
		"zona"=>'gdfsg',
		"correo"=>'aaa@bbb.ccc',
		"telefono"=>'456456',
		"celular"=>'6456456',
		"nit"=>'123456',
		"representante_legal"=>'jmp',
		"cedula_identidad"=>'1234',
		"expedido"=>'CB',
		"fecha_inicio"=>'25/02/2018',
		"fecha_fin"=>'25/02/2019',
		"numero"=>'CC1',
		"aseguradora"=>'xxxx',
		"monto"=>'580',
		"hrs_ini"=>'11:15 PM',
		"fecha_vigente_inicio"=>'25/02/2018',
		"hrs_fin"=>'11:15 PM',
		"fecha_vigente_fin"=>'25/02/2019'));
		
	//el reporte esta en: direccion_erp/lib/lib_control/Intermediario.php?r='+archivo_generado(del json)
echo $res;
*/

/*echo $pxpRestClient->doPost('obingresos/Deposito/insertarDeposito',
    array(

        "tipo"=>"agencia",
        "saldo"=>"",
        "id_agencia"=>"110",
        "nro_deposito"=>"yyyy",
        "fecha"=>"31/01/2017",
        "moneda"=>"BOB",
        "monto_deposito"=>"100",
        "id_periodo_venta" =>""

    ));
*/

/*echo $pxpRestClient->doPost('parametros/Archivo/subirArchivo',
    array(
        "id_tabla"=>"33705",
        "tabla"=>"obingresos.tdeposito",
        "codigo_tipo_archivo"=>"ESCANDEP",
        "nombre_descriptivo"=>"",
        "archivo" => '@/tmp/Archivo-20170829_183321.pdf;filename=Archivo-20170829_183321.pdf'

    ));
*/
/*echo $pxpRestClient->doPost('parametros/Archivo/getRutaArchivo',
    array(
        "id_archivo"=>"17"

    ));
*/
/*

$this->setParametro('id_contrato','id_contrato','integer');
        $this->setParametro('banco','banco','varchar');
        $this->setParametro('tipo_boletvar_dump($res->errorInfo());
		exit;a','tipo_boleta','varchar');
        $this->setParametro('fecha_inicio','fecha_inicio','date');
        $this->setParametro('fecha_fin','fecha_fin','date');
        $this->setParametro('moneda','moneda','varchar');
        $this->setParametro('monto','monto','numeric');
*/
    /*echo $pxpRestClient->doPost('obingresos/TipoPeriodo/obtenerTipoPeriodoXFP',
    array(
        "formas_pago"=>"banca_internet,postpago"

    ));*/
    
   /* echo $pxpRestClient->doPost('obingresos/Agencia/finalizarContratoPortal',
    array(
        "id_contrato"=>"1029"

    ));*/

/*echo $pxpRestClient->doPost('obingresos/Agencia/insertarContratoPortal',
    array(
        "id_agencia"=>"4148",
        "id_funcionario"=>"1347",
        "numero_contrato"=>"12345",
        "objeto"=>"pruebajrr",
        "fecha_firma"=>"01/01/2017",
        "fecha_inicio"=>"01/01/2017",
        "fecha_fin"=>"31/12/2017",
        "tipo_agencia"=>"noiata",
        "formas_pago"=>"postpago",
        "moneda_restrictiva"=>"si",
        "cuenta_bancaria1"=>"",
        "entidad_bancaria1"=>"",
        "cuenta_bancaria1"=>"",
        "nombre_cuenta_bancaria1"=>"",
        "cuenta_bancaria2"=>"",
        "entidad_bancaria2"=>"",
        "nombre_cuenta_bancaria2"=>"",

    ));
*/
/*
echo $pxpRestClient->doPost('workflow/DocumentoWf/getRutaDocumento',
    array(
        "id_documento_wf"=>"197588"

    ));
*/
/*
echo $pxpRestClient->doPost('obingresos/Agencia/verificarSaldo',
    array(
        "pnr"=>"TREY1B",
        "apellido"=>"prueba",
        "id_agencia"=>"149",
        "forma_pago"=>"postpago",
        "monto"=>"307",
        "monto_total"=>"350",
        "moneda"=>"BOB",
        "usuario"=>"xxx",
        "tipo_usuario"=>"",
        "fecha"=>"22/09/2017"

    ));

*/
/*
echo $pxpRestClient->doPost('obingresos/Agencia/getSaldoAgencia',
    array(
        "id_agencia"=>"4144",
        "moneda"=>"BOB"
    ));
*/

/*echo $pxpRestClient->doPost('workflow/DocumentoWf/subirArchivoWf',
    array(
        "id_documento_wf"=>"197624",
        "num_tramite"=>"",
        "archivo" => '@' . realpath('mozilla.pdf') . ';filename=mozilla.pdf'

    ));
*/

/*
echo $pxpRestClient->doPost('obingresos/Agencia/getDocumentosContrato',
    array(
        "id_contrato"=>"1007"

    ));
*/
/*
echo $pxpRestClient->doPost('presupuestos/Presupuesto/listarPresupuestoRest',
    array(
        "gestion"=>"2017"
    ));
*/
/*
echo $pxpRestClient->do2Post('presupuestos/PresupuestoFuncionario/listarCentroCostoFuncionarios',
    array(
        "id_cc"=>885,
        "gestion"=>"2017"
    ));

/*
$res = $pxpRestClient->doPost('reclamo/Respuesta/reporteRespuestaPDF',
    array("id_proceso_wf"=>'141236'));

echo $res;*/


	
	/*echo $pxpRestClient->doPost('almacenes/Clasificacion/listarClasificacionArb',
		array(					
				"node"=>"219",
				"id_clasificacion"=>"219"
				));
	
	echo $variable;
*/
/*
$res = $pxpRestClient->doPost('tesoreria/Clasificacion/listarClasificacionRopaTrabajoTalla',
		array(	"id_proceso_wf"=>68528,
				"firmar"=>'si',
				"fecha_firma"=>'01/01/2016',
				"usuario_firma"=>'jmp',
				"nombre_usuario_firma"=>'jmp'));
echo $res;*/
/*
$res = $pxpRestClient->doPost('almacenes/Reportes/reporteExistencias',
		array(	"id_almacen"=>1,
				"fecha_hasta"=>'30/03/2017',
				"all_items"=>'Por Clasificacion',
				"all_items"=>'Por Clasificacion',
				"id_items"=>'',
				"clasificacion"=>'[3.4]-Ropa de Trabajo',
				"alertas"=>'no',
				"saldo_cero"=>'si',
				"id_clasificacion"=>30,
				"almacen"=>'ALMACEN CENTRAL CTO-CBB'));
echo $res;
*/

/*$res = $pxpRestClient->doPost('organigrama/CertificadoPlanilla/insertarCertificadoPlanilla',
    array(	"tipo_certificado"=>"General",
        "fecha_solicitud"=>'04/08/2017',
        "id_funcionario"=>1670,
        "importe_viatico"=>""));
echo $res;

*/
/*
$res = $pxpRestClient->doPost('obingresos/PeriodoVenta/validarBoletosPortal',
    array(	"fecha_emision"=>"14/08/2017"));
echo $res;*/

/*$variable = $pxpRestClient->doPost('ventas_facturacion/Venta/insertarVentaCompleta',
    array(	"id_cliente"=>1,
        "nit"=>4394,
        "id_sucursal"=>13,
        "nro_tramite"=>'',
        "a_cuenta"=>0,
        "total_venta"=>56,
        "fecha_estimada_entrega"=>"",
        "id_punto_venta"=>5,
        "id_forma_pago"=>890,
        "monto_forma_pago"=>56,
        "numero_tarjeta"=>"",
        "codigo_tarjeta"=>"",
        "tipo_tarjeta"=>"",
        "porcentaje_descuento"=>"",
        "id_vendedor_medico"=>"",
        "comision"=>"",
        "observaciones"=>"venta prueba servicio",
        "tipo_factura"=>"computarizada",
        "fecha"=>"18-09-2017",
        "nro_factura"=>"50",
        "id_dosificacion"=>"1",
        "excento"=>0,
        "id_moneda"=>1,
        "tipo_cambio_venta"=>"",
        "total_venta_msuc"=>56,
        "transporte_fob"=>56,
        "seguros_fob"=>"",
        "otros_fob"=>"",
        "transporte_cif"=>"",
        "seguros_cif"=>"",
        "otros_cif"=>"",
        "valor_bruto"=>"",
        "descripcion_bulto"=>"",
        "id_cliente_destino"=>"",
        "hora_estimada_entrega"=>"",
        "forma_pedido"=>"",
        "json_new_records"=>'[{"id_item":"8","id_producto":1,"id_formula":"","tipo":"servicio","estado_reg":"activo","cantidad":3,"precio":3,"sw_porcentaje_formula":"","porcentaje_descuento":"","id_vendedor_medico":"","descripcion":"","id_venta":"","bruto":"","ley":"","kg_fino","","id_unidad_medida":2}]',
        "id_forma_pago"=>0,
        "formas_pago"=>'[{"id_forma_pago":"980","valor":1,"numero_tarjeta":"","codigo_tarjeta":"","tipo_tarjeta":"","id_venta":""}]',
    ));
echo $variable;*/


/*$res = $pxpRestClient->doPost('ventas_facturacion/Dosificacion/alertarDosificacion',
    array());
echo $res;*/
/*
$res = $pxpRestClient->doPost('organigrama/CertificadoPlanilla/consultaDatosFuncionario',
        array( "id_funcionario"=>424));
echo $res;
*/
exit;
	
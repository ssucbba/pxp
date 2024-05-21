<?php
if (version_compare(phpversion(), '5.4.0', '<')) {
     if(session_id() == '') {
        session_start();
     }
 }
 else
 {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
 }
require_once(dirname(__FILE__).'/../DatosGenerales.php');
require_once(dirname(__FILE__).'/../tcpdf/config/lang/spa.php');
require_once(dirname(__FILE__).'/../tcpdf/tcpdf.php');

class ReportePDF2 extends TCPDF {
	
	//Array con la configuracion por defecto para instanciar la clase TCPDF
	private $arrConfig=array('orientation'=>'P', 'unit'=>'mm', 'format'=>'A4', 'unicode'=>true, 'encoding'=>'UTF-8', 'diskcache'=>false, 'pdfa'=>false);
	//Array con todas las constantes por defecto
	private $arrValDefecto=array();
	private $arrPlantillaHtmlGenericKeys;

	//Objeto parametro con todas las variables enviadas
	private $objParam;
	private $strUrlArchivo;
	private $strNombreArchivo;
	private $strHeaderHtml;
	private $strFooterHtml;
	private $strTipoFooter='tcpdf';
	private $strTipoHeader='tcpdf';
	private $strMarca='**';
	
	//////////////
	//Constructor
	//////////////
	
	function __construct(CTParametro $pObjParam){
		$this->objParam=$pObjParam;
		//Llama al constructor de la clase padre
		parent::__construct($this->getValorConfig('orientation'),
							 $this->getValorConfig('unit'),
							 $this->getValorConfig('format'),
							 $this->getValorConfig('unicode'),
							 $this->getValorConfig('encoding'),
							 $this->getValorConfig('diskcache'),
							 $this->getValorConfig('pdfa')
		);
		
		//Setea datos generales del documento
		$this->setDatosReporte();
		
		//Inicializar configuraciones
		$this->__init();
		
		//Generacion de codigo de barras de control para el reporte
		$this->genBarCode();
		
		//Inicializa los valores por defecto
		$this->inicializarValoresDef();
		
		//Forma la url del archivo a generar
		$this->strNombreArchivo=$this->getValorDef('nombre_archivo').'_'.date('dmY_His').'.pdf';
		$this->strUrlArchivo = $this->getValorDef('url_archivo').$this->strNombreArchivo;
	}
	
	/////////
	//Metodos
	/////////
	
	protected function __init(){
		//$this->SetProtection($permissions=array('print','copy','print-high','modify'), $user_pass='', $owner_pass=null, $mode=0, $pubkeys=null);
		$this->SetHeaderData('../..'.$_SESSION['_DIR_LOGO'], PDF_HEADER_LOGO_WIDTH, $this->getValorDef('titulo'));
		
		//Set header and footer fonts
		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		//Set default monospaced font
		$this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		//Set margins
		$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		//Set auto page breaks
		$this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		//Set image scale factor
		$this->setImageScale(PDF_IMAGE_SCALE_RATIO);
	}

	protected function genBarCode(){
		$this->setBarcode(date('d-m-Y H:i:s').",usuario:".$_SESSION['_LOGIN']);
	}
	
	protected function inicializarValoresDef(){
		//Valores generales por defecto
		$this->arrValDefecto=array('url_archivo'=>dirname(__FILE__).'/../../../reportes_generados/',
									'nombre_archivo'=>'reporte_pdf','creator'=>'pXP','author'=>'Kplian',
									'title1'=>'REGISTRO','title2'=>'Reporte generado por PXP',
									'subject'=>'File generated by pXP framework','keywords'=>'TCDF, PDF, pXP',
									'main_ruta_logo'=>dirname(__FILE__).'/..'.$_SESSION['_DIR_LOGO']);
									
		//Incializa los Keys genéricos para todas las plantillas
		$this->arrPlantillaHtmlGenericKeys=array('main_title1','main_title2','main_pagina_actual','main_pagina_total','main_user','main_sistema','main_barcode',
												'main_ruta_logo','main_date','1_','_1');
	}
	
	public function generarReporte(){
		//$this->AddPage();
		parent::output($this->strUrlArchivo,'F');
	}
	
	function Header(){
		if($this->strTipoHeader=='html'){
			//Formato Html
			$this->writeHTML($this->strHeaderHtml,true,false,true,false,'');
		} else{
			//Formato TCPDF
			$this->renderHeaderTCPDF();
		}
	}
	
	function Footer(){
		if($this->strTipoFooter=='html'){
			//Formato Html
			$this->writeHTML($this->strFooterHtml,true,false,true,false,'');
		} else{
			//Formato TCPDF
			$this->renderFooterTCPDF();
		}
	}
	
	protected function renderHeaderTCPDF(){
		//TODO: Implementar funcionalidad		
	}
	
	protected function renderFooterTCPDF(){
		//TODO: Implementar funcionalidad		
	}  
	
	///////////////
	//Propiedades
	///////////////
	
	public function getNombreArchivo(){
		return $this->strNombreArchivo;
	}
	
	public function setHeaderHtml($pHtml){
		$this->strHeaderHtml=$this->evaluarPlantillaHtml($pHtml);
		$this->strTipoHeader='html';
		//echo 'ff:'.$this->strHeaderHtml;
	}

	public function setFooterHtml($pHtml){
		$this->strFooterHtml=$this->evaluarPlantillaHtml($pHtml);
		$this->strTipoFooter='html';
	}
	
	//Devuelve el valor de la Llave, buscando primero en el objeto parametro y si no hay en los valores por defecto
	protected function getValorConfig($pKey){
		return $this->objParam->getParametro($pKey)!=''?$this->objParam->getParametro($pKey):$this->arrConfig[$pKey];
	}
	
	//Devuelve el valor de la Llave, buscando primero en el objeto parametro y si no hay en los valores por defecto
	protected function getValorDef($pKey){
		$aux=$this->objParam->getParametro($pKey)!=''?$this->objParam->getParametro($pKey):$this->arrValDefecto[$pKey];
		return $aux;
	}
	
	protected function setDatosReporte(){
		$this->SetCreator($this->getValorDef('creator'));
		$this->SetAuthor($this->getValorDef('author'));
		$this->SetTitle($this->getValorDef('title2'));
		$this->SetSubject($this->getValorDef('subject'));
		$this->SetKeywords($this->arrValDefecto['keywords'].$this->getValorDef('title2'));
	}
	
	//Reemplaza las marcas por los valores dinámicos
	protected function evaluarPlantillaHtml($pHtml){
		//Evalua las variables principales
		foreach ($this->arrPlantillaHtmlGenericKeys as $key => $val) {
			$aux = $this->strMarca.$val.$this->strMarca;
			$pos = strpos($pHtml, $aux);
			if($pos){
				$pHtml = str_replace($aux, $this->getValorPlantilla($val), $pHtml);
			}
		}
		return $pHtml;
	}
	
	protected function getValorPlantilla($pKey){
		if($pKey=='main_pagina_actual' OR $pKey=='1_'){
			$resp=$this->getAliasNumPage();
		} else if($pKey=='main_pagina_total' OR $pKey=='_1'){
			$resp=$this->getAliasNbPages();
		} else if($this->objParam->getParametro($pKey)!=''){
			$resp=$this->objParam->getParametro($pKey);
		} else {
			$resp=$this->strMarca.$pKey.$this->strMarca;
		}
		return $resp;
	}

}
?>
	
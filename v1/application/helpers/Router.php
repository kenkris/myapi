<?php

class Router{

	private $aRoutes = array();

	function __construct(){
		//  Get routes
		require_once('routes.php');
		$this->aRoutes = $aRoutes;
	}

	public function routeRequest($sUrl, $sMethod, $oPayload = null){
		error_log("R O U T E  R E Q :");
		error_log(print_r($this->aRoutes, true));
		error_log($sUrl);
		error_log($sMethod);
		error_log(print_r($oPayload, true));
	}

}



?>

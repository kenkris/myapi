<?php

class Router{

	$aRoutes = array();

	function __construct($aRoutes){
		$this->aRoutes = $aRoutes;
	}

	public function routeRequest($aRoutes, $sUrl, $sMethod, $oPayload){

		error_log(print_r($aRoutes, true));
		error_log($sUrl);
		error_log($sMethod);
		error_log(print_r($oPayload, true));

	}

}



?>

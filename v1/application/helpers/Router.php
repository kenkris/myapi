<?php

class Router{

	private $aRoutes = array();

	function __construct(){
		//  Get routes
		require_once('routes.php');
		$this->aRoutes = $aRoutes;
	}

	public function routeRequest(string $sUrl, string $sMethod, object $oPayload = null){

		error_log($sUrl);
		error_log($sMethod);
		error_log(print_r($oPayload, true));

		$aUrl = explode('/', $sUrl);

		foreach($this->aRoutes as $oRoute){
			error_log(print_r($oRoute, true));

			$aSplittedRouted = explode('/', $oRoute->sUrl);


		}






	}

}



?>

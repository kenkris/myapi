<?php

class AppV1{

	public function start(){

		error_log("START APP!");

		/**
		 * Handle API request
		 */
		require_once('Router.php');
		$oRouter = new Router();

		$sUrl     = substr($_SERVER['REQUEST_URI'], 3);  //  Remove v1 from URL
		$sMethod  = $_SERVER['REQUEST_METHOD'];
		$oPayload = !empty(file_get_contents('php://input')) ? json_decode(file_get_contents('php://input')) : null;

		$oRouter->routeRequest($sUrl, $sMethod, $oPayload);

		error_log("DONE!");
	}


}


?>

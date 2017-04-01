<?php

class AppV1{

	public function start(){

		error_log("START APP!");

		/**
		 * Handle API request
		 */
		require_once('Router.php');
		$oRouter = new Router();

		$sUrl     = $_SERVER['REQUEST_URI'];
		$sMethod  = $_SERVER['REQUEST_METHOD'];
		$oPayload = !empty(file_get_contents('php://input')) ? json_decode(file_get_contents('php://input')) : null;

		$oRouter->routeRequest($sUrl, $sMethod, $oPayload);

		error_log("DONE!");
	}


}


?>

<?php

class AppV1{

	public function start(){

		require_once('Router.php');
		require_once('Format.php');
		require_once('Response.php');

		/**
		 * Handle API request
		 */
		$oRouter = new Router();

		$sUrl     = substr($_SERVER['REQUEST_URI'], 3);  //  Remove v1 from URL
		$sMethod  = $_SERVER['REQUEST_METHOD'];
		$oPayload = !empty(file_get_contents('php://input')) ? json_decode(file_get_contents('php://input')) : null;

		$oResult = $oRouter->routeRequest($sUrl, $sMethod, $oPayload);

		if(empty($oResult)){
			$oResult = new Response();
			$oResult->setError = 'Unknown error occurred';
		}

		error_log(print_r($oResult, true));

		$oFormat = new Format();
		//echo $oFormat->toJSON($oResult);

		// $oTest = new stdClass();
		// $oTest->name = 'kenneth';
		// $oTest->test = 'dsjkjk';


		// $oResult = new Response();
		// $oResult->setError = 'Unknown error occurred';
		// $oResult->setResult = array('zzzz', 'ssssss');

		header('Content-Type: application/json');

		echo json_encode($oResult);
	}


}


?>

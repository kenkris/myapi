<?php

//  Check for Url
if(empty($_SERVER['REQUEST_URI'])){
	exit();
}

error_log($_SERVER['REQUEST_URI']);

//  API version to load
$sApiVersion = getApiVersion($_SERVER['REQUEST_URI']);
if(empty($sApiVersion)){
	exit();
}

switch($sApiVersion){
	case 'v1' :
		//  Set includ paths
		set_include_path('v1/application/helpers:v1/application/helpers/classes:v1/application/models:v1/config:global_config/db:global_classes');

		//  Run app
		require_once('AppV1.php');
		$appV1 = new AppV1();
		$appV1->start();

		break;
	default :
		exit();
}




/**
 * Get API version from requested URL
 * @param  string $sUrl
 * @return string .
 */
function getApiVersion($sUrl): string{
	$aUrl = explode('/', $sUrl);
	error_log(print_r($aUrl, true));
	if(!empty($aUrl[1])){
		return strtolower($aUrl[1]);
	} else{
		return false;
	}
}

?>

<?php

/**
 * Bootstrapping
 */

//  Set includ paths
set_include_path('application/helpers:application/models:config');

//  Get routes map
require_once('routes.php');

/**
 * Handle API request
 */
require_once('Router.php');
$oRouter = new Router($aRoutes);

$sUrl     = $_SERVER['REQUEST_URI'];
$sMethod  = $_SERVER['REQUEST_METHOD'];
$oPayload = !empty(file_get_contents('php://input')) ? json_decode(file_get_contents('php://input')) : null;

$oRouter->routeRequest($sUrl, $sMethod, $oPayload);

?>

<?php

require_once('Route.php');

$aRoutes = array();

$oRoute = new Route();
$oRoute->setName('TestRoute');
$oRoute->setUrl('person');
$oRoute->setAction('Person', 'person');
$aRoutes[$oRoute->getUrl()] = $oRoute;

$oRoute = new Route();
$oRoute->setName('TestRoute');
$oRoute->setUrl('person/{someVal}');
$oRoute->setAction('Person', 'person');
$aRoutes[$oRoute->getUrl()] = $oRoute;





?>
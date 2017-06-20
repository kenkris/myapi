<?php

require_once('Route.php');

/**
 * Dynamic params regex examples:
 *
 * /{personId:\d+}  //  Match numeric one or unlimited
 *
 * 	Regex's:
 *	\d+ numeric value, one or unlimited digits
 * 	.+ wildcard, anything goes, one or unlimited chars
 */

$aRoutes = array();

$oRoute = new Route();
$oRoute->setName('TestRoute');
$oRoute->setUrl('/person');
$oRoute->setAction('Person', 'person');
$aRoutes[$oRoute->getUrl()] = $oRoute;

$oRoute = new Route();
$oRoute->setName('TestRoute');
$oRoute->setUrl('/person/{someVal:\d+}');
$oRoute->setAction('Person', 'person');
$aRoutes[$oRoute->getUrl()] = $oRoute;


?>
<?php

$aDBConnections = array();

$oDbCon = new stdClass();
$oDbCon->title    = 'test';
$oDbCon->host     = '127.0.0.1';
$oDbCon->database = 'test';
$oDbCon->port     = 3306;
$oDbCon->user     = 'root';
$oDbCon->password = 'root';
$aDBConnections[$oDbCon->title] = $oDbCon;

?>

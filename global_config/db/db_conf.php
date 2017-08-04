<?php

$aDBConnections = array();

$oDbCon = new DatabaseConnection();
$oDbCon->setTitle('test');
$oDbCon->setHost('127.0.0.1');
$oDbCon->setDatabase('test');
$oDbCon->setPort(3306);
$oDbCon->setUser('root');
$oDbCon->setPassword('root');
$aDBConnections[$oDbCon->getTitle()] = $oDbCon;

error_log(print_r($aDBConnections, true));

?>

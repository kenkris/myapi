<?php

require_once('DatabaseConnection.php');

$aDBConnections = array();

$oDbCon = new DatabaseConnection('host', 'database' 'user', 'password');
$aDBConnections[$oDbCon->getDatabase()];

error_log(print_r($aDBConnections, true));


?>

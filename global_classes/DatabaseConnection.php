<?php

class DatabaseConnection{

	private $aDBConnections;

	public function __construct(){
		require_once('db_conf.php');
		$this->aDBConnections = $aDBConnections;
	}

	/**
	 * Return an PDO db handle for a specific database.
	 * @param  string $sDatabase [description]
	 * @return [type]            [description]
	 */
	public function getDatabaseHandle(string $sDatabase){

		if(isset($this->aDBConnections[$sDatabase])){
			$oDbConnection = $this->aDBConnections[$sDatabase];

			$oDbHandle = new PDO(
				'mysql:host=' . $oDbConnection->host . ';port=' . $oDbConnection->port . ';dbname=' . $oDbConnection->database,
				$oDbConnection->user,
				$oDbConnection->password,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			return $oDbHandle;
		} else{
			return null;
		}
	}

}


?>

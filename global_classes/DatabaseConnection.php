<?php

class DatabaseConnection{

	private $sHost;
	private $sDatabase;
	private $sUser;
	private $sPassword;
	private $iPort;
	private $sTitle;
	private $aDBConnections;

	public function __construct(){
		require_once('db_conf.php');
		$this->aDBConnections = $aDBConnections;
	}

	public function getHost(): string { return $this->sHost; }
	public function setHost(string $sHost){ $this->sHost = $sHost; }

	public function getDatabase(): string { return $this->sDatabase; }
	public function setDatabase(string $sDatabase){ $this->sDatabase = $sDatabase; }

	public function getUser(): string{ return $this->sUser; }
	public function setUser(string $sUser){ $this->sUser = $sUser; }

	public function getPassword(): string{ return $this->sPassword; }
	public function setPassword(string $sPassword){ $this->sPassword = $sPassword; }

	public function getPort(): int{ return $this->iPort; }
	public function setPort(int $iPort){ $this->iPort = $iPort; }

	public function getTitle(): string{ return $this->sTitle; }
	public function setTitle(string $sTitle){ $this->sTitle = $sTitle; }

	/**
	 * Return an PDO db handle for a specific database.
	 * @param  string $sDatabase [description]
	 * @return [type]            [description]
	 */
	public function getDatabaseHandle(string $sDatabase){

		if(isset($this->aDBConnections[$sDatabase])){
			$oDbConnection = $this->aDBConnections[$sDatabase];

			$oDbHandle = new PDO(
				'mysql:host=' . $oDbConnection->getHost() .
				';port=' . $oDbConnection->getPort() .
				';dbname=' . $oDbConnection->getDatabase(),
				$oDbConnection->getUser(),
				$oDbConnection->getPassword());
			return $oDbHandle;
		} else{
			return null;
		}
	}

}


?>

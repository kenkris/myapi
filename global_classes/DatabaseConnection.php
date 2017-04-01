<?php

class DatabaseConnection{

	private $sHost;
	private $sDatabase;
	private $sUser;
	private $sPassword;
	private $iPort;

	const DEFAULT_DB_PORT = 3306;

	function __construct(string $sHost, string $sDatabase, string $sUser, string $sPassword){
		$this->sHost     = $sHost;
		$this->sDatabase = $sDatabase;
		$this->sUser     = $sUser;
		$this->sPassword = $sPassword;
		$this->port      = self::DEFAULT_DB_PORT;
	}

	public function getHost(): string{
		return $this->sHost;
	}

	public function getDatabase(): string{
		return $this->sDatabase;
	}

	public function getUser(): string{
		return $this->sUser;
	}

	public function getPassword(): string{
		return $this->sPassword;
	}

	public function getPort(): int{
		return $this->sPassword;
	}

	public function setPort(int $iPort){
		$this->iPort = $iPort;
	}

}


?>

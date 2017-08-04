<?php
require_once('DatabaseConnection.php');

class APIService{

	protected $oDatabaseConnection;

	public function __construct(){

		//  Make db function avail for sub class'
		$this->oDatabaseConnection = new DatabaseConnection();

	}



}



?>

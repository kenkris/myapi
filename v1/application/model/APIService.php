<?php
require_once('DatabaseConnection.php');
require_once('Response.php');

class APIService{

	protected $oDatabaseConnection;
	protected $oResponse;

	public function __construct(){

		//  Make db function avail for sub class'
		$this->oDatabaseConnection = new DatabaseConnection();

		//  Set respone obj on sub class
		$this->oResponse = new Response();

	}



}



?>

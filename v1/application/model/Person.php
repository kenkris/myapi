<?php

class Person{

	private $iId;
	private $sFirstName;
	private $sLastName;
	private $sEmail;
	private $sDOB;
	private $sPhoneNo;
	private $sCellPhoneNo;

	/**
	 * Constructors
	 */

	/**
	 * If id is supplied try fetching it from db
	 * @param integer $iId
	 * @return   [<description>]
	 */
	public function __construct(int $iId){
		//  DO getPerson(id)
		//
		//  throw exception on no result.
	}

	/**
	 *
	 * @param string $sFirstName
	 * @param string $sLastName
	 * @param string $sEmail
	 */
	public function __construct(string $sFirstName, string $sLastName, string $sEmail){
		//  Crete person in db and set class attr afterwards
	}

	/**
	 * Getters and setters
	 */
	public function getId() : int{ return $this->iId; }
	public function setId(int $iId){ $this->iId = $sId; }



}


?>



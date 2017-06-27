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
	public function getId() : int { return $this->iId; }
	public function setId(int $iId){ $this->iId = $sId; }

	public function getFirstName() : string { return $this->sFirstName; }
	public function setFirstName(string $sFirstName){ $this->sFirstName = $sFirstName; }

	public function getLastName() : string { return $this->sLastName; }
	public function setLastName(string $sLastName){ $this->sLastName = $sLastName; }

	public function getEmail() : string { return $this->sEmail; }
	public function setEmail(string $sEmail){ $this->sEmail = $sEmail; }

	public function getDOB() : string { return $this->sDOB; }
	public function setDOB(string $sDOB){ $this->sDOB = $sDOB; }

	public function getPhoneNo() : string { return $this->sPhoneNo; }
	public function setPhoneNo(string $sPhoneNo){ $this->sPhoneNo = $sPhoneNo; }

	public function getCellPhoneNo() : string { return $this->sCellPhoneNo; }
	public function setCellPhoneNo(string $sCellPhoneNo){ $this->sCellPhoneNo = $sCellPhoneNo; }

	/**
	 * [createPerson description]
	 * @param  string $sFirstName
	 * @param  string $sLastName
	 * @param  string $sEmail
	 * @param  string $sDOB
	 * @param  string $sPhoneNo
	 * @param  string $sCellPhoneNo
	 * @return integer
	 */
	public function createPerson(string $sFirstName, string $sLastName, string $sEmail, string $sDOB = '', string $sPhoneNo = '', string $sCellPhoneNo = '') : int {

	}

}

?>

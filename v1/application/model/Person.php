<?php
require_once('APIService.php');

class Person extends APIService{

	private $iId;
	private $sFirstName;
	private $sLastName;
	private $sEmail;
	private $sDOB;
	private $sPhoneNo;
	private $sCellPhoneNo;

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
	 * CRUD
	 */

	public function getPersons($iId = 0) : Response {

		$oDb = $this->oDatabaseConnection->getDatabaseHandle('test');

		$sSql = 'SELECT * FROM Persons';

		if($iId){
			$sSql .= ' WHERE pk_person = :iId';
		}

		$oStmt = $oDb->prepare($sSql);

		if($iId){
			$oStmt->bindValue(':iId', $iId, PDO::PARAM_INT);
		}

		if(!$oStmt->execute()){
			$this->oResponse->setError('getPersons query failed.');
		} else{
			if($oStmt->rowCount() > 0){
				$this->oResponse->setResult($oStmt->fetchAll(PDO::FETCH_OBJ));
			} else{
				$this->oResponse->setError('No result');
			}
		}

		return $this->oResponse;
	}

	/**
	 * [createPerson description]
	 * @param  string $sFirstName
	 * @param  string $sLastName
	 * @param  string $sEmail
	 * @param  string $sDOB
	 * @param  string $sPhoneNo
	 * @param  string $sCellPhoneNo
	 * @return integer $iNewCustomerId
	 */
	public function postPerson(string $sFirstName, string $sLastName, string $sEmail, string $sDOB = '', string $sPhoneNo = '', string $sCellPhoneNo = '') : int {

	}

	public function putPerson() : bool {}

	public function deletePerson() : bool {}

}

?>

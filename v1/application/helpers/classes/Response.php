<?php

class Response{

	private $sError = '';
	private $mResult = '';

	public function getError(): string { return $this->sError; }
	public function setError($sError){ $this->sError = $sError; }

	public function getResult(){return $this->mResult; }
	public function setResult($mResult){ $this->mResult = $mResult; }

}


?>

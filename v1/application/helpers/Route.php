<?php

class Route{

	private $sName;
	private $sUrl;
	private $oAction;

	public function getName(): string{
		return $this->sName;
	}

	public function setName($sName){
		$this->sName = $sName;
	}

	public function getUrl(): string{
		return $this->sUrl;
	}

	public function setUrl($sUrl){
		$this->sUrl = $sUrl;
	}

	public function getAction(): stdClass{
		return $this->oAction;
	}

	public function setAction($sClass, $sMethod){
		$this->oAction = new stdClass;
		$this->oAction->class = $sClass;
		$this->oAction->method = $sMethod;
	}

}


?>

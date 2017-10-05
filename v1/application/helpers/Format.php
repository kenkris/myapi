<?php

class Format{

	public function toJSON($mData) : string{
		error_log(print_r($mData, true));
		return json_encode($mData);
	}

	//public function toXML(){}


}


?>

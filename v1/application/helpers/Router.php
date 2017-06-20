<?php

class Router{

	private $aRoutes = array();

	function __construct(){
		//  Get routes
		require_once('routes.php');
		$this->aRoutes = $aRoutes;
	}

	/**
	 * Route request to method
	 *
	 * Build a regex for each route and match it against
	 * incomming request. Stop when first hit is found
	 * in routes array.
	 * @author  Kenneth
	 * @param  string $sUrl
	 * @param  string $sMethod
	 * @param  object $oPayload
	 */
	public function routeRequest(string $sUrl, string $sMethod, object $oPayload = null){

		error_log('REUESTED URL: ' . $sUrl);
		error_log('METHOD: ' . $sMethod);
		error_log('PAYLOAD: ' . print_r($oPayload, true));

		$aUrl = array_filter(explode('/', $sUrl));

		//  Build regex and match against route
		foreach($this->aRoutes as $oRoute){

			$sRegex = '/^';

			$aRouteUrl = array_filter(explode('/', $oRoute->getUrl()));

			foreach($aRouteUrl as $sVal){

				//  Add start capture group and add slash to regex
				$sRegex .= '(\/';

				//  Check for dynamic value
				if(substr($sVal, 0, 1) == '{'){
					$sVal = trim($sVal, '{}');
					$aVal = explode(':', $sVal);
					$sParam = $aVal[0];
					if(isset($aVal[1])){
						$sRegex .= $aVal[1];
					}
				} else{
					$sRegex .= $sVal;
				}

				//  Close capture group
				$sRegex .= ')';

			}

			$sRegex .= '$/';

			error_log('REGEX FOR ROUTE: ' . $sRegex);

			//  Do pregmatch here
			if(preg_match($sRegex, $sUrl)){
				error_log("HIT :)");
				//  TODO : route to class and method
				break;
			} else{
				//  RETURN NOTHING FOUND
			}
		}
	}

}

?>

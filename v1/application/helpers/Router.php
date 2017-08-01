<?php

class Router{

	private $aRoutes = array();

	public function __construct(){
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
	 * @param  string $sHttpMethod
	 * @param  object $oPayload
	 */
	public function routeRequest(string $sUrl, string $sHttpMethod, object $oPayload = null){

		//  Incoming Url to match, reindexed to 0 for my own sanity
		$aUrl = array_values(array_filter(explode('/', $sUrl)));

		$bValidRoute = false;

		//  Build regex and match against route
		foreach($this->aRoutes as $oRoute){

			//  Paramters at this index in $aUrl. Used to extract params from any url. Params are prefix and postfixed with {param}
			$aParamsAt = array();

			//  Start of regex
			$sRegex = '/^';

			//  Make clean array, reindexed to 0 for my own sanity
			$aRouteUrl = array_values(array_filter(explode('/', $oRoute->getUrl())));

			foreach($aRouteUrl as $iKey => $sVal){

				//  Add start capture group and add slash to regex
				$sRegex .= '(\/';

				//  Check for dynamic value
				if(substr($sVal, 0, 1) == '{'){
					$sVal = trim($sVal, '{}');
					$aVal = explode(':', $sVal);
					array_push($aParamsAt, $iKey);
					if(isset($aVal[1])){
						$sRegex .= $aVal[1];
					}
				} else{
					$sRegex .= $sVal;
				}

				//  Close capture group
				$sRegex .= ')';

			}

			//  End og regex
			$sRegex .= '$/';

			//  Do pregmatch here
			if(preg_match($sRegex, $sUrl)){
				$bValidRoute = true;

				error_log("ROUTE FOUND....");
				error_log(print_r($oRoute, true));
				error_log(print_r($aParamsAt, true));

				//  TODO : route to class and method
				$oActions      = $oRoute->getAction();
				$sClass        = $oActions->class;
				$sClassMethod  = $oActions->method;

				$aParams  = array();
				foreach($aParamsAt as $iIndex){
					array_push($aParams, $aUrl[$iIndex]);
				}

				//  Instantiate class dynamically and call class method
				require_once($sClass . '.php');
				$oClass = new $sClass;
				return call_user_func_array(array($oClass, strtolower($sHttpMethod) . $sClassMethod), $aParams);
			}
		}

		if(!$bValidRoute){
			return false;
		}
	}

}

?>

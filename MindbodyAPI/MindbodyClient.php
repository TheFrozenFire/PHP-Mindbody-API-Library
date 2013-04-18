<?php
namespace MindbodyAPI;
class MindbodyClient extends \SoapClient {
	public static function service($name) {
		$class = "services\\{$name}";
		
		return new $class;
	}

	public static function request($type, structures\SourceCredentials $sourceCredentials = null, structures\UserCredentials $userCredentials = null) {
		$requestName = "MindbodyAPI\\structures\\{$type}";
		$requestRequestName = "{$requestName}Request";
	
		if(!class_exists($requestName) || !class_exists($requestRequestName)) return false;
		$request = new $requestName;
		$request->Request = new $requestRequestName;
		if($sourceCredentials)
			$request->Request->SourceCredentials = $sourceCredentials;
		else
			$request->Request->SourceCredentials = new structures\SourceCredentials();
		
		if($userCredentials)
			$request->Request->UserCredentials = $userCredentials;
		
		return $request;
	}
	
	public static function credentials($sourcename = null, $password = null, Array $siteids = null) {
		$credentials = new structures\SourceCredentials;
		$credentials->SourceName = $sourcename;
		$credentials->Password = $password;
		$credentials->SiteIDs = $siteids;
		
		return $credentials;
	}
	
	public static function userCredentials($username, $password, Array $siteids = null) {
		$credentials = new structures\UserCredentials;
		$credentials->Username = $username;
		$credentials->Password = $password;
		$credentials->SiteIDs = $siteids;
		
		return $credentials;
	}
	
	public function __soapCall($function_name, $arguments, $options = array(), $input_headers = array(), &$output_headers = array()) {
		$result = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
		
		$expectedResultType = "{$function_name}Result";
		
		if(isset($result->$expectedResultType))
			return $result->$expectedResultType;
		
		return $result;
	}
}

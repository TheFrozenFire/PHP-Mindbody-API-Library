<?php
namespace MindbodyAPI;
class MindbodyClient extends \SoapClient {
	public static function request($type, structures\SourceCredentials $sourceCredentials = null) {
		$requestName = "MindbodyAPI\\structures\\{$type}";
		$requestRequestName = "{$requestName}Request";
	
		if(!class_exists($requestName) || !class_exists($requestRequestName)) return false;
		$request = new $requestName;
		$request->Request = new $requestRequestName;
		if($sourceCredentials)
			$request->Request->SourceCredentials = $sourceCredentials;
		else
			$request->Request->SourceCredentials = new structures\SourceCredentials();
		
		return $request;
	}
	
	public static function credentials($sourcename = null, $password = null, Array $siteids = null) {
		$credentials = new structures\SourceCredentials;
		$credentials->SourceName = $sourcename;
		$credentials->Password = $password;
		$credentials->SiteIDs = $siteids;
		
		return $credentials;
	}
}

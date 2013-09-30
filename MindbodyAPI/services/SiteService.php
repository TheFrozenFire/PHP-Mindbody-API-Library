<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class SiteService extends \MindbodyAPI\MindbodyClient {
	public static $classmap = array(
		'GetSites' => 'MindbodyAPI\structures\GetSites',
		'GetSitesRequest' => 'MindbodyAPI\structures\GetSitesRequest',
		'MBRequest' => 'MindbodyAPI\structures\MBRequest',
		'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
		'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
		'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
		'GetSitesResponse' => 'MindbodyAPI\structures\GetSitesResponse',
		'GetSitesResult' => 'MindbodyAPI\structures\GetSitesResult',
		'MBResult' => 'MindbodyAPI\structures\MBResult',
		'StatusCode' => 'MindbodyAPI\structures\StatusCode',
		'Site' => 'MindbodyAPI\structures\Site',
		'GetLocations' => 'MindbodyAPI\structures\GetLocations',
		'GetLocationsRequest' => 'MindbodyAPI\structures\GetLocationsRequest',
		'GetLocationsResponse' => 'MindbodyAPI\structures\GetLocationsResponse',
		'GetLocationsResult' => 'MindbodyAPI\structures\GetLocationsResult',
		'Location' => 'MindbodyAPI\structures\Location',
		'MBObject' => 'MindbodyAPI\structures\MBObject',
		'ActionCode' => 'MindbodyAPI\structures\ActionCode',
		'GetActivationCode' => 'MindbodyAPI\structures\GetActivationCode',
		'GetActivationCodeRequest' => 'MindbodyAPI\structures\GetActivationCodeRequest',
		'GetActivationCodeResponse' => 'MindbodyAPI\structures\GetActivationCodeResponse',
		'GetActivationCodeResult' => 'MindbodyAPI\structures\GetActivationCodeResult',
		'GetPrograms' => 'MindbodyAPI\structures\GetPrograms',
		'GetProgramsRequest' => 'MindbodyAPI\structures\GetProgramsRequest',
		'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
		'GetProgramsResponse' => 'MindbodyAPI\structures\GetProgramsResponse',
		'GetProgramsResult' => 'MindbodyAPI\structures\GetProgramsResult',
		'Program' => 'MindbodyAPI\structures\Program',
		'GetSessionTypes' => 'MindbodyAPI\structures\GetSessionTypes',
		'GetSessionTypesRequest' => 'MindbodyAPI\structures\GetSessionTypesRequest',
		'GetSessionTypesResponse' => 'MindbodyAPI\structures\GetSessionTypesResponse',
		'GetSessionTypesResult' => 'MindbodyAPI\structures\GetSessionTypesResult',
		'SessionType' => 'MindbodyAPI\structures\SessionType',
		'GetResources' => 'MindbodyAPI\structures\GetResources',
		'GetResourcesRequest' => 'MindbodyAPI\structures\GetResourcesRequest',
		'GetResourcesResponse' => 'MindbodyAPI\structures\GetResourcesResponse',
		'GetResourcesResult' => 'MindbodyAPI\structures\GetResourcesResult',
		'Resource' => 'MindbodyAPI\structures\Resource',
		'GetRelationships' => 'MindbodyAPI\structures\GetRelationships',
		'GetRelationshipsRequest' => 'MindbodyAPI\structures\GetRelationshipsRequest',
		'GetRelationshipsResponse' => 'MindbodyAPI\structures\GetRelationshipsResponse',
		'GetRelationshipsResult' => 'MindbodyAPI\structures\GetRelationshipsResult',
		'Relationship' => 'MindbodyAPI\structures\Relationship',
		'GetResourceSchedule' => 'MindbodyAPI\structures\GetResourceSchedule',
		'GetResourceScheduleRequest' => 'MindbodyAPI\structures\GetResourceScheduleRequest',
		'GetResourceScheduleResponse' => 'MindbodyAPI\structures\GetResourceScheduleResponse',
		'GetResourceScheduleResult' => 'MindbodyAPI\structures\GetResourceScheduleResult',
		'ReserveResource' => 'MindbodyAPI\structures\ReserveResource',
		'ReserveResourceRequest' => 'MindbodyAPI\structures\ReserveResourceRequest',
		'ReserveResourceResponse' => 'MindbodyAPI\structures\ReserveResourceResponse',
		'ReserveResourceResult' => 'MindbodyAPI\structures\ReserveResourceResult',
		'Row' => 'MindbodyAPI\structures\Row',
		'RecordSet' => 'MindbodyAPI\structures\RecordSet',
	);
	public function __construct($wsdl = "https://api.mindbodyonline.com/0_5/SiteService.asmx?WSDL", $options = array()) {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
		parent::__construct($wsdl, $options);
	}
	/**
	 * Gets a list of sites.
	 *
	 * @param GetSites $parameters
	 * @return GetSitesResponse
	 */
	public function GetSites(structures\GetSites $parameters) {
		return $this->__soapCall('GetSites', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of locations.
	 *
	 * @param GetLocations $parameters
	 * @return GetLocationsResponse
	 */
	public function GetLocations(structures\GetLocations $parameters) {
		return $this->__soapCall('GetLocations', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets an activation code.
	 *
	 * @param GetActivationCode $parameters
	 * @return GetActivationCodeResponse
	 */
	public function GetActivationCode(structures\GetActivationCode $parameters) {
		return $this->__soapCall('GetActivationCode', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of programs.
	 *
	 * @param GetPrograms $parameters
	 * @return GetProgramsResponse
	 */
	public function GetPrograms(structures\GetPrograms $parameters) {
		return $this->__soapCall('GetPrograms', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of session types.
	 *
	 * @param GetSessionTypes $parameters
	 * @return GetSessionTypesResponse
	 */
	public function GetSessionTypes(structures\GetSessionTypes $parameters) {
		return $this->__soapCall('GetSessionTypes', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of resources.
	 *
	 * @param GetResources $parameters
	 * @return GetResourcesResponse
	 */
	public function GetResources(structures\GetResources $parameters) {
		return $this->__soapCall('GetResources', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of relationships.
	 *
	 * @param GetRelationships $parameters
	 * @return GetRelationshipsResponse
	 */
	public function GetRelationships(structures\GetRelationships $parameters) {
		return $this->__soapCall('GetRelationships', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets all resources schedule.
	 *
	 * @param GetResourceSchedule $parameters
	 * @return GetResourceScheduleResponse
	 */
	public function GetResourceSchedule(structures\GetResourceSchedule $parameters) {
		return $this->__soapCall('GetResourceSchedule', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Reserves a resource.
	 *
	 * @param ReserveResource $parameters
	 * @return ReserveResourceResponse
	 */
	public function ReserveResource(structures\ReserveResource $parameters) {
		return $this->__soapCall('ReserveResource', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>
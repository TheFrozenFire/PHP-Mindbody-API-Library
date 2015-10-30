<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class DataService extends \MindbodyAPI\MindbodyClient {
	const WSDL_FILE = "https://api.mindbodyonline.com/0_5/DataService.asmx?WSDL";
	private $classmap = array(
		'SelectDataXml' => 'MindbodyAPI\structures\SelectDataXml',
		'SelectDataXmlRequest' => 'MindbodyAPI\structures\SelectDataXmlRequest',
		'MBRequest' => 'MindbodyAPI\structures\MBRequest',
		'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
		'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
		'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
		'SelectDataXmlResponse' => 'MindbodyAPI\structures\SelectDataXmlResponse',
		'SelectDataXmlResult' => 'MindbodyAPI\structures\SelectDataXmlResult',
		'MBResult' => 'MindbodyAPI\structures\MBResult',
		'StatusCode' => 'MindbodyAPI\structures\StatusCode',
		'FunctionDataXml' => 'MindbodyAPI\structures\FunctionDataXml',
		'FunctionDataXmlRequest' => 'MindbodyAPI\structures\FunctionDataXmlRequest',
		'FunctionParam' => 'MindbodyAPI\structures\FunctionParam',
		'FunctionDataXmlResponse' => 'MindbodyAPI\structures\FunctionDataXmlResponse',
		'FunctionDataCSV' => 'MindbodyAPI\structures\FunctionDataCSV',
		'FunctionDataCSVResponse' => 'MindbodyAPI\structures\FunctionDataCSVResponse',
		'SelectDataCSVResult' => 'MindbodyAPI\structures\SelectDataCSVResult',
		'SelectDataCSV' => 'MindbodyAPI\structures\SelectDataCSV',
		'SelectDataCSVRequest' => 'MindbodyAPI\structures\SelectDataCSVRequest',
		'SelectDataCSVResponse' => 'MindbodyAPI\structures\SelectDataCSVResponse',
		'FunctionAggregateDataXml' => 'MindbodyAPI\structures\FunctionAggregateDataXml',
		'FunctionAggregateDataXmlResponse' => 'MindbodyAPI\structures\FunctionAggregateDataXmlResponse',
		'SelectAggregateDataXml' => 'MindbodyAPI\structures\SelectAggregateDataXml',
		'SelectAggregateDataXmlRequest' => 'MindbodyAPI\structures\SelectAggregateDataXmlRequest',
		'SelectAggregateDataXmlResponse' => 'MindbodyAPI\structures\SelectAggregateDataXmlResponse',
		'SelectAggregateDataXmlResult' => 'MindbodyAPI\structures\SelectAggregateDataXmlResult',
		'SelectAggregateDataCSV' => 'MindbodyAPI\structures\SelectAggregateDataCSV',
		'SelectAggregateDataCSVRequest' => 'MindbodyAPI\structures\SelectAggregateDataCSVRequest',
		'SelectAggregateDataCSVResponse' => 'MindbodyAPI\structures\SelectAggregateDataCSVResponse',
		'SelectAggregateDataCSVResult' => 'MindbodyAPI\structures\SelectAggregateDataCSVResult',
		'GetFunctionNames' => 'MindbodyAPI\structures\GetFunctionNames',
		'GetFunctionNamesRequest' => 'MindbodyAPI\structures\GetFunctionNamesRequest',
		'GetFunctionNamesResponse' => 'MindbodyAPI\structures\GetFunctionNamesResponse',
		'GetFunctionNamesResult' => 'MindbodyAPI\structures\GetFunctionNamesResult',
		'ApiFunction' => 'MindbodyAPI\structures\ApiFunction',
		'GetFunctionParameters' => 'MindbodyAPI\structures\GetFunctionParameters',
		'GetFunctionParametersRequest' => 'MindbodyAPI\structures\GetFunctionParametersRequest',
		'GetFunctionParametersResponse' => 'MindbodyAPI\structures\GetFunctionParametersResponse',
		'GetFunctionParametersResult' => 'MindbodyAPI\structures\GetFunctionParametersResult',
		'ApiFunctionParameter' => 'MindbodyAPI\structures\ApiFunctionParameter',
		'GetSitesWithFunctionDataAccess' => 'MindbodyAPI\structures\GetSitesWithFunctionDataAccess',
		'GetSitesWithFunctionDataAccessRequest' => 'MindbodyAPI\structures\GetSitesWithFunctionDataAccessRequest',
		'GetSitesWithFunctionDataAccessResponse' => 'MindbodyAPI\structures\GetSitesWithFunctionDataAccessResponse',
		'GetSitesWithFunctionDataAccessResult' => 'MindbodyAPI\structures\GetSitesWithFunctionDataAccessResult',
		'Site' => 'MindbodyAPI\structures\Site',
		'RunFunctionForJob' => 'MindbodyAPI\structures\RunFunctionForJob',
		'RunFunctionForJobRequest' => 'MindbodyAPI\structures\RunFunctionForJobRequest',
		'RunFunctionForJobResponse' => 'MindbodyAPI\structures\RunFunctionForJobResponse',
		'RunFunctionForJobResult' => 'MindbodyAPI\structures\RunFunctionForJobResult',
		'Row' => 'MindbodyAPI\structures\Row',
		'RecordSet' => 'MindbodyAPI\structures\RecordSet',
	);
	public function __construct($wsdl = null, $options = array()) {
		foreach ($this->classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? : self::WSDL_FILE, $options);
	}
	/**
	 * Issue a select statement to your MB database
	 *
	 * @param SelectDataXml $parameters
	 * @return SelectDataXmlResponse
	 */
	public function SelectDataXml(structures\SelectDataXml $parameters) {
		return $this->__soapCall('SelectDataXml', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 *
	 *
	 * @param FunctionDataXml $parameters
	 * @return FunctionDataXmlResponse
	 */
	public function FunctionDataXml(structures\FunctionDataXml $parameters) {
		return $this->__soapCall('FunctionDataXml', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 *
	 *
	 * @param FunctionDataCSV $parameters
	 * @return FunctionDataCSVResponse
	 */
	public function FunctionDataCSV(structures\FunctionDataCSV $parameters) {
		return $this->__soapCall('FunctionDataCSV', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Issue a select statement to your MB database
	 *
	 * @param SelectDataCSV $parameters
	 * @return SelectDataCSVResponse
	 */
	public function SelectDataCSV(structures\SelectDataCSV $parameters) {
		return $this->__soapCall('SelectDataCSV', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 *
	 *
	 * @param FunctionAggregateDataXml $parameters
	 * @return FunctionAggregateDataXmlResponse
	 */
	public function FunctionAggregateDataXml(structures\FunctionAggregateDataXml $parameters) {
		return $this->__soapCall('FunctionAggregateDataXml', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Issue a select statement to aggregate data
	 *
	 * @param SelectAggregateDataXml $parameters
	 * @return SelectAggregateDataXmlResponse
	 */
	public function SelectAggregateDataXml(structures\SelectAggregateDataXml $parameters) {
		return $this->__soapCall('SelectAggregateDataXml', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Issue a select statement to aggregate data
	 *
	 * @param SelectAggregateDataCSV $parameters
	 * @return SelectAggregateDataCSVResponse
	 */
	public function SelectAggregateDataCSV(structures\SelectAggregateDataCSV $parameters) {
		return $this->__soapCall('SelectAggregateDataCSV', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Retrieve all available FunctionData function names for a given sourcename.
	 *
	 * @param GetFunctionNames $parameters
	 * @return GetFunctionNamesResponse
	 */
	public function GetFunctionNames(structures\GetFunctionNames $parameters) {
		return $this->__soapCall('GetFunctionNames', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Retrieve all available parameters for a given function.
	 *
	 * @param GetFunctionParameters $parameters
	 * @return GetFunctionParametersResponse
	 */
	public function GetFunctionParameters(structures\GetFunctionParameters $parameters) {
		return $this->__soapCall('GetFunctionParameters', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Retrieve all sites that you can access with FunctionData.
	 *
	 * @param GetSitesWithFunctionDataAccess $parameters
	 * @return GetSitesWithFunctionDataAccessResponse
	 */
	public function GetSitesWithFunctionDataAccess(structures\GetSitesWithFunctionDataAccess $parameters) {
		return $this->__soapCall('GetSitesWithFunctionDataAccess', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 *
	 *
	 * @param RunFunctionForJob $parameters
	 * @return RunFunctionForJobResponse
	 */
	public function RunFunctionForJob(structures\RunFunctionForJob $parameters) {
		return $this->__soapCall('RunFunctionForJob', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>
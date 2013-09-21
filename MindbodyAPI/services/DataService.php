<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class DataService extends \MindbodyAPI\MindbodyClient {
	public static $classmap = array(
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
		'SelectDataCSV' => 'MindbodyAPI\structures\SelectDataCSV',
		'SelectDataCSVRequest' => 'MindbodyAPI\structures\SelectDataCSVRequest',
		'SelectDataCSVResponse' => 'MindbodyAPI\structures\SelectDataCSVResponse',
		'SelectDataCSVResult' => 'MindbodyAPI\structures\SelectDataCSVResult',
		'SelectAggregateDataXml' => 'MindbodyAPI\structures\SelectAggregateDataXml',
		'SelectAggregateDataXmlRequest' => 'MindbodyAPI\structures\SelectAggregateDataXmlRequest',
		'SelectAggregateDataXmlResponse' => 'MindbodyAPI\structures\SelectAggregateDataXmlResponse',
		'SelectAggregateDataXmlResult' => 'MindbodyAPI\structures\SelectAggregateDataXmlResult',
		'SelectAggregateDataCSV' => 'MindbodyAPI\structures\SelectAggregateDataCSV',
		'SelectAggregateDataCSVRequest' => 'MindbodyAPI\structures\SelectAggregateDataCSVRequest',
		'SelectAggregateDataCSVResponse' => 'MindbodyAPI\structures\SelectAggregateDataCSVResponse',
		'SelectAggregateDataCSVResult' => 'MindbodyAPI\structures\SelectAggregateDataCSVResult',
		'Row' => 'MindbodyAPI\structures\Row',
		'RecordSet' => 'MindbodyAPI\structures\RecordSet',
	);
	public function __construct($wsdl = "https://api.mindbodyonline.com/0_5/DataService.asmx?WSDL", $options = array()) {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
		if (!isset($options['location'])) $options['location'] = 'https://api.mindbodyonline.com/0_5/DataService.asmx';
		parent::__construct($wsdl, $options);
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
}
?>
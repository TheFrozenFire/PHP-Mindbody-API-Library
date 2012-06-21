<?php
class Data_Service extends SoapClient {
	private static $classmap = array(
		'SelectDataXml' => 'SelectDataXml',
		'SelectDataXmlRequest' => 'SelectDataXmlRequest',
		'MBRequest' => 'MBRequest',
		'SourceCredentials' => 'SourceCredentials',
		'UserCredentials' => 'UserCredentials',
		'XMLDetailLevel' => 'XMLDetailLevel',
		'SelectDataXmlResponse' => 'SelectDataXmlResponse',
		'SelectDataXmlResult' => 'SelectDataXmlResult',
		'MBResult' => 'MBResult',
		'StatusCode' => 'StatusCode',
		'SelectDataCSV' => 'SelectDataCSV',
		'SelectDataCSVRequest' => 'SelectDataCSVRequest',
		'SelectDataCSVResponse' => 'SelectDataCSVResponse',
		'SelectDataCSVResult' => 'SelectDataCSVResult',
		'SelectAggregateDataXml' => 'SelectAggregateDataXml',
		'SelectAggregateDataXmlRequest' => 'SelectAggregateDataXmlRequest',
		'SelectAggregateDataXmlResponse' => 'SelectAggregateDataXmlResponse',
		'SelectAggregateDataXmlResult' => 'SelectAggregateDataXmlResult',
		'SelectAggregateDataCSV' => 'SelectAggregateDataCSV',
		'SelectAggregateDataCSVRequest' => 'SelectAggregateDataCSVRequest',
		'SelectAggregateDataCSVResponse' => 'SelectAggregateDataCSVResponse',
		'SelectAggregateDataCSVResult' => 'SelectAggregateDataCSVResult',
		'Row' => 'Row',
		'RecordSet' => 'RecordSet',
	);
	public function Data_Service($wsdl = "https://api.mindbodyonline.com/0_5/DataService.asmx?WSDL", $options = array()) {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
		$directory = dirname(__FILE__) . DIRECTORY_SEPARATOR;
		foreach ($options['classmap'] as $key => $value) if (file_exists('{$directory}../structures/{$value}.php')) include_once ('{$directory}../structures/{$value}.php');
		parent::__construct($wsdl, $options);
	}
	/**
	 * Issue a select statement to your MB database
	 *
	 * @param SelectDataXml $parameters
	 * @return SelectDataXmlResponse
	 */
	public function SelectDataXml(SelectDataXml $parameters) {
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
	public function SelectDataCSV(SelectDataCSV $parameters) {
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
	public function SelectAggregateDataXml(SelectAggregateDataXml $parameters) {
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
	public function SelectAggregateDataCSV(SelectAggregateDataCSV $parameters) {
		return $this->__soapCall('SelectAggregateDataCSV', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
class_alias("Data_Service", "Data_x0020_Service");
?>

<?php
class Select_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'SelectData' => 'SelectData',
                                    'SelectDataResponse' => 'SelectDataResponse',
                                    'Result_RecordSet' => 'Result_RecordSet',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'SelectAggregateData' => 'SelectAggregateData',
                                    'SelectAggregateDataResponse' => 'SelectAggregateDataResponse',
                                    'Row' => 'Row',
                                    'RecordSet' => 'RecordSet',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Select_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/SelectService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
    foreach($options['classmap'] as $key => $value) if(file_exists("$directory../structures/{$value}.php")) include_once("$directory../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Issue a select statement to your MB database 
   *
   * @param SelectData $parameters
   * @return SelectDataResponse
   */
  public function SelectData(SelectData $parameters) {
    return $this->__soapCall('SelectData', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Issue a select statement to aggregate data 
   *
   * @param SelectAggregateData $parameters
   * @return SelectAggregateDataResponse
   */
  public function SelectAggregateData(SelectAggregateData $parameters) {
    return $this->__soapCall('SelectAggregateData', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>

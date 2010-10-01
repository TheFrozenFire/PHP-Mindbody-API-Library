<?php
class Region_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'getLocations' => 'getLocations',
                                    'ScheduleType' => 'ScheduleType',
                                    'getLocationsResponse' => 'getLocationsResponse',
                                    'Result_Locations' => 'Result_Locations',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'Location' => 'Location',
                                    'getLocationDetail' => 'getLocationDetail',
                                    'getLocationDetailResponse' => 'getLocationDetailResponse',
                                    'getRegions' => 'getRegions',
                                    'getRegionsResponse' => 'getRegionsResponse',
                                    'Result_Studios' => 'Result_Studios',
                                    'Studio' => 'Studio',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Region_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/RegionService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    foreach($options['classmap'] as $key => $value) if(file_exists("../structures/{$value}.php")) include_once("../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Gets a list of locations within the given site. 
   *
   * @param getLocations $parameters
   * @return getLocationsResponse
   */
  public function getLocations(getLocations $parameters) {
    return $this->__soapCall('getLocations', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets detailed information about given location. 
   *
   * @param getLocationDetail $parameters
   * @return getLocationDetailResponse
   */
  public function getLocationDetail(getLocationDetail $parameters) {
    return $this->__soapCall('getLocationDetail', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of locations within the given site. 
   *
   * @param getRegions $parameters
   * @return getRegionsResponse
   */
  public function getRegions(getRegions $parameters) {
    return $this->__soapCall('getRegions', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>

<?php
class Site_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'GetSites' => 'GetSites',
                                    'GetSitesRequest' => 'GetSitesRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'GetSitesResponse' => 'GetSitesResponse',
                                    'GetSitesResult' => 'GetSitesResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'Site' => 'Site',
                                    'GetLocations' => 'GetLocations',
                                    'GetLocationsRequest' => 'GetLocationsRequest',
                                    'GetLocationsResponse' => 'GetLocationsResponse',
                                    'GetLocationsResult' => 'GetLocationsResult',
                                    'Location' => 'Location',
                                    'MBObject' => 'MBObject',
                                    'ActionCode' => 'ActionCode',
                                    'GetPrograms' => 'GetPrograms',
                                    'GetProgramsRequest' => 'GetProgramsRequest',
                                    'ScheduleType' => 'ScheduleType',
                                    'GetProgramsResponse' => 'GetProgramsResponse',
                                    'GetProgramsResult' => 'GetProgramsResult',
                                    'Program' => 'Program',
                                    'GetSessionTypes' => 'GetSessionTypes',
                                    'GetSessionTypesRequest' => 'GetSessionTypesRequest',
                                    'GetSessionTypesResponse' => 'GetSessionTypesResponse',
                                    'GetSessionTypesResult' => 'GetSessionTypesResult',
                                   );

  public function Site_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/SiteService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
	foreach($options['classmap'] as $key => $value) if(file_exists("{$directory}../structures/{$value}.php")) include_once("{$directory}../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Gets a list of sites. 
   *
   * @param GetSites $parameters
   * @return GetSitesResponse
   */
  public function GetSites(GetSites $parameters) {
    return $this->__soapCall('GetSites', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of locations. 
   *
   * @param GetLocations $parameters
   * @return GetLocationsResponse
   */
  public function GetLocations(GetLocations $parameters) {
    return $this->__soapCall('GetLocations', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of programs. 
   *
   * @param GetPrograms $parameters
   * @return GetProgramsResponse
   */
  public function GetPrograms(GetPrograms $parameters) {
    return $this->__soapCall('GetPrograms', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of session types. 
   *
   * @param GetSessionTypes $parameters
   * @return GetSessionTypesResponse
   */
  public function GetSessionTypes(GetSessionTypes $parameters) {
    return $this->__soapCall('GetSessionTypes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
?>
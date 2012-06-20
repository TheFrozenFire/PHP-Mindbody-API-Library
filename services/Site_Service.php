<?php
class Site_Service extends SoapClient {

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
                                    'GetActivationCode' => 'GetActivationCode',
                                    'GetActivationCodeRequest' => 'GetActivationCodeRequest',
                                    'GetActivationCodeResponse' => 'GetActivationCodeResponse',
                                    'GetActivationCodeResult' => 'GetActivationCodeResult',
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
                                    'SessionType' => 'SessionType',
                                    'GetResources' => 'GetResources',
                                    'GetResourcesRequest' => 'GetResourcesRequest',
                                    'GetResourcesResponse' => 'GetResourcesResponse',
                                    'GetResourcesResult' => 'GetResourcesResult',
                                    'Resource' => 'Resource',
                                    'GetRelationships' => 'GetRelationships',
                                    'GetRelationshipsRequest' => 'GetRelationshipsRequest',
                                    'GetRelationshipsResponse' => 'GetRelationshipsResponse',
                                    'GetRelationshipsResult' => 'GetRelationshipsResult',
                                    'Relationship' => 'Relationship',
                                    'AddSiteToCredentials' => 'AddSiteToCredentials',
                                    'AddSiteToCredentialsRequest' => 'AddSiteToCredentialsRequest',
                                    'AddSiteToCredentialsResponse' => 'AddSiteToCredentialsResponse',
                                    'AddSiteToCredentialsResult' => 'AddSiteToCredentialsResult',
                                   );

  public function Site_Service($wsdl = "https://api.mindbodyonline.com/0_5/SiteService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
    foreach($options['classmap'] as $key => $value) if(file_exists('{$directory}../structures/{$value}.php')) include_once('{$directory}../structures/{$value}.php');
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
   * Gets an activation code. 
   *
   * @param GetActivationCode $parameters
   * @return GetActivationCodeResponse
   */
  public function GetActivationCode(GetActivationCode $parameters) {
    return $this->__soapCall('GetActivationCode', array($parameters),       array(
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

  /**
   * Gets a list of resources. 
   *
   * @param GetResources $parameters
   * @return GetResourcesResponse
   */
  public function GetResources(GetResources $parameters) {
    return $this->__soapCall('GetResources', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of relationships. 
   *
   * @param GetRelationships $parameters
   * @return GetRelationshipsResponse
   */
  public function GetRelationships(GetRelationships $parameters) {
    return $this->__soapCall('GetRelationships', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds a site to the credentials. 
   *
   * @param AddSiteToCredentials $parameters
   * @return AddSiteToCredentialsResponse
   */
  public function AddSiteToCredentials(AddSiteToCredentials $parameters) {
    return $this->__soapCall('AddSiteToCredentials', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
class_alias("Site_Service", "Site_x0020_Service");
?>

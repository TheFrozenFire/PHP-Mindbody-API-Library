<?php
class Client_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'AddArrival' => 'AddArrival',
                                    'AddArrivalRequest' => 'AddArrivalRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'AddArrivalResponse' => 'AddArrivalResponse',
                                    'AddArrivalResult' => 'AddArrivalResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'ClientService' => 'ClientService',
                                    'MBObject' => 'MBObject',
                                    'Site' => 'Site',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'ActionCode' => 'ActionCode',
                                    'AddOrUpdateClients' => 'AddOrUpdateClients',
                                    'AddOrUpdateClientsRequest' => 'AddOrUpdateClientsRequest',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'ClientRelationship' => 'ClientRelationship',
                                    'Relationship' => 'Relationship',
                                    'CustomClientField' => 'CustomClientField',
                                    'Location' => 'Location',
                                    'AddOrUpdateClientsResponse' => 'AddOrUpdateClientsResponse',
                                    'AddOrUpdateClientsResult' => 'AddOrUpdateClientsResult',
                                    'GetClients' => 'GetClients',
                                    'GetClientsRequest' => 'GetClientsRequest',
                                    'GetClientsResponse' => 'GetClientsResponse',
                                    'GetClientsResult' => 'GetClientsResult',
                                    'GetCustomClientFields' => 'GetCustomClientFields',
                                    'GetCustomClientFieldsRequest' => 'GetCustomClientFieldsRequest',
                                    'GetCustomClientFieldsResponse' => 'GetCustomClientFieldsResponse',
                                    'GetCustomClientFieldsResult' => 'GetCustomClientFieldsResult',
                                    'GetClientIndexes' => 'GetClientIndexes',
                                    'GetClientIndexesRequest' => 'GetClientIndexesRequest',
                                    'GetClientIndexesResponse' => 'GetClientIndexesResponse',
                                    'GetClientIndexesResult' => 'GetClientIndexesResult',
                                    'GetClientReferralTypes' => 'GetClientReferralTypes',
                                    'GetClientReferralTypesRequest' => 'GetClientReferralTypesRequest',
                                    'GetClientReferralTypesResponse' => 'GetClientReferralTypesResponse',
                                    'GetClientReferralTypesResult' => 'GetClientReferralTypesResult',
                                    'GetActiveClientMemberships' => 'GetActiveClientMemberships',
                                    'GetActiveClientMembershipsRequest' => 'GetActiveClientMembershipsRequest',
                                    'GetActiveClientMembershipsResponse' => 'GetActiveClientMembershipsResponse',
                                    'GetActiveClientMembershipsResult' => 'GetActiveClientMembershipsResult',
                                    'ClientMembership' => 'ClientMembership',
                                    'GetClientContracts' => 'GetClientContracts',
                                    'GetClientContractsRequest' => 'GetClientContractsRequest',
                                    'GetClientContractsResponse' => 'GetClientContractsResponse',
                                    'GetClientContractsResult' => 'GetClientContractsResult',
                                    'ClientContract' => 'ClientContract',
                                    'GetClientAccountBalances' => 'GetClientAccountBalances',
                                    'GetClientAccountBalancesRequest' => 'GetClientAccountBalancesRequest',
                                    'GetClientAccountBalancesResponse' => 'GetClientAccountBalancesResponse',
                                    'GetClientAccountBalancesResult' => 'GetClientAccountBalancesResult',
                                    'GetClientServices' => 'GetClientServices',
                                    'GetClientServicesRequest' => 'GetClientServicesRequest',
                                    'GetClientServicesResponse' => 'GetClientServicesResponse',
                                    'GetClientServicesResult' => 'GetClientServicesResult',
                                    'GetRequiredClientFields' => 'GetRequiredClientFields',
                                    'GetRequiredClientFieldsRequest' => 'GetRequiredClientFieldsRequest',
                                    'GetRequiredClientFieldsResponse' => 'GetRequiredClientFieldsResponse',
                                    'GetRequiredClientFieldsResult' => 'GetRequiredClientFieldsResult',
                                    'ValidateLogin' => 'ValidateLogin',
                                    'ValidateLoginRequest' => 'ValidateLoginRequest',
                                    'ValidateLoginResponse' => 'ValidateLoginResponse',
                                    'ValidateLoginResult' => 'ValidateLoginResult',
                                    'UpdateClientServices' => 'UpdateClientServices',
                                    'UpdateClientServicesRequest' => 'UpdateClientServicesRequest',
                                    'UpdateClientServicesResponse' => 'UpdateClientServicesResponse',
                                    'UpdateClientServicesResult' => 'UpdateClientServicesResult',
                                   );

  public function Client_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/ClientService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
    foreach($options['classmap'] as $key => $value) if(file_exists("{$directory}../structures/{$value}.php")) include_once("{$directory}../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Adds an arrival record for the given client. 
   *
   * @param AddArrival $parameters
   * @return AddArrivalResponse
   */
  public function AddArrival(AddArrival $parameters) {
    return $this->__soapCall('AddArrival', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds or updates information for a list of clients. 
   *
   * @param AddOrUpdateClients $parameters
   * @return AddOrUpdateClientsResponse
   */
  public function AddOrUpdateClients(AddOrUpdateClients $parameters) {
    return $this->__soapCall('AddOrUpdateClients', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of clients. 
   *
   * @param GetClients $parameters
   * @return GetClientsResponse
   */
  public function GetClients(GetClients $parameters) {
    return $this->__soapCall('GetClients', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of currently available client indexes. 
   *
   * @param GetCustomClientFields $parameters
   * @return GetCustomClientFieldsResponse
   */
  public function GetCustomClientFields(GetCustomClientFields $parameters) {
    return $this->__soapCall('GetCustomClientFields', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of currently available client indexes. 
   *
   * @param GetClientIndexes $parameters
   * @return GetClientIndexesResponse
   */
  public function GetClientIndexes(GetClientIndexes $parameters) {
    return $this->__soapCall('GetClientIndexes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of clients. 
   *
   * @param GetClientReferralTypes $parameters
   * @return GetClientReferralTypesResponse
   */
  public function GetClientReferralTypes(GetClientReferralTypes $parameters) {
    return $this->__soapCall('GetClientReferralTypes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets the active membership for a given client. 
   *
   * @param GetActiveClientMemberships $parameters
   * @return GetActiveClientMembershipsResponse
   */
  public function GetActiveClientMemberships(GetActiveClientMemberships $parameters) {
    return $this->__soapCall('GetActiveClientMemberships', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of contracts for a given client. 
   *
   * @param GetClientContracts $parameters
   * @return GetClientContractsResponse
   */
  public function GetClientContracts(GetClientContracts $parameters) {
    return $this->__soapCall('GetClientContracts', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets account balances for the given clients. 
   *
   * @param GetClientAccountBalances $parameters
   * @return GetClientAccountBalancesResponse
   */
  public function GetClientAccountBalances(GetClientAccountBalances $parameters) {
    return $this->__soapCall('GetClientAccountBalances', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a client service for a given client. 
   *
   * @param GetClientServices $parameters
   * @return GetClientServicesResponse
   */
  public function GetClientServices(GetClientServices $parameters) {
    return $this->__soapCall('GetClientServices', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client service for a given client. 
   *
   * @param GetRequiredClientFields $parameters
   * @return GetRequiredClientFieldsResponse
   */
  public function GetRequiredClientFields(GetRequiredClientFields $parameters) {
    return $this->__soapCall('GetRequiredClientFields', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Validates a username and password. This method returns the associated clients record and 
   * a session guid on success. 
   *
   * @param ValidateLogin $parameters
   * @return ValidateLoginResponse
   */
  public function ValidateLogin(ValidateLogin $parameters) {
    return $this->__soapCall('ValidateLogin', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client service for a given client. 
   *
   * @param UpdateClientServices $parameters
   * @return UpdateClientServicesResponse
   */
  public function UpdateClientServices(UpdateClientServices $parameters) {
    return $this->__soapCall('UpdateClientServices', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}

class_alias("Client_x0020_Service", "Client_Service");
?>
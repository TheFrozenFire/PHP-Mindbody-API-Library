<?php
class Client_Service extends SoapClient {

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
                                    'Rep' => 'Rep',
                                    'Staff' => 'Staff',
                                    'Appointment' => 'Appointment',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'Availability' => 'Availability',
                                    'SessionType' => 'SessionType',
                                    'Location' => 'Location',
                                    'Unavailability' => 'Unavailability',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'Resource' => 'Resource',
                                    'CustomClientField' => 'CustomClientField',
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
                                    'GetClientContactLogs' => 'GetClientContactLogs',
                                    'GetClientContactLogsRequest' => 'GetClientContactLogsRequest',
                                    'GetClientContactLogsResponse' => 'GetClientContactLogsResponse',
                                    'GetClientContactLogsResult' => 'GetClientContactLogsResult',
                                    'ContactLog' => 'ContactLog',
                                    'ContactLogComment' => 'ContactLogComment',
                                    'ContactLogType' => 'ContactLogType',
                                    'ContactLogSubtype' => 'ContactLogSubtype',
                                    'AddOrUpdateContactLogs' => 'AddOrUpdateContactLogs',
                                    'AddOrUpdateContactLogsRequest' => 'AddOrUpdateContactLogsRequest',
                                    'AddOrUpdateContactLogsResponse' => 'AddOrUpdateContactLogsResponse',
                                    'AddOrUpdateContactLogsResult' => 'AddOrUpdateContactLogsResult',
                                    'GetContactLogTypes' => 'GetContactLogTypes',
                                    'GetContactLogTypesRequest' => 'GetContactLogTypesRequest',
                                    'GetContactLogTypesResponse' => 'GetContactLogTypesResponse',
                                    'GetContactLogTypesResult' => 'GetContactLogTypesResult',
                                    'UploadClientDocument' => 'UploadClientDocument',
                                    'UploadClientDocumentRequest' => 'UploadClientDocumentRequest',
                                    'UploadClientDocumentResponse' => 'UploadClientDocumentResponse',
                                    'UploadClientDocumentResult' => 'UploadClientDocumentResult',
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
                                    'GetClientVisits' => 'GetClientVisits',
                                    'GetClientVisitsRequest' => 'GetClientVisitsRequest',
                                    'GetClientVisitsResponse' => 'GetClientVisitsResponse',
                                    'GetClientVisitsResult' => 'GetClientVisitsResult',
                                    'Visit' => 'Visit',
                                    'GetClientPurchases' => 'GetClientPurchases',
                                    'GetClientPurchasesRequest' => 'GetClientPurchasesRequest',
                                    'GetClientPurchasesResponse' => 'GetClientPurchasesResponse',
                                    'GetClientPurchasesResult' => 'GetClientPurchasesResult',
                                    'SaleItem' => 'SaleItem',
                                    'Sale' => 'Sale',
                                    'Payment' => 'Payment',
                                    'GetClientSchedule' => 'GetClientSchedule',
                                    'GetClientScheduleRequest' => 'GetClientScheduleRequest',
                                    'GetClientScheduleResponse' => 'GetClientScheduleResponse',
                                    'GetClientScheduleResult' => 'GetClientScheduleResult',
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

  public function Client_Service($wsdl = "https://api.mindbodyonline.com/0_5/ClientService.asmx?WSDL", $options = array()) {
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
   * Get contact logs for a client. 
   *
   * @param GetClientContactLogs $parameters
   * @return GetClientContactLogsResponse
   */
  public function GetClientContactLogs(GetClientContactLogs $parameters) {
    return $this->__soapCall('GetClientContactLogs', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Add or update client contact logs. 
   *
   * @param AddOrUpdateContactLogs $parameters
   * @return AddOrUpdateContactLogsResponse
   */
  public function AddOrUpdateContactLogs(AddOrUpdateContactLogs $parameters) {
    return $this->__soapCall('AddOrUpdateContactLogs', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get contact log types for a client. 
   *
   * @param GetContactLogTypes $parameters
   * @return GetContactLogTypesResponse
   */
  public function GetContactLogTypes(GetContactLogTypes $parameters) {
    return $this->__soapCall('GetContactLogTypes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Upload a client document. 
   *
   * @param UploadClientDocument $parameters
   * @return UploadClientDocumentResponse
   */
  public function UploadClientDocument(UploadClientDocument $parameters) {
    return $this->__soapCall('UploadClientDocument', array($parameters),       array(
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
   * Get visits for a client. 
   *
   * @param GetClientVisits $parameters
   * @return GetClientVisitsResponse
   */
  public function GetClientVisits(GetClientVisits $parameters) {
    return $this->__soapCall('GetClientVisits', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get purchases for a client. 
   *
   * @param GetClientPurchases $parameters
   * @return GetClientPurchasesResponse
   */
  public function GetClientPurchases(GetClientPurchases $parameters) {
    return $this->__soapCall('GetClientPurchases', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get visits for a client. 
   *
   * @param GetClientSchedule $parameters
   * @return GetClientScheduleResponse
   */
  public function GetClientSchedule(GetClientSchedule $parameters) {
    return $this->__soapCall('GetClientSchedule', array($parameters),       array(
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
class_alias("Client_Service", "Client_x0020_Service");
?>
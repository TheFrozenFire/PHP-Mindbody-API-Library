<?php
class Finder_Service extends SoapClient {

  private static $classmap = array(
                                    'GetClassesWithinRadius' => 'GetClassesWithinRadius',
                                    'GetClassesWithinRadiusRequest' => 'GetClassesWithinRadiusRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'GetClassesWithinRadiusResponse' => 'GetClassesWithinRadiusResponse',
                                    'GetClassesWithinRadiusResult' => 'GetClassesWithinRadiusResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'FinderClass' => 'FinderClass',
                                    'Organization' => 'Organization',
                                    'Site' => 'Site',
                                    'FinderSessionType' => 'FinderSessionType',
                                    'ActionCode' => 'ActionCode',
                                    'Location' => 'Location',
                                    'MBObject' => 'MBObject',
                                    'Resource' => 'Resource',
                                    'ClientService' => 'ClientService',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'Rep' => 'Rep',
                                    'Staff' => 'Staff',
                                    'Appointment' => 'Appointment',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'Unavailability' => 'Unavailability',
                                    'Availability' => 'Availability',
                                    'SessionType' => 'SessionType',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'ClientRelationship' => 'ClientRelationship',
                                    'Relationship' => 'Relationship',
                                    'CustomClientField' => 'CustomClientField',
                                    'GetSessionTypesWithinRadius' => 'GetSessionTypesWithinRadius',
                                    'GetSessionTypesWithinRadiusRequest' => 'GetSessionTypesWithinRadiusRequest',
                                    'GetSessionTypesWithinRadiusResponse' => 'GetSessionTypesWithinRadiusResponse',
                                    'GetSessionTypesWithinRadiusResult' => 'GetSessionTypesWithinRadiusResult',
                                    'FinderAppointment' => 'FinderAppointment',
                                    'GetBusinessLocationsWithinRadius' => 'GetBusinessLocationsWithinRadius',
                                    'GetBusinessLocationsWithinRadiusRequest' => 'GetBusinessLocationsWithinRadiusRequest',
                                    'GetBusinessLocationsWithinRadiusResponse' => 'GetBusinessLocationsWithinRadiusResponse',
                                    'GetBusinessLocationsWithinRadiusResult' => 'GetBusinessLocationsWithinRadiusResult',
                                    'FinderCheckoutShoppingCart' => 'FinderCheckoutShoppingCart',
                                    'FinderCheckoutShoppingCartRequest' => 'FinderCheckoutShoppingCartRequest',
                                    'PaymentInfo' => 'PaymentInfo',
                                    'DebitAccountInfo' => 'DebitAccountInfo',
                                    'CreditCardInfo' => 'CreditCardInfo',
                                    'CompInfo' => 'CompInfo',
                                    'StoredCardInfo' => 'StoredCardInfo',
                                    'TrackDataInfo' => 'TrackDataInfo',
                                    'FinderCheckoutShoppingCartResponse' => 'FinderCheckoutShoppingCartResponse',
                                    'FinderCheckoutShoppingCartResult' => 'FinderCheckoutShoppingCartResult',
                                    'ShoppingCart' => 'ShoppingCart',
                                    'CartItem' => 'CartItem',
                                    'Item' => 'Item',
                                    'Package' => 'Package',
                                    'Service' => 'Service',
                                    'Product' => 'Product',
                                    'Color' => 'Color',
                                    'Size' => 'Size',
                                    'Tip' => 'Tip',
                                    'Class' => 'Mindbody_Class',
                                    'Visit' => 'Visit',
                                    'ClassDescription' => 'ClassDescription',
                                    'Level' => 'Level',
                                    'AddOrUpdateFinderUsers' => 'AddOrUpdateFinderUsers',
                                    'AddOrUpdateFinderUsersRequest' => 'AddOrUpdateFinderUsersRequest',
                                    'FinderUser' => 'FinderUser',
                                    'AddOrUpdateFinderUsersResponse' => 'AddOrUpdateFinderUsersResponse',
                                    'AddOrUpdateFinderUsersResult' => 'AddOrUpdateFinderUsersResult',
                                    'GetFinderUser' => 'GetFinderUser',
                                    'GetFinderUserRequest' => 'GetFinderUserRequest',
                                    'GetFinderUserResponse' => 'GetFinderUserResponse',
                                    'GetFinderUserResult' => 'GetFinderUserResult',
                                    'SendUserNewPassword' => 'SendUserNewPassword',
                                    'SendUserNewPasswordRequest' => 'SendUserNewPasswordRequest',
                                    'SendUserNewPasswordResponse' => 'SendUserNewPasswordResponse',
                                    'SendUserNewPasswordResult' => 'SendUserNewPasswordResult',
                                   );

  public function Finder_Service($wsdl = "https://api.mindbodyonline.com/0_5/FinderService.asmx?WSDL", $options = array()) {
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
   * Gets finder classes within a given radius. 
   *
   * @param GetClassesWithinRadius $parameters
   * @return GetClassesWithinRadiusResponse
   */
  public function GetClassesWithinRadius(GetClassesWithinRadius $parameters) {
    return $this->__soapCall('GetClassesWithinRadius', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets finder classes within a given radius. 
   *
   * @param GetSessionTypesWithinRadius $parameters
   * @return GetSessionTypesWithinRadiusResponse
   */
  public function GetSessionTypesWithinRadius(GetSessionTypesWithinRadius $parameters) {
    return $this->__soapCall('GetSessionTypesWithinRadius', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets available locations within a given radius. 
   *
   * @param GetBusinessLocationsWithinRadius $parameters
   * @return GetBusinessLocationsWithinRadiusResponse
   */
  public function GetBusinessLocationsWithinRadius(GetBusinessLocationsWithinRadius $parameters) {
    return $this->__soapCall('GetBusinessLocationsWithinRadius', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Validates and completes a sale by processing all items added to a shopping cart. 
   *
   * @param FinderCheckoutShoppingCart $parameters
   * @return FinderCheckoutShoppingCartResponse
   */
  public function FinderCheckoutShoppingCart(FinderCheckoutShoppingCart $parameters) {
    return $this->__soapCall('FinderCheckoutShoppingCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds a Finder user. If a site ID and a location ID are provided the client will also be 
   * added to the site. 
   *
   * @param AddOrUpdateFinderUsers $parameters
   * @return AddOrUpdateFinderUsersResponse
   */
  public function AddOrUpdateFinderUsers(AddOrUpdateFinderUsers $parameters) {
    return $this->__soapCall('AddOrUpdateFinderUsers', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a Finder user. 
   *
   * @param GetFinderUser $parameters
   * @return GetFinderUserResponse
   */
  public function GetFinderUser(GetFinderUser $parameters) {
    return $this->__soapCall('GetFinderUser', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Sends the user a new password. 
   *
   * @param SendUserNewPassword $parameters
   * @return SendUserNewPasswordResponse
   */
  public function SendUserNewPassword(SendUserNewPassword $parameters) {
    return $this->__soapCall('SendUserNewPassword', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
class_alias("Finder_Service", "Finder_x0020_Service");
?>

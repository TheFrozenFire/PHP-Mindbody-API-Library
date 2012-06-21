<?php
namespace MindbodyAPI;
class Finder_Service extends \SoapClient {

  private static $classmap = array(
                                    'GetClassesWithinRadius' => 'MindbodyAPI\structures\GetClassesWithinRadius',
                                    'GetClassesWithinRadiusRequest' => 'MindbodyAPI\structures\GetClassesWithinRadiusRequest',
                                    'MBRequest' => 'MindbodyAPI\structures\MBRequest',
                                    'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
                                    'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
                                    'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
                                    'GetClassesWithinRadiusResponse' => 'MindbodyAPI\structures\GetClassesWithinRadiusResponse',
                                    'GetClassesWithinRadiusResult' => 'MindbodyAPI\structures\GetClassesWithinRadiusResult',
                                    'MBResult' => 'MindbodyAPI\structures\MBResult',
                                    'StatusCode' => 'MindbodyAPI\structures\StatusCode',
                                    'FinderClass' => 'MindbodyAPI\structures\FinderClass',
                                    'Organization' => 'MindbodyAPI\structures\Organization',
                                    'Site' => 'MindbodyAPI\structures\Site',
                                    'FinderSessionType' => 'MindbodyAPI\structures\FinderSessionType',
                                    'ActionCode' => 'MindbodyAPI\structures\ActionCode',
                                    'Location' => 'MindbodyAPI\structures\Location',
                                    'MBObject' => 'MindbodyAPI\structures\MBObject',
                                    'Resource' => 'MindbodyAPI\structures\Resource',
                                    'ClientService' => 'MindbodyAPI\structures\ClientService',
                                    'Program' => 'MindbodyAPI\structures\Program',
                                    'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
                                    'Rep' => 'MindbodyAPI\structures\Rep',
                                    'Staff' => 'MindbodyAPI\structures\Staff',
                                    'Appointment' => 'MindbodyAPI\structures\Appointment',
                                    'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
                                    'Unavailability' => 'MindbodyAPI\structures\Unavailability',
                                    'Availability' => 'MindbodyAPI\structures\Availability',
                                    'SessionType' => 'MindbodyAPI\structures\SessionType',
                                    'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
                                    'Client' => 'MindbodyAPI\structures\Client',
                                    'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
                                    'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
                                    'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
                                    'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
                                    'Relationship' => 'MindbodyAPI\structures\Relationship',
                                    'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
                                    'GetSessionTypesWithinRadius' => 'MindbodyAPI\structures\GetSessionTypesWithinRadius',
                                    'GetSessionTypesWithinRadiusRequest' => 'MindbodyAPI\structures\GetSessionTypesWithinRadiusRequest',
                                    'GetSessionTypesWithinRadiusResponse' => 'MindbodyAPI\structures\GetSessionTypesWithinRadiusResponse',
                                    'GetSessionTypesWithinRadiusResult' => 'MindbodyAPI\structures\GetSessionTypesWithinRadiusResult',
                                    'FinderAppointment' => 'MindbodyAPI\structures\FinderAppointment',
                                    'GetBusinessLocationsWithinRadius' => 'MindbodyAPI\structures\GetBusinessLocationsWithinRadius',
                                    'GetBusinessLocationsWithinRadiusRequest' => 'MindbodyAPI\structures\GetBusinessLocationsWithinRadiusRequest',
                                    'GetBusinessLocationsWithinRadiusResponse' => 'MindbodyAPI\structures\GetBusinessLocationsWithinRadiusResponse',
                                    'GetBusinessLocationsWithinRadiusResult' => 'MindbodyAPI\structures\GetBusinessLocationsWithinRadiusResult',
                                    'FinderCheckoutShoppingCart' => 'MindbodyAPI\structures\FinderCheckoutShoppingCart',
                                    'FinderCheckoutShoppingCartRequest' => 'MindbodyAPI\structures\FinderCheckoutShoppingCartRequest',
                                    'PaymentInfo' => 'MindbodyAPI\structures\PaymentInfo',
                                    'DebitAccountInfo' => 'MindbodyAPI\structures\DebitAccountInfo',
                                    'CreditCardInfo' => 'MindbodyAPI\structures\CreditCardInfo',
                                    'CompInfo' => 'MindbodyAPI\structures\CompInfo',
                                    'StoredCardInfo' => 'MindbodyAPI\structures\StoredCardInfo',
                                    'TrackDataInfo' => 'MindbodyAPI\structures\TrackDataInfo',
                                    'FinderCheckoutShoppingCartResponse' => 'MindbodyAPI\structures\FinderCheckoutShoppingCartResponse',
                                    'FinderCheckoutShoppingCartResult' => 'MindbodyAPI\structures\FinderCheckoutShoppingCartResult',
                                    'ShoppingCart' => 'MindbodyAPI\structures\ShoppingCart',
                                    'CartItem' => 'MindbodyAPI\structures\CartItem',
                                    'Item' => 'MindbodyAPI\structures\Item',
                                    'Package' => 'MindbodyAPI\structures\Package',
                                    'Service' => 'MindbodyAPI\structures\Service',
                                    'Product' => 'MindbodyAPI\structures\Product',
                                    'Color' => 'MindbodyAPI\structures\Color',
                                    'Size' => 'MindbodyAPI\structures\Size',
                                    'Tip' => 'MindbodyAPI\structures\Tip',
                                    'Class' => 'MindbodyAPI\structures\Class',
                                    'Visit' => 'MindbodyAPI\structures\Visit',
                                    'ClassDescription' => 'MindbodyAPI\structures\ClassDescription',
                                    'Level' => 'MindbodyAPI\structures\Level',
                                    'AddOrUpdateFinderUsers' => 'MindbodyAPI\structures\AddOrUpdateFinderUsers',
                                    'AddOrUpdateFinderUsersRequest' => 'MindbodyAPI\structures\AddOrUpdateFinderUsersRequest',
                                    'FinderUser' => 'MindbodyAPI\structures\FinderUser',
                                    'AddOrUpdateFinderUsersResponse' => 'MindbodyAPI\structures\AddOrUpdateFinderUsersResponse',
                                    'AddOrUpdateFinderUsersResult' => 'MindbodyAPI\structures\AddOrUpdateFinderUsersResult',
                                    'GetFinderUser' => 'MindbodyAPI\structures\GetFinderUser',
                                    'GetFinderUserRequest' => 'MindbodyAPI\structures\GetFinderUserRequest',
                                    'GetFinderUserResponse' => 'MindbodyAPI\structures\GetFinderUserResponse',
                                    'GetFinderUserResult' => 'MindbodyAPI\structures\GetFinderUserResult',
                                    'SendUserNewPassword' => 'MindbodyAPI\structures\SendUserNewPassword',
                                    'SendUserNewPasswordRequest' => 'MindbodyAPI\structures\SendUserNewPasswordRequest',
                                    'SendUserNewPasswordResponse' => 'MindbodyAPI\structures\SendUserNewPasswordResponse',
                                    'SendUserNewPasswordResult' => 'MindbodyAPI\structures\SendUserNewPasswordResult',
                                   );

  public function Finder_Service($wsdl = "https://api.mindbodyonline.com/0_5/FinderService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
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
?>
<?php
namespace MindbodyAPI;
class Sale_Service extends \SoapClient {

  private static $classmap = array(
                                    'GetAcceptedCardType' => 'MindbodyAPI\structures\GetAcceptedCardType',
                                    'GetAcceptedCardTypeRequest' => 'MindbodyAPI\structures\GetAcceptedCardTypeRequest',
                                    'MBRequest' => 'MindbodyAPI\structures\MBRequest',
                                    'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
                                    'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
                                    'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
                                    'GetAcceptedCardTypeResponse' => 'MindbodyAPI\structures\GetAcceptedCardTypeResponse',
                                    'GetAcceptedCardTypeResult' => 'MindbodyAPI\structures\GetAcceptedCardTypeResult',
                                    'MBResult' => 'MindbodyAPI\structures\MBResult',
                                    'StatusCode' => 'MindbodyAPI\structures\StatusCode',
                                    'CheckoutShoppingCart' => 'MindbodyAPI\structures\CheckoutShoppingCart',
                                    'CheckoutShoppingCartRequest' => 'MindbodyAPI\structures\CheckoutShoppingCartRequest',
                                    'CartItem' => 'MindbodyAPI\structures\CartItem',
                                    'MBObject' => 'MindbodyAPI\structures\MBObject',
                                    'Site' => 'MindbodyAPI\structures\Site',
                                    'ClassSchedule' => 'MindbodyAPI\structures\ClassSchedule',
                                    'Class' => 'MindbodyAPI\structures\Class',
                                    'Visit' => 'MindbodyAPI\structures\Visit',
                                    'Staff' => 'MindbodyAPI\structures\Staff',
                                    'Appointment' => 'MindbodyAPI\structures\Appointment',
                                    'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
                                    'Unavailability' => 'MindbodyAPI\structures\Unavailability',
                                    'Availability' => 'MindbodyAPI\structures\Availability',
                                    'SessionType' => 'MindbodyAPI\structures\SessionType',
                                    'ActionCode' => 'MindbodyAPI\structures\ActionCode',
                                    'Program' => 'MindbodyAPI\structures\Program',
                                    'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
                                    'Location' => 'MindbodyAPI\structures\Location',
                                    'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
                                    'Client' => 'MindbodyAPI\structures\Client',
                                    'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
                                    'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
                                    'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
                                    'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
                                    'Relationship' => 'MindbodyAPI\structures\Relationship',
                                    'Rep' => 'MindbodyAPI\structures\Rep',
                                    'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
                                    'ClientService' => 'MindbodyAPI\structures\ClientService',
                                    'Resource' => 'MindbodyAPI\structures\Resource',
                                    'ClassDescription' => 'MindbodyAPI\structures\ClassDescription',
                                    'Level' => 'MindbodyAPI\structures\Level',
                                    'Course' => 'MindbodyAPI\structures\Course',
                                    'ShoppingCart' => 'MindbodyAPI\structures\ShoppingCart',
                                    'Size' => 'MindbodyAPI\structures\Size',
                                    'Color' => 'MindbodyAPI\structures\Color',
                                    'Item' => 'MindbodyAPI\structures\Item',
                                    'Package' => 'MindbodyAPI\structures\Package',
                                    'Service' => 'MindbodyAPI\structures\Service',
                                    'Product' => 'MindbodyAPI\structures\Product',
                                    'Tip' => 'MindbodyAPI\structures\Tip',
                                    'PaymentInfo' => 'MindbodyAPI\structures\PaymentInfo',
                                    'DebitAccountInfo' => 'MindbodyAPI\structures\DebitAccountInfo',
                                    'CreditCardInfo' => 'MindbodyAPI\structures\CreditCardInfo',
                                    'CompInfo' => 'MindbodyAPI\structures\CompInfo',
                                    'StoredCardInfo' => 'MindbodyAPI\structures\StoredCardInfo',
                                    'TrackDataInfo' => 'MindbodyAPI\structures\TrackDataInfo',
                                    'CheckoutShoppingCartResponse' => 'MindbodyAPI\structures\CheckoutShoppingCartResponse',
                                    'CheckoutShoppingCartResult' => 'MindbodyAPI\structures\CheckoutShoppingCartResult',
                                    'GetSales' => 'MindbodyAPI\structures\GetSales',
                                    'GetSalesRequest' => 'MindbodyAPI\structures\GetSalesRequest',
                                    'GetSalesResponse' => 'MindbodyAPI\structures\GetSalesResponse',
                                    'GetSalesResult' => 'MindbodyAPI\structures\GetSalesResult',
                                    'Sale' => 'MindbodyAPI\structures\Sale',
                                    'Payment' => 'MindbodyAPI\structures\Payment',
                                    'GetItemPrograms' => 'MindbodyAPI\structures\GetItemPrograms',
                                    'GetItemProgramsRequest' => 'MindbodyAPI\structures\GetItemProgramsRequest',
                                    'GetItemProgramsResponse' => 'MindbodyAPI\structures\GetItemProgramsResponse',
                                    'GetItemProgramsResult' => 'MindbodyAPI\structures\GetItemProgramsResult',
                                    'GetServices' => 'MindbodyAPI\structures\GetServices',
                                    'GetServicesRequest' => 'MindbodyAPI\structures\GetServicesRequest',
                                    'GetServicesResponse' => 'MindbodyAPI\structures\GetServicesResponse',
                                    'GetServicesResult' => 'MindbodyAPI\structures\GetServicesResult',
                                    'UpdateServices' => 'MindbodyAPI\structures\UpdateServices',
                                    'UpdateServicesRequest' => 'MindbodyAPI\structures\UpdateServicesRequest',
                                    'UpdateServicesResponse' => 'MindbodyAPI\structures\UpdateServicesResponse',
                                    'UpdateServicesResult' => 'MindbodyAPI\structures\UpdateServicesResult',
                                    'GetPackages' => 'MindbodyAPI\structures\GetPackages',
                                    'GetPackagesRequest' => 'MindbodyAPI\structures\GetPackagesRequest',
                                    'GetPackagesResponse' => 'MindbodyAPI\structures\GetPackagesResponse',
                                    'GetPackagesResult' => 'MindbodyAPI\structures\GetPackagesResult',
                                    'GetProducts' => 'MindbodyAPI\structures\GetProducts',
                                    'GetProductsRequest' => 'MindbodyAPI\structures\GetProductsRequest',
                                    'GetProductsResponse' => 'MindbodyAPI\structures\GetProductsResponse',
                                    'GetProductsResult' => 'MindbodyAPI\structures\GetProductsResult',
                                    'UpdateProducts' => 'MindbodyAPI\structures\UpdateProducts',
                                    'UpdateProductsRequest' => 'MindbodyAPI\structures\UpdateProductsRequest',
                                    'UpdateProductsResponse' => 'MindbodyAPI\structures\UpdateProductsResponse',
                                    'UpdateProductsResult' => 'MindbodyAPI\structures\UpdateProductsResult',
                                   );

  public function Sale_Service($wsdl = "https://api.mindbodyonline.com/0_5/SaleService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
	parent::__construct($wsdl, $options);
  }

  /**
   * Gets a list of card types that the site accepts. 
   *
   * @param GetAcceptedCardType $parameters
   * @return GetAcceptedCardTypeResponse
   */
  public function GetAcceptedCardType(GetAcceptedCardType $parameters) {
    return $this->__soapCall('GetAcceptedCardType', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Validates and completes a sale by processing all items added to a shopping cart. 
   *
   * @param CheckoutShoppingCart $parameters
   * @return CheckoutShoppingCartResponse
   */
  public function CheckoutShoppingCart(CheckoutShoppingCart $parameters) {
    return $this->__soapCall('CheckoutShoppingCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of sales. 
   *
   * @param GetSales $parameters
   * @return GetSalesResponse
   */
  public function GetSales(GetSales $parameters) {
    return $this->__soapCall('GetSales', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of programs that have consumer items available for sale. 
   *
   * @param GetItemPrograms $parameters
   * @return GetItemProgramsResponse
   */
  public function GetItemPrograms(GetItemPrograms $parameters) {
    return $this->__soapCall('GetItemPrograms', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of services available for sale. 
   *
   * @param GetServices $parameters
   * @return GetServicesResponse
   */
  public function GetServices(GetServices $parameters) {
    return $this->__soapCall('GetServices', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update select services information. 
   *
   * @param UpdateServices $parameters
   * @return UpdateServicesResponse
   */
  public function UpdateServices(UpdateServices $parameters) {
    return $this->__soapCall('UpdateServices', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of packages available for sale. 
   *
   * @param GetPackages $parameters
   * @return GetPackagesResponse
   */
  public function GetPackages(GetPackages $parameters) {
    return $this->__soapCall('GetPackages', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Get a list of products available for sale. 
   *
   * @param GetProducts $parameters
   * @return GetProductsResponse
   */
  public function GetProducts(GetProducts $parameters) {
    return $this->__soapCall('GetProducts', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Update select products information. 
   *
   * @param UpdateProducts $parameters
   * @return UpdateProductsResponse
   */
  public function UpdateProducts(UpdateProducts $parameters) {
    return $this->__soapCall('UpdateProducts', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
?>
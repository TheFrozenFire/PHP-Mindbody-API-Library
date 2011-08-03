<?php
class Sale_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'GetAcceptedCardType' => 'GetAcceptedCardType',
                                    'GetAcceptedCardTypeRequest' => 'GetAcceptedCardTypeRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'GetAcceptedCardTypeResponse' => 'GetAcceptedCardTypeResponse',
                                    'GetAcceptedCardTypeResult' => 'GetAcceptedCardTypeResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'CheckoutShoppingCart' => 'CheckoutShoppingCart',
                                    'CheckoutShoppingCartRequest' => 'CheckoutShoppingCartRequest',
                                    'CartItem' => 'CartItem',
                                    'MBObject' => 'MBObject',
                                    'Site' => 'Site',
                                    'ClassDescription' => 'ClassDescription',
                                    'ActionCode' => 'ActionCode',
                                    'Program' => 'Program',
                                    'ScheduleType' => 'ScheduleType',
                                    'SessionType' => 'SessionType',
                                    'Visit' => 'Visit',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'ClientCreditCard' => 'ClientCreditCard',
                                    'ClientRelationship' => 'ClientRelationship',
                                    'Relationship' => 'Relationship',
                                    'CustomClientField' => 'CustomClientField',
                                    'Location' => 'Location',
                                    'ClientService' => 'ClientService',
                                    'Class' => 'Class',
                                    'Staff' => 'Staff',
                                    'Appointment' => 'Appointment',
                                    'ScheduleItem' => 'ScheduleItem',
                                    'Availability' => 'Availability',
                                    'Unavailability' => 'Unavailability',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'Resource' => 'Resource',
                                    'ShoppingCart' => 'ShoppingCart',
                                    'Size' => 'Size',
                                    'Color' => 'Color',
                                    'Item' => 'Item',
                                    'Service' => 'Service',
                                    'Product' => 'Product',
                                    'PaymentInfo' => 'PaymentInfo',
                                    'DebitAccountInfo' => 'DebitAccountInfo',
                                    'CreditCardInfo' => 'CreditCardInfo',
                                    'CheckoutShoppingCartResponse' => 'CheckoutShoppingCartResponse',
                                    'CheckoutShoppingCartResult' => 'CheckoutShoppingCartResult',
                                    'GetSales' => 'GetSales',
                                    'GetSalesRequest' => 'GetSalesRequest',
                                    'GetSalesResponse' => 'GetSalesResponse',
                                    'GetSalesResult' => 'GetSalesResult',
                                    'Sale' => 'Sale',
                                    'Payment' => 'Payment',
                                    'GetItemPrograms' => 'GetItemPrograms',
                                    'GetItemProgramsRequest' => 'GetItemProgramsRequest',
                                    'GetItemProgramsResponse' => 'GetItemProgramsResponse',
                                    'GetItemProgramsResult' => 'GetItemProgramsResult',
                                    'GetServices' => 'GetServices',
                                    'GetServicesRequest' => 'GetServicesRequest',
                                    'GetServicesResponse' => 'GetServicesResponse',
                                    'GetServicesResult' => 'GetServicesResult',
                                    'GetProducts' => 'GetProducts',
                                    'GetProductsRequest' => 'GetProductsRequest',
                                    'GetProductsResponse' => 'GetProductsResponse',
                                    'GetProductsResult' => 'GetProductsResult',
                                   );

  public function Sale_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_5/SaleService.asmx?WSDL", $options = array()) {
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

}
?>
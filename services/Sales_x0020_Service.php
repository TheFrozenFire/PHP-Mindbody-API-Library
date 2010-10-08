<?php
class Sales_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'addSaleSimple' => 'addSaleSimple',
                                    'PaymentMethod' => 'PaymentMethod',
                                    'addSaleSimpleResponse' => 'addSaleSimpleResponse',
                                    'Result_Int' => 'Result_Int',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'addItemToCart' => 'addItemToCart',
                                    'addItemToCartResponse' => 'addItemToCartResponse',
                                    'Result_ShoppingCartItem' => 'Result_ShoppingCartItem',
                                    'ShoppingCartItem' => 'ShoppingCartItem',
                                    'addEnrollmentAndPaymentToCart' => 'addEnrollmentAndPaymentToCart',
                                    'addEnrollmentAndPaymentToCartResponse' => 'addEnrollmentAndPaymentToCartResponse',
                                    'addCourseAndPaymentToCart' => 'addCourseAndPaymentToCart',
                                    'addCourseAndPaymentToCartResponse' => 'addCourseAndPaymentToCartResponse',
                                    'getShoppingCart' => 'getShoppingCart',
                                    'getShoppingCartResponse' => 'getShoppingCartResponse',
                                    'Result_ShoppingCart' => 'Result_ShoppingCart',
                                    'checkoutShoppingCart' => 'checkoutShoppingCart',
                                    'OnlinePaymentMethod' => 'OnlinePaymentMethod',
                                    'checkoutShoppingCartResponse' => 'checkoutShoppingCartResponse',
                                    'Result_Bool' => 'Result_Bool',
                                    'getServicePrograms' => 'getServicePrograms',
                                    'getServiceProgramsResponse' => 'getServiceProgramsResponse',
                                    'Result_TypeGroups' => 'Result_TypeGroups',
                                    'TypeGroup' => 'TypeGroup',
                                    'ScheduleType' => 'ScheduleType',
                                    'getServices' => 'getServices',
                                    'getServicesResponse' => 'getServicesResponse',
                                    'Result_Services' => 'Result_Services',
                                    'Service' => 'Service',
                                    'ConsumerItem' => 'ConsumerItem',
                                    'getServicesAndDepositsForEnrollment' => 'getServicesAndDepositsForEnrollment',
                                    'getServicesAndDepositsForEnrollmentResponse' => 'getServicesAndDepositsForEnrollmentResponse',
                                    'Result_ServicesAndDeposits' => 'Result_ServicesAndDeposits',
                                    'ServicesAndDeposits' => 'ServicesAndDeposits',
                                    'Credit' => 'Credit',
                                    'getServicesAndDepositsForCourse' => 'getServicesAndDepositsForCourse',
                                    'getServicesAndDepositsForCourseResponse' => 'getServicesAndDepositsForCourseResponse',
                                    'removeItemFromCart' => 'removeItemFromCart',
                                    'removeItemFromCartResponse' => 'removeItemFromCartResponse',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Sales_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/SaleService.asmx?WSDL", $options = array()) {
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
   * Makes a simple inventory sale.  Returns a SaleID on success or a -1 and error message 
   * on failure.  EmployeeID maps to a TrainerID in the MindBody Online database schema.  SaleDateTime 
   * must include both a date and time.  LocationID should be 1 for the default location, 98 
   * for the online store or 0 for all locations (used in the Sales report to display location 
   * of sale).  Recorded total will be ((Product Price * Product Quantity) * (1 + Tax rate)). 
   *  Product Price and Tax Rate are retrieved from the database using the passed BarcodeID. 
   * 
   *
   * @param addSaleSimple $parameters
   * @return addSaleSimpleResponse
   */
  public function addSaleSimple(addSaleSimple $parameters) {
    return $this->__soapCall('addSaleSimple', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds a consumer item to a cart by Barcode ID. The input CartID is used to uniquely identify 
   * a single shopping cart. The CartID can be at most 50 characters long. 
   *
   * @param addItemToCart $parameters
   * @return addItemToCartResponse
   */
  public function addItemToCart(addItemToCart $parameters) {
    return $this->__soapCall('addItemToCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds an enrollment and an associated payment (with optional deposit) to the shopping cart. 
   * The price of the service will be used in the grand total calculation if DepositBarcodeID 
   * is not specified.If DepositBarcodeID is specified, its price will be calculated instead 
   * of the service. To enroll for all sessions of an enrollment, the RegistrationDate must 
   * be the same date as the first session of the enrollment. 
   *
   * @param addEnrollmentAndPaymentToCart $parameters
   * @return addEnrollmentAndPaymentToCartResponse
   */
  public function addEnrollmentAndPaymentToCart(addEnrollmentAndPaymentToCart $parameters) {
    return $this->__soapCall('addEnrollmentAndPaymentToCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds a course and an associated payment (with optional deposit) to the shopping cart. 
   * The price of the service will be used in the grand total calculation if DepositBarcodeID 
   * is not specified.If DepositBarcodeID is specified, its price will be calculated instead 
   * of the service. To enroll for all sessions of a course, the RegistrationDate must be the 
   * same date as the first session of the course. 
   *
   * @param addCourseAndPaymentToCart $parameters
   * @return addCourseAndPaymentToCartResponse
   */
  public function addCourseAndPaymentToCart(addCourseAndPaymentToCart $parameters) {
    return $this->__soapCall('addCourseAndPaymentToCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets the contents of the shopping cart that matches the given CartID. This function calculates 
   * and returns tax, shipping, and handling costs for all items in the cart. This method should 
   * be called immediately before calling checkoutShoppingCart to determine how much the grand 
   * total amount will be charged. 
   *
   * @param getShoppingCart $parameters
   * @return getShoppingCartResponse
   */
  public function getShoppingCart(getShoppingCart $parameters) {
    return $this->__soapCall('getShoppingCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Checks out all items in the cart, charging the grand total amount to the specified Credit 
   * Card. Each line item will be processed appropriately depending on if it is a retail item 
   * or a service with an associated class or enrollment. An error will be thrown if the grand 
   * total does not match the expected total, or if the credit card processor declines the 
   * Credit Card information.The CardHolderName must be input as it appears on the Credit Card. 
   * The ExpMonth should be entered as a numeric value (ex: 01-January, 12-December). The ExpYear 
   * should be a 2-digit or 4-digit numeric value (ex: 10 or 2010). This method must be accessed 
   * over a secure connection via SSL (HTTPS). 
   *
   * @param checkoutShoppingCart $parameters
   * @return checkoutShoppingCartResponse
   */
  public function checkoutShoppingCart(checkoutShoppingCart $parameters) {
    return $this->__soapCall('checkoutShoppingCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of programs (typegroups) with services available for purchase. 
   *
   * @param getServicePrograms $parameters
   * @return getServiceProgramsResponse
   */
  public function getServicePrograms(getServicePrograms $parameters) {
    return $this->__soapCall('getServicePrograms', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of services that can pay for a given program (typegroup). Note: The TypeGroupID 
   * is a necessary field. A VisitTypeID of 0 will not filter results by Visit Type. 
   *
   * @param getServices $parameters
   * @return getServicesResponse
   */
  public function getServices(getServices $parameters) {
    return $this->__soapCall('getServices', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of services and deposits that can pay for the given enrollment (identified 
   * by ClassID). The Card_ID of the purchasing client is not a necessary field and can be 
   * omitted, but the client's membership rules will be applied to available services if it 
   * is specified. 
   *
   * @param getServicesAndDepositsForEnrollment $parameters
   * @return getServicesAndDepositsForEnrollmentResponse
   */
  public function getServicesAndDepositsForEnrollment(getServicesAndDepositsForEnrollment $parameters) {
    return $this->__soapCall('getServicesAndDepositsForEnrollment', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Gets a list of services and deposits that can pay for the given course (identified by 
   * CourseID). The Card_ID of the purchasing client is not a necessary field and can be omitted, 
   * but the client's membership rules will be applied to available services if it is specified. 
   * 
   *
   * @param getServicesAndDepositsForCourse $parameters
   * @return getServicesAndDepositsForCourseResponse
   */
  public function getServicesAndDepositsForCourse(getServicesAndDepositsForCourse $parameters) {
    return $this->__soapCall('getServicesAndDepositsForCourse', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Removes a shopping cart item from the shopping cart. A line item is uniquely identified 
   * by the CartID and the SortOrderID. 
   *
   * @param removeItemFromCart $parameters
   * @return removeItemFromCartResponse
   */
  public function removeItemFromCart(removeItemFromCart $parameters) {
    return $this->__soapCall('removeItemFromCart', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>
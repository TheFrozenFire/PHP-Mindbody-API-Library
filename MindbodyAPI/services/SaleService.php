<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class SaleService extends \SoapClient {
	const WSDL_FILE = "https://api.mindbodyonline.com/0_5/SaleService.asmx?WSDL";
	private $classmap = array(
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
		'Class' => 'MindbodyAPI\structures\MindbodyClass',
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
		'ProviderIDUpdate' => 'MindbodyAPI\structures\ProviderIDUpdate',
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
		'CheckInfo' => 'MindbodyAPI\structures\CheckInfo',
		'CompInfo' => 'MindbodyAPI\structures\CompInfo',
		'StoredCardInfo' => 'MindbodyAPI\structures\StoredCardInfo',
		'DebitAccountInfo' => 'MindbodyAPI\structures\DebitAccountInfo',
		'GiftCardInfo' => 'MindbodyAPI\structures\GiftCardInfo',
		'TrackDataInfo' => 'MindbodyAPI\structures\TrackDataInfo',
		'EncryptedTrackDataInfo' => 'MindbodyAPI\structures\EncryptedTrackDataInfo',
		'CustomPaymentInfo' => 'MindbodyAPI\structures\CustomPaymentInfo',
		'CashInfo' => 'MindbodyAPI\structures\CashInfo',
		'CreditCardInfo' => 'MindbodyAPI\structures\CreditCardInfo',
		'CheckoutShoppingCartResponse' => 'MindbodyAPI\structures\CheckoutShoppingCartResponse',
		'CheckoutShoppingCartResult' => 'MindbodyAPI\structures\CheckoutShoppingCartResult',
		'GetSales' => 'MindbodyAPI\structures\GetSales',
		'GetSalesRequest' => 'MindbodyAPI\structures\GetSalesRequest',
		'GetSalesResponse' => 'MindbodyAPI\structures\GetSalesResponse',
		'GetSalesResult' => 'MindbodyAPI\structures\GetSalesResult',
		'Sale' => 'MindbodyAPI\structures\Sale',
		'Payment' => 'MindbodyAPI\structures\Payment',
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
		'RedeemSpaFinderWellnessCard' => 'MindbodyAPI\structures\RedeemSpaFinderWellnessCard',
		'RedeemSpaFinderWellnessCardRequest' => 'MindbodyAPI\structures\RedeemSpaFinderWellnessCardRequest',
		'RedeemSpaFinderWellnessCardResponse' => 'MindbodyAPI\structures\RedeemSpaFinderWellnessCardResponse',
		'RedeemSpaFinderWellnessCardResult' => 'MindbodyAPI\structures\RedeemSpaFinderWellnessCardResult',
		'GetCustomPaymentMethods' => 'MindbodyAPI\structures\GetCustomPaymentMethods',
		'GetCustomPaymentMethodsRequest' => 'MindbodyAPI\structures\GetCustomPaymentMethodsRequest',
		'GetCustomPaymentMethodsResponse' => 'MindbodyAPI\structures\GetCustomPaymentMethodsResponse',
		'GetCustomPaymentMethodsResult' => 'MindbodyAPI\structures\GetCustomPaymentMethodsResult',
		'ReturnSale' => 'MindbodyAPI\structures\ReturnSale',
		'ReturnSaleRequest' => 'MindbodyAPI\structures\ReturnSaleRequest',
		'ReturnSaleResponse' => 'MindbodyAPI\structures\ReturnSaleResponse',
		'ReturnSaleResult' => 'MindbodyAPI\structures\ReturnSaleResult',
		'UpdateSaleDate' => 'MindbodyAPI\structures\UpdateSaleDate',
		'UpdateSaleDateRequest' => 'MindbodyAPI\structures\UpdateSaleDateRequest',
		'UpdateSaleDateResponse' => 'MindbodyAPI\structures\UpdateSaleDateResponse',
		'UpdateSaleDateResult' => 'MindbodyAPI\structures\UpdateSaleDateResult',
	);
	public function __construct($wsdl = null, $options = array()) {
		foreach ($this->classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? : self::WSDL_FILE, $options);
	}
	/**
	 * Gets a list of card types that the site accepts.
	 *
	 * @param GetAcceptedCardType $parameters
	 * @return GetAcceptedCardTypeResponse
	 */
	public function GetAcceptedCardType(structures\GetAcceptedCardType $parameters) {
		return $this->__soapCall('GetAcceptedCardType', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Validates and completes a sale by processing all items added to a shopping cart.
	 *
	 * @param CheckoutShoppingCart $parameters
	 * @return CheckoutShoppingCartResponse
	 */
	public function CheckoutShoppingCart(structures\CheckoutShoppingCart $parameters) {
		return $this->__soapCall('CheckoutShoppingCart', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of sales.
	 *
	 * @param GetSales $parameters
	 * @return GetSalesResponse
	 */
	public function GetSales(structures\GetSales $parameters) {
		return $this->__soapCall('GetSales', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of services available for sale.
	 *
	 * @param GetServices $parameters
	 * @return GetServicesResponse
	 */
	public function GetServices(structures\GetServices $parameters) {
		return $this->__soapCall('GetServices', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Update select services information.
	 *
	 * @param UpdateServices $parameters
	 * @return UpdateServicesResponse
	 */
	public function UpdateServices(structures\UpdateServices $parameters) {
		return $this->__soapCall('UpdateServices', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of packages available for sale.
	 *
	 * @param GetPackages $parameters
	 * @return GetPackagesResponse
	 */
	public function GetPackages(structures\GetPackages $parameters) {
		return $this->__soapCall('GetPackages', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get a list of products available for sale.
	 *
	 * @param GetProducts $parameters
	 * @return GetProductsResponse
	 */
	public function GetProducts(structures\GetProducts $parameters) {
		return $this->__soapCall('GetProducts', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Update select products information.
	 *
	 * @param UpdateProducts $parameters
	 * @return UpdateProductsResponse
	 */
	public function UpdateProducts(structures\UpdateProducts $parameters) {
		return $this->__soapCall('UpdateProducts', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Redeem a Spa Finder Gift Card.
	 *
	 * @param RedeemSpaFinderWellnessCard $parameters
	 * @return RedeemSpaFinderWellnessCardResponse
	 */
	public function RedeemSpaFinderWellnessCard(structures\RedeemSpaFinderWellnessCard $parameters) {
		return $this->__soapCall('RedeemSpaFinderWellnessCard', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of Custom Payment Methods.
	 *
	 * @param GetCustomPaymentMethods $parameters
	 * @return GetCustomPaymentMethodsResponse
	 */
	public function GetCustomPaymentMethods(structures\GetCustomPaymentMethods $parameters) {
		return $this->__soapCall('GetCustomPaymentMethods', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Return a sale used in business mode
	 *
	 * @param ReturnSale $parameters
	 * @return ReturnSaleResponse
	 */
	public function ReturnSale(structures\ReturnSale $parameters) {
		return $this->__soapCall('ReturnSale', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Modify sale date in business mode
	 *
	 * @param UpdateSaleDate $parameters
	 * @return UpdateSaleDateResponse
	 */
	public function UpdateSaleDate(structures\UpdateSaleDate $parameters) {
		return $this->__soapCall('UpdateSaleDate', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>
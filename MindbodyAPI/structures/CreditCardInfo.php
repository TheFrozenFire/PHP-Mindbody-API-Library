<?php
namespace MindbodyAPI\structures;
class CreditCardInfo {
	public $CVV; // string
	public $Action; // ActionCode
	public $CreditCardNumber; // string
	public $Amount; // decimal
	public $ExpMonth; // string
	public $ExpYear; // string
	public $BillingName; // string
	public $BillingAddress; // string
	public $BillingCity; // string
	public $BillingState; // string
	public $BillingPostalCode; // string
	public $SaveInfo; // boolean
	
}
?>
<?php
namespace MindbodyAPI\structures;
class CreditCardInfo extends PaymentInfo {
	/** @var string */
	public $CVV;
	/** @var ActionCode */
	public $Action;
	/** @var string */
	public $CreditCardNumber;
	/** @var decimal */
	public $Amount;
	/** @var string */
	public $ExpMonth;
	/** @var string */
	public $ExpYear;
	/** @var string */
	public $BillingName;
	/** @var string */
	public $BillingAddress;
	/** @var string */
	public $BillingCity;
	/** @var string */
	public $BillingState;
	/** @var string */
	public $BillingPostalCode;
	/** @var boolean */
	public $SaveInfo;
}
?>
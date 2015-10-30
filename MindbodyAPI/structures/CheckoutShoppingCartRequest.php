<?php
namespace MindbodyAPI\structures;
class CheckoutShoppingCartRequest extends MBRequest {
	/** @var string */
	public $CartID;
	/** @var string */
	public $ClientID;
	/** @var boolean */
	public $Test;
	/** @var CartItem[] */
	public $CartItems;
	/** @var boolean */
	public $InStore;
	/** @var string */
	public $PromotionCode;
	/** @var PaymentInfo[] */
	public $Payments;
	/** @var boolean */
	public $SendEmail;
	/** @var int */
	public $LocationID;
	/** @var base64Binary */
	public $Image;
	/** @var string */
	public $ImageFileName;
}
?>
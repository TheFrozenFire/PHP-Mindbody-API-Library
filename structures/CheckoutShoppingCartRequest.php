<?php
namespace MindbodyAPI\structures;
class CheckoutShoppingCartRequest {
	public $CartID; // string
	public $ClientID; // string
	public $Test; // boolean
	public $CartItems; // ArrayOfCartItem
	public $InStore; // boolean
	public $PromotionCode; // string
	public $Payments; // ArrayOfPaymentInfo
	public $SendEmail; // boolean
	public $LocationID; // int
	public $Image; // base64Binary
	public $ImageFileName; // string
	
}
?>
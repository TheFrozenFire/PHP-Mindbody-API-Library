<?php
namespace MindbodyAPI\structures;
class ShoppingCart extends MBObject {
	/** @var string */
	public $AuthCode;
	/** @var ActionCode */
	public $Action;
	/** @var string */
	public $ID;
	/** @var CartItem[] */
	public $CartItems;
	/** @var double */
	public $SubTotal;
	/** @var double */
	public $DiscountTotal;
	/** @var double */
	public $TaxTotal;
	/** @var double */
	public $GrandTotal;
}
?>
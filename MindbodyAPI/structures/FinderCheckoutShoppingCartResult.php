<?php
namespace MindbodyAPI\structures;
class FinderCheckoutShoppingCartResult extends MBResult {
	/** @var ShoppingCart */
	public $ShoppingCart;
	/** @var Class[] */
	public $Classes;
	/** @var Appointment[] */
	public $Appointments;
}
?>
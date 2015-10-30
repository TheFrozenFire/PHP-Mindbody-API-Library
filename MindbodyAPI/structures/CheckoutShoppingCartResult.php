<?php
namespace MindbodyAPI\structures;
class CheckoutShoppingCartResult extends MBResult {
	/** @var ShoppingCart */
	public $ShoppingCart;
	/** @var Class[] */
	public $Classes;
	/** @var Appointment[] */
	public $Appointments;
	/** @var ClassSchedule[] */
	public $Enrollments;
}
?>
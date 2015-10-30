<?php
namespace MindbodyAPI\structures;
class CartItem extends MBObject {
	/** @var Item */
	public $Item;
	/** @var decimal */
	public $DiscountAmount;
	/** @var Appointment[] */
	public $Appointments;
	/** @var Int[] */
	public $EnrollmentIDs;
	/** @var Int[] */
	public $ClassIDs;
	/** @var Long[] */
	public $CourseIDs;
	/** @var Long[] */
	public $VisitIDs;
	/** @var Long[] */
	public $AppointmentIDs;
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
	/** @var int */
	public $Quantity;
}
?>
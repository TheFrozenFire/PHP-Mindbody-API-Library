<?php
namespace MindbodyAPI\structures;
class CartItem {
	public $Item; // Item
	public $DiscountAmount; // decimal
	public $Appointments; // ArrayOfAppointment
	public $EnrollmentIDs; // ArrayOfInt
	public $ClassIDs; // ArrayOfInt
	public $CourseIDs; // ArrayOfLong
	public $VisitIDs; // ArrayOfLong
	public $AppointmentIDs; // ArrayOfLong
	public $Action; // ActionCode
	public $ID; // int
	public $Quantity; // int
	
}
?>
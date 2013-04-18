<?php
namespace MindbodyAPI\structures;
class AddOrUpdateAppointmentsRequest {
	public $UpdateAction; // string
	public $Test; // boolean
	public $SendEmail; // boolean
	public $ApplyPayment; // boolean
	public $Appointments; // ArrayOfAppointment
	
}
?>
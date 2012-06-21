<?php
namespace MindbodyAPI\structures;
class Appointment {
	public $Action; // ActionCode
	public $ID; // long
	public $Status; // AppointmentStatus
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $Notes; // string
	public $StaffRequested; // boolean
	public $Program; // Program
	public $SessionType; // SessionType
	public $Location; // Location
	public $Staff; // Staff
	public $Client; // Client
	public $FirstAppointment; // boolean
	public $ClientService; // ClientService
	public $Resources; // ArrayOfResource
	
}
?>
<?php
namespace MindbodyAPI\structures;
class Visit {
	public $ID; // long
	public $ClassID; // int
	public $AppointmentID; // int
	public $AppointmentGenderPreference; // string
	public $StartDateTime; // dateTime
	public $LateCancelled; // boolean
	public $EndDateTime; // dateTime
	public $Name; // string
	public $Staff; // Staff
	public $Location; // Location
	public $Client; // Client
	public $WebSignup; // boolean
	public $Action; // ActionCode
	public $SignedIn; // boolean
	public $MakeUp; // boolean
	public $Service; // ClientService
	
}
?>
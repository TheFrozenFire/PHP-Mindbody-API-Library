<?php
namespace MindbodyAPI\structures;
class Staff {
	public $Appointments; // ArrayOfAppointment
	public $Unavailabilities; // ArrayOfUnavailability
	public $Availabilities; // ArrayOfAvailability
	public $Email; // string
	public $MobilePhone; // string
	public $HomePhone; // string
	public $WorkPhone; // string
	public $Address; // string
	public $Address2; // string
	public $City; // string
	public $State; // string
	public $Country; // string
	public $PostalCode; // string
	public $ForeignZip; // string
	public $LoginLocations; // ArrayOfLocation
	public $Action; // ActionCode
	public $ID; // long
	public $Name; // string
	public $FirstName; // string
	public $LastName; // string
	public $ImageURL; // string
	public $Bio; // string
	public $isMale; // boolean
	
}
?>
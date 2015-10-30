<?php
namespace MindbodyAPI\structures;
class Staff extends MBObject {
	/** @var Appointment[] */
	public $Appointments;
	/** @var Unavailability[] */
	public $Unavailabilities;
	/** @var Availability[] */
	public $Availabilities;
	/** @var string */
	public $Email;
	/** @var string */
	public $MobilePhone;
	/** @var string */
	public $HomePhone;
	/** @var string */
	public $WorkPhone;
	/** @var string */
	public $Address;
	/** @var string */
	public $Address2;
	/** @var string */
	public $City;
	/** @var string */
	public $State;
	/** @var string */
	public $Country;
	/** @var string */
	public $PostalCode;
	/** @var string */
	public $ForeignZip;
	/** @var int */
	public $SortOrder;
	/** @var Location[] */
	public $LoginLocations;
	/** @var boolean */
	public $MultiLocation;
	/** @var boolean */
	public $AppointmentTrn;
	/** @var boolean */
	public $ReservationTrn;
	/** @var boolean */
	public $IndependentContractor;
	/** @var boolean */
	public $AlwaysAllowDoubleBooking;
	/** @var string */
	public $UserAccessLevel;
	/** @var String[] */
	public $ProviderIDs;
	/** @var ProviderIDUpdate[] */
	public $ProviderIDUpdateList;
	/** @var ActionCode */
	public $Action;
	/** @var long */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $FirstName;
	/** @var string */
	public $LastName;
	/** @var string */
	public $ImageURL;
	/** @var string */
	public $Bio;
	/** @var boolean */
	public $isMale;
}
?>
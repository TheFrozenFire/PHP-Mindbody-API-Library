<?php
namespace MindbodyAPI\structures;
class Visit extends MBObject {
	/** @var long */
	public $ID;
	/** @var int */
	public $ClassID;
	/** @var int */
	public $AppointmentID;
	/** @var string */
	public $AppointmentGenderPreference;
	/** @var dateTime */
	public $StartDateTime;
	/** @var boolean */
	public $LateCancelled;
	/** @var dateTime */
	public $EndDateTime;
	/** @var string */
	public $Name;
	/** @var Staff */
	public $Staff;
	/** @var Location */
	public $Location;
	/** @var Client */
	public $Client;
	/** @var boolean */
	public $WebSignup;
	/** @var ActionCode */
	public $Action;
	/** @var boolean */
	public $SignedIn;
	/** @var boolean */
	public $MakeUp;
	/** @var ClientService */
	public $Service;
}
?>
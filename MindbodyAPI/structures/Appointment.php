<?php
namespace MindbodyAPI\structures;
class Appointment extends ScheduleItem {
	/** @var string */
	public $GenderPreference;
	/** @var int */
	public $Duration;
	/** @var string */
	public $ProviderID;
	/** @var ActionCode */
	public $Action;
	/** @var long */
	public $ID;
	/** @var AppointmentStatus */
	public $Status;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var string */
	public $Notes;
	/** @var boolean */
	public $StaffRequested;
	/** @var Program */
	public $Program;
	/** @var SessionType */
	public $SessionType;
	/** @var Location */
	public $Location;
	/** @var Staff */
	public $Staff;
	/** @var Client */
	public $Client;
	/** @var boolean */
	public $FirstAppointment;
	/** @var ClientService */
	public $ClientService;
	/** @var Resource[] */
	public $Resources;
}
?>
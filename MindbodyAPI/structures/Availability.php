<?php
namespace MindbodyAPI\structures;
class Availability extends ScheduleItem {
	/** @var int */
	public $ID;
	/** @var Staff */
	public $Staff;
	/** @var SessionType */
	public $SessionType;
	/** @var Program[] */
	public $Programs;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var dateTime */
	public $BookableEndDateTime;
	/** @var Location */
	public $Location;
}
?>
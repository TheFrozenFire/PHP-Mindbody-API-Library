<?php
namespace MindbodyAPI\structures;
class ClassSchedule extends MBObject {
	/** @var Class[] */
	public $Classes;
	/** @var Client[] */
	public $Clients;
	/** @var Course */
	public $Course;
	/** @var int */
	public $SemesterID;
	/** @var boolean */
	public $IsAvailable;
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
	/** @var ClassDescription */
	public $ClassDescription;
	/** @var boolean */
	public $DaySunday;
	/** @var boolean */
	public $DayMonday;
	/** @var boolean */
	public $DayTuesday;
	/** @var boolean */
	public $DayWednesday;
	/** @var boolean */
	public $DayThursday;
	/** @var boolean */
	public $DayFriday;
	/** @var boolean */
	public $DaySaturday;
	/** @var boolean */
	public $AllowOpenEnrollment;
	/** @var boolean */
	public $AllowDateForwardEnrollment;
	/** @var dateTime */
	public $StartTime;
	/** @var dateTime */
	public $EndTime;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var Staff */
	public $Staff;
	/** @var Location */
	public $Location;
}
?>
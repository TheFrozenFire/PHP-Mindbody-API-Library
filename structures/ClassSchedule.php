<?php
namespace MindbodyAPI\structures;
class ClassSchedule {
	public $Classes; // ArrayOfClass
	public $Clients; // ArrayOfClient
	public $Course; // Course
	public $SemesterID; // int
	public $IsAvailable; // boolean
	public $Action; // ActionCode
	public $ID; // int
	public $ClassDescription; // ClassDescription
	public $DaySunday; // boolean
	public $DayMonday; // boolean
	public $DayTuesday; // boolean
	public $DayWednesday; // boolean
	public $DayThursday; // boolean
	public $DayFriday; // boolean
	public $DaySaturday; // boolean
	public $StartTime; // dateTime
	public $EndTime; // dateTime
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $Staff; // Staff
	public $Location; // Location
	
}
?>
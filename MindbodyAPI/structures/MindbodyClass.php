<?php
namespace MindbodyAPI\structures;
class MindbodyClass {
	public $ClassScheduleID; // int
	public $Visits; // ArrayOfVisit
	public $Clients; // ArrayOfClient
	public $Location; // Location
	public $Resource; // Resource
	public $MaxCapacity; // int
	public $WebCapacity; // int
	public $TotalBooked; // int
	public $TotalBookedWaitlist; // int
	public $WebBooked; // int
	public $SemesterID; // int
	public $IsCanceled; // boolean
	public $Substitute; // boolean
	public $Active; // boolean
	public $IsWaitlistAvailable; // boolean
	public $IsEnrolled; // boolean
	public $HideCancel; // boolean
	public $Action; // ActionCode
	public $ID; // int
	public $IsAvailable; // boolean
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $ClassDescription; // ClassDescription
	public $Staff; // Staff
	
}
?>
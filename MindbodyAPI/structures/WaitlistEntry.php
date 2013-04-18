<?php
namespace MindbodyAPI\structures;
class WaitlistEntry {
	public $ID; // int
	public $ClassID; // long
	public $Client; // Client
	public $ClassSchedule; // ClassSchedule
	public $EnrollmentDateForward; // dateTime
	public $RequestDateTime; // dateTime
	public $Web; // boolean
	
}
?>
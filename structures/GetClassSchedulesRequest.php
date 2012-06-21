<?php
namespace MindbodyAPI\structures;
class GetClassSchedulesRequest {
	public $LocationIDs; // ArrayOfInt
	public $ClassScheduleIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $ProgramIDs; // ArrayOfInt
	public $SessionTypeIDs; // ArrayOfInt
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	
}
?>
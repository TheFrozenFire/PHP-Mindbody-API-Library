<?php
namespace MindbodyAPI\structures;
class GetEnrollmentsRequest {
	public $LocationIDs; // ArrayOfInt
	public $ClassScheduleIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $ProgramIDs; // ArrayOfInt
	public $SessionTypeIDs; // ArrayOfInt
	public $SemesterIDs; // ArrayOfInt
	public $CourseIDs; // ArrayOfLong
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	
}
?>
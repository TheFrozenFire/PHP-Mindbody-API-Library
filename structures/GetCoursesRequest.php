<?php
namespace MindbodyAPI\structures;
class GetCoursesRequest {
	public $LocationIDs; // ArrayOfInt
	public $CourseIDs; // ArrayOfLong
	public $StaffIDs; // ArrayOfLong
	public $ProgramIDs; // ArrayOfInt
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $SemesterIDs; // ArrayOfInt
	
}
?>
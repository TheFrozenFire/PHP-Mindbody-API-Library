<?php
namespace MindbodyAPI\structures;
class GetCoursesRequest extends MBRequest {
	/** @var Int[] */
	public $LocationIDs;
	/** @var Long[] */
	public $CourseIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var Int[] */
	public $SemesterIDs;
}
?>
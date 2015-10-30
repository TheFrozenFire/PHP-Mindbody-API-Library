<?php
namespace MindbodyAPI\structures;
class GetEnrollmentsRequest extends MBRequest {
	/** @var Int[] */
	public $LocationIDs;
	/** @var Int[] */
	public $ClassScheduleIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var Int[] */
	public $SemesterIDs;
	/** @var Long[] */
	public $CourseIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
}
?>
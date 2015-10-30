<?php
namespace MindbodyAPI\structures;
class GetClassSchedulesRequest extends MBRequest {
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
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
}
?>
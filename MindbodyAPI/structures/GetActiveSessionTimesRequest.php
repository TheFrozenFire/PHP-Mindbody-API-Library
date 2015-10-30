<?php
namespace MindbodyAPI\structures;
class GetActiveSessionTimesRequest extends MBRequest {
	/** @var ScheduleType */
	public $ScheduleType;
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var dateTime */
	public $StartTime;
	/** @var dateTime */
	public $EndTime;
}
?>
<?php
namespace MindbodyAPI\structures;
class GetProgramsRequest extends MBRequest {
	/** @var ScheduleType */
	public $ScheduleType;
	/** @var boolean */
	public $OnlineOnly;
}
?>
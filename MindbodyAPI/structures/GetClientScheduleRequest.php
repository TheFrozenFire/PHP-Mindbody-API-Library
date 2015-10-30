<?php
namespace MindbodyAPI\structures;
class GetClientScheduleRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
}
?>
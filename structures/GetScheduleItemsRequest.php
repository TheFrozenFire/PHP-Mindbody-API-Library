<?php
namespace MindbodyAPI\structures;
class GetScheduleItemsRequest {
	public $LocationIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $IgnorePrepFinishTimes; // boolean
	
}
?>
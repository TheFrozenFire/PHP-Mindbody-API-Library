<?php
namespace MindbodyAPI\structures;
class GetScheduleItemsRequest extends MBRequest {
	/** @var Int[] */
	public $LocationIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var boolean */
	public $IgnorePrepFinishTimes;
}
?>
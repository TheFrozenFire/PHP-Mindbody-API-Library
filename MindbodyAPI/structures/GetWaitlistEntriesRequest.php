<?php
namespace MindbodyAPI\structures;
class GetWaitlistEntriesRequest extends MBRequest {
	/** @var Int[] */
	public $ClassScheduleIDs;
	/** @var String[] */
	public $ClientIDs;
	/** @var Int[] */
	public $WaitlistEntryIDs;
	/** @var Int[] */
	public $ClassIDs;
	/** @var boolean */
	public $HidePastEntries;
}
?>
<?php
namespace MindbodyAPI\structures;
class GetClassesRequest extends MBRequest {
	/** @var Int[] */
	public $ClassDescriptionIDs;
	/** @var Int[] */
	public $ClassIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var string */
	public $ClientID;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var Int[] */
	public $LocationIDs;
	/** @var Int[] */
	public $SemesterIDs;
	/** @var boolean */
	public $HideCanceledClasses;
	/** @var boolean */
	public $SchedulingWindow;
}
?>
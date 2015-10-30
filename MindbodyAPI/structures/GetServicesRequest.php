<?php
namespace MindbodyAPI\structures;
class GetServicesRequest extends MBRequest {
	/** @var Int[] */
	public $ProgramIDs;
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var String[] */
	public $ServiceIDs;
	/** @var int */
	public $ClassID;
	/** @var int */
	public $ClassScheduleID;
	/** @var boolean */
	public $SellOnline;
	/** @var int */
	public $LocationID;
	/** @var boolean */
	public $HideRelatedPrograms;
	/** @var long */
	public $StaffID;
}
?>
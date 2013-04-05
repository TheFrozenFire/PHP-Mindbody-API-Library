<?php
namespace MindbodyAPI\structures;
class GetServicesRequest {
	public $ProgramIDs; // ArrayOfInt
	public $SessionTypeIDs; // ArrayOfInt
	public $ServiceIDs; // ArrayOfString
	public $ClassID; // int
	public $ClassScheduleID; // int
	public $SellOnline; // boolean
	public $LocationID; // int
	public $HideRelatedPrograms; // boolean
	public $StaffID; // long
	
}
?>
<?php
namespace MindbodyAPI\structures;
class GetClassesRequest {
	public $ClassDescriptionIDs; // ArrayOfInt
	public $ClassIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $ClientID; // string
	public $ProgramIDs; // ArrayOfInt
	public $SessionTypeIDs; // ArrayOfInt
	public $LocationIDs; // ArrayOfInt
	public $SemesterIDs; // ArrayOfInt
	public $HideCanceledClasses; // boolean
	public $SchedulingWindow; // boolean
	
}
?>
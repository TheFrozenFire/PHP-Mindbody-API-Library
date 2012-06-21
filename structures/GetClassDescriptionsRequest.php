<?php
namespace MindbodyAPI\structures;
class GetClassDescriptionsRequest {
	public $ClassDescriptionIDs; // ArrayOfInt
	public $ProgramIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $LocationIDs; // ArrayOfInt
	public $StartClassDateTime; // dateTime
	public $EndClassDateTime; // dateTime
	
}
?>
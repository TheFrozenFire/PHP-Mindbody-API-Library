<?php
namespace MindbodyAPI\structures;
class GetClientContactLogsRequest {
	public $ClientID; // string
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $StaffIDs; // ArrayOfLong
	public $ShowSystemGenerated; // boolean
	public $TypeIDs; // ArrayOfInt
	public $SubtypeIDs; // ArrayOfInt
	
}
?>
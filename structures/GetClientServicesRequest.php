<?php
namespace MindbodyAPI\structures;
class GetClientServicesRequest {
	public $ClientID; // string
	public $ClassID; // int
	public $ProgramIDs; // ArrayOfInt
	public $SessionTypeIDs; // ArrayOfInt
	public $LocationIDs; // ArrayOfInt
	public $VisitCount; // int
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $ShowActiveOnly; // boolean
	
}
?>
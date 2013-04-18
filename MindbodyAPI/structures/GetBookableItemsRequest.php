<?php
namespace MindbodyAPI\structures;
class GetBookableItemsRequest {
	public $SessionTypeIDs; // ArrayOfInt
	public $LocationIDs; // ArrayOfInt
	public $StaffIDs; // ArrayOfLong
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	
}
?>
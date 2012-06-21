<?php
namespace MindbodyAPI\structures;
class GetStaffRequest {
	public $StaffIDs; // ArrayOfLong
	public $StaffCredentials; // StaffCredentials
	public $Filters; // ArrayOfStaffFilter
	public $SessionTypeID; // int
	public $StartDateTime; // dateTime
	public $LocationID; // int
	
}
?>
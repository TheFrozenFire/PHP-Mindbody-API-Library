<?php
namespace MindbodyAPI\structures;
class GetStaffAppointmentsRequest {
	public $StaffCredentials; // StaffCredentials
	public $AppointmentIDs; // ArrayOfInt
	public $LocationIDs; // ArrayOfInt
	public $StartDate; // dateTime
	public $EndDate; // dateTime
	public $StaffIDs; // ArrayOfLong
	public $ClientIDs; // ArrayOfString
	
}
?>
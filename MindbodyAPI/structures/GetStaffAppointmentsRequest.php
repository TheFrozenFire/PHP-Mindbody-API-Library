<?php
namespace MindbodyAPI\structures;
class GetStaffAppointmentsRequest extends MBRequest {
	/** @var StaffCredentials */
	public $StaffCredentials;
	/** @var Int[] */
	public $AppointmentIDs;
	/** @var Int[] */
	public $LocationIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var Long[] */
	public $StaffIDs;
	/** @var String[] */
	public $ClientIDs;
}
?>
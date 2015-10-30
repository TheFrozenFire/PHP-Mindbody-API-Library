<?php
namespace MindbodyAPI\structures;
class GetStaffRequest extends MBRequest {
	/** @var Long[] */
	public $StaffIDs;
	/** @var StaffCredentials */
	public $StaffCredentials;
	/** @var StaffFilter[] */
	public $Filters;
	/** @var int */
	public $SessionTypeID;
	/** @var dateTime */
	public $StartDateTime;
	/** @var int */
	public $LocationID;
}
?>
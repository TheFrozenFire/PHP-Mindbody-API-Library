<?php
namespace MindbodyAPI\structures;
class GetBookableItemsRequest extends MBRequest {
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var Int[] */
	public $LocationIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var long */
	public $AppointmentID;
	/** @var boolean */
	public $IgnoreDefaultSessionLength;
}
?>
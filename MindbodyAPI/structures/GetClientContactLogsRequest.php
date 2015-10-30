<?php
namespace MindbodyAPI\structures;
class GetClientContactLogsRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var Long[] */
	public $StaffIDs;
	/** @var boolean */
	public $ShowSystemGenerated;
	/** @var Int[] */
	public $TypeIDs;
	/** @var Int[] */
	public $SubtypeIDs;
}
?>
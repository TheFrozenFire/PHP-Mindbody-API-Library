<?php
namespace MindbodyAPI\structures;
class GetResourcesRequest extends MBRequest {
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var int */
	public $LocationID;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
}
?>
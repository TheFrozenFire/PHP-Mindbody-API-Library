<?php
namespace MindbodyAPI\structures;
class GetClientVisitsRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var boolean */
	public $UnpaidsOnly;
}
?>
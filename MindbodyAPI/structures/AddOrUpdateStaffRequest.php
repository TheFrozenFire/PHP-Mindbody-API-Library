<?php
namespace MindbodyAPI\structures;
class AddOrUpdateStaffRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var Staff[] */
	public $Staff;
}
?>
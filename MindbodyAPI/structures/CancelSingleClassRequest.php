<?php
namespace MindbodyAPI\structures;
class CancelSingleClassRequest extends MBRequest {
	/** @var long */
	public $ClassID;
	/** @var boolean */
	public $HideCancel;
	/** @var boolean */
	public $SendClientEmail;
	/** @var boolean */
	public $SendStaffEmail;
}
?>
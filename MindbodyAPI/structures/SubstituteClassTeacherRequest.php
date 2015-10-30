<?php
namespace MindbodyAPI\structures;
class SubstituteClassTeacherRequest extends MBRequest {
	/** @var long */
	public $ClassID;
	/** @var long */
	public $StaffID;
	/** @var boolean */
	public $OverrideConflicts;
	/** @var boolean */
	public $SendClientEmail;
	/** @var boolean */
	public $SendOldStaffEmail;
	/** @var boolean */
	public $SendNewStaffEmail;
}
?>
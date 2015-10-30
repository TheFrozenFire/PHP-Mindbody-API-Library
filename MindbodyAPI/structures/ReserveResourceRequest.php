<?php
namespace MindbodyAPI\structures;
class ReserveResourceRequest extends MBRequest {
	/** @var int */
	public $ResourceID;
	/** @var int */
	public $ClientID;
	/** @var int */
	public $StaffID;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var int */
	public $LocationID;
	/** @var int */
	public $ProgramID;
	/** @var string */
	public $Notes;
}
?>
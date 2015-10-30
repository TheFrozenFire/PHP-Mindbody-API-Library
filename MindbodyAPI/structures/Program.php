<?php
namespace MindbodyAPI\structures;
class Program extends MBObject {
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var ScheduleType */
	public $ScheduleType;
	/** @var int */
	public $CancelOffset;
}
?>
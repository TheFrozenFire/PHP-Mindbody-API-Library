<?php
namespace MindbodyAPI\structures;
class Unavailability extends ScheduleItem {
	/** @var int */
	public $ID;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var string */
	public $Description;
}
?>
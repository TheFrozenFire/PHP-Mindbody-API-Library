<?php
namespace MindbodyAPI\structures;
class FormulaNote extends MBObject {
	/** @var long */
	public $ID;
	/** @var string */
	public $ClientID;
	/** @var string */
	public $Note;
	/** @var dateTime */
	public $EntryDateTime;
	/** @var long */
	public $AppointmentID;
}
?>
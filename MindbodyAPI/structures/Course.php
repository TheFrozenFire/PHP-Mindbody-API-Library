<?php
namespace MindbodyAPI\structures;
class Course {
	/** @var long */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $Description;
	/** @var string */
	public $Notes;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var Location */
	public $Location;
	/** @var Staff */
	public $Organizer;
	/** @var Program */
	public $Program;
	/** @var string */
	public $ImageURL;
}
?>
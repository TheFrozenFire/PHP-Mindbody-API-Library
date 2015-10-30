<?php
namespace MindbodyAPI\structures;
class Semester {
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $Description;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var decimal */
	public $MultiRegistrationDiscount;
	/** @var dateTime */
	public $MultiRegistrationDeadline;
}
?>
<?php
namespace MindbodyAPI\structures;
class ContactLogType extends MBObject {
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var ContactLogSubtype[] */
	public $Subtypes;
}
?>
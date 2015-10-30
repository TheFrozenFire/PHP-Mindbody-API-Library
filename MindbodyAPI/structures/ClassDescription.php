<?php
namespace MindbodyAPI\structures;
class ClassDescription extends MBObject {
	/** @var string */
	public $ImageURL;
	/** @var Level */
	public $Level;
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $Description;
	/** @var string */
	public $Prereq;
	/** @var string */
	public $Notes;
	/** @var dateTime */
	public $LastUpdated;
	/** @var Program */
	public $Program;
	/** @var SessionType */
	public $SessionType;
	/** @var boolean */
	public $Active;
}
?>
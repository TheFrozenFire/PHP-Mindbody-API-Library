<?php
namespace MindbodyAPI\structures;
class Payment {
	/** @var long */
	public $ID;
	/** @var decimal */
	public $Amount;
	/** @var int */
	public $Method;
	/** @var string */
	public $Type;
	/** @var string */
	public $Notes;
}
?>
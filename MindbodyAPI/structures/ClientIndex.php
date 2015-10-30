<?php
namespace MindbodyAPI\structures;
class ClientIndex extends MBObject {
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var ClientIndexValue[] */
	public $Values;
}
?>
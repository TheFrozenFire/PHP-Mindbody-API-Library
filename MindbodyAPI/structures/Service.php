<?php
namespace MindbodyAPI\structures;
class Service extends Item {
	/** @var decimal */
	public $Price;
	/** @var decimal */
	public $OnlinePrice;
	/** @var decimal */
	public $TaxIncluded;
	/** @var decimal */
	public $TaxRate;
	/** @var double */
	public $ProductID;
	/** @var ActionCode */
	public $Action;
	/** @var string */
	public $ID;
	/** @var string */
	public $Name;
	/** @var int */
	public $Count;
}
?>
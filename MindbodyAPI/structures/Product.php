<?php
namespace MindbodyAPI\structures;
class Product extends Item {
	/** @var decimal */
	public $Price;
	/** @var decimal */
	public $TaxIncluded;
	/** @var decimal */
	public $TaxRate;
	/** @var ActionCode */
	public $Action;
	/** @var string */
	public $ID;
	/** @var int */
	public $GroupID;
	/** @var string */
	public $Name;
	/** @var decimal */
	public $OnlinePrice;
	/** @var string */
	public $ShortDesc;
	/** @var string */
	public $LongDesc;
	/** @var Color */
	public $Color;
	/** @var Size */
	public $Size;
}
?>
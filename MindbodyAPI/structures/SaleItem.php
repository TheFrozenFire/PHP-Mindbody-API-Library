<?php
namespace MindbodyAPI\structures;
class SaleItem extends MBObject {
	/** @var Sale */
	public $Sale;
	/** @var string */
	public $Description;
	/** @var decimal */
	public $Price;
	/** @var decimal */
	public $AmountPaid;
	/** @var decimal */
	public $Discount;
	/** @var decimal */
	public $Tax;
	/** @var boolean */
	public $Returned;
	/** @var int */
	public $Quantity;
}
?>
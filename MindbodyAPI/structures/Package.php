<?php
namespace MindbodyAPI\structures;
class Package extends Item {
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var double */
	public $DiscountPercentage;
	/** @var boolean */
	public $SellOnline;
	/** @var Service[] */
	public $Services;
	/** @var Product[] */
	public $Products;
}
?>
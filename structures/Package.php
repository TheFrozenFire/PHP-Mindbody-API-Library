<?php
namespace MindbodyAPI\structures;
class Package {
	public $ID; // int
	public $Name; // string
	public $DiscountPercentage; // double
	public $SellOnline; // boolean
	public $Services; // ArrayOfService
	public $Products; // ArrayOfProduct
	
}
?>
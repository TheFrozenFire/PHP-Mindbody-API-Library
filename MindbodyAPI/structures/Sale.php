<?php
namespace MindbodyAPI\structures;
class Sale {
	/** @var long */
	public $ID;
	/** @var dateTime */
	public $SaleTime;
	/** @var dateTime */
	public $SaleDate;
	/** @var dateTime */
	public $SaleDateTime;
	/** @var Location */
	public $Location;
	/** @var Payment[] */
	public $Payments;
}
?>
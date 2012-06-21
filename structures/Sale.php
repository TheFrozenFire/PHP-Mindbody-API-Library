<?php
namespace MindbodyAPI\structures;
class Sale {
	public $ID; // long
	public $SaleTime; // dateTime
	public $SaleDate; // dateTime
	public $SaleDateTime; // dateTime
	public $Location; // Location
	public $Payments; // ArrayOfPayment
	
}
?>
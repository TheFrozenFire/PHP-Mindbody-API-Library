<?php
namespace MindbodyAPI\structures;
class UpdateSaleDateRequest extends MBRequest {
	/** @var long */
	public $SaleID;
	/** @var dateTime */
	public $SaleDate;
}
?>
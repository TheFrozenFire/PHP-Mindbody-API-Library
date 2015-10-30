<?php
namespace MindbodyAPI\structures;
class GetClientPurchasesRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var int */
	public $SaleID;
}
?>
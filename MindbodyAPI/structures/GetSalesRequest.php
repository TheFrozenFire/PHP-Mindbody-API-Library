<?php
namespace MindbodyAPI\structures;
class GetSalesRequest extends MBRequest {
	/** @var long */
	public $SaleID;
	/** @var dateTime */
	public $StartSaleDateTime;
	/** @var dateTime */
	public $EndSaleDateTime;
	/** @var int */
	public $PaymentMethodID;
}
?>
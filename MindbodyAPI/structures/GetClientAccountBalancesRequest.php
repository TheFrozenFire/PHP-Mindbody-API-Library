<?php
namespace MindbodyAPI\structures;
class GetClientAccountBalancesRequest extends MBRequest {
	/** @var String[] */
	public $ClientIDs;
	/** @var dateTime */
	public $BalanceDate;
	/** @var long */
	public $ClassID;
}
?>
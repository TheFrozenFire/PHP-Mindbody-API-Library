<?php
namespace MindbodyAPI\structures;
class ClientContract extends MBObject {
	/** @var dateTime */
	public $AgreementDate;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var string */
	public $ContractName;
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
}
?>
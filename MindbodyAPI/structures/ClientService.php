<?php
namespace MindbodyAPI\structures;
class ClientService extends MBObject {
	/** @var boolean */
	public $Current;
	/** @var int */
	public $Count;
	/** @var int */
	public $Remaining;
	/** @var ActionCode */
	public $Action;
	/** @var long */
	public $ID;
	/** @var string */
	public $Name;
	/** @var dateTime */
	public $PaymentDate;
	/** @var dateTime */
	public $ActiveDate;
	/** @var dateTime */
	public $ExpirationDate;
	/** @var Program */
	public $Program;
}
?>
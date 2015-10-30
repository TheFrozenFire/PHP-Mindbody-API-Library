<?php
namespace MindbodyAPI\structures;
class AddClientsToClassesRequest extends MBRequest {
	/** @var String[] */
	public $ClientIDs;
	/** @var Int[] */
	public $ClassIDs;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $RequirePayment;
	/** @var boolean */
	public $Waitlist;
	/** @var boolean */
	public $SendEmail;
	/** @var int */
	public $WaitlistEntryID;
	/** @var int */
	public $ClientServiceID;
}
?>
<?php
namespace MindbodyAPI\structures;
class WaitlistEntry {
	/** @var int */
	public $ID;
	/** @var long */
	public $ClassID;
	/** @var dateTime */
	public $ClassDate;
	/** @var Client */
	public $Client;
	/** @var ClassSchedule */
	public $ClassSchedule;
	/** @var dateTime */
	public $EnrollmentDateForward;
	/** @var dateTime */
	public $RequestDateTime;
	/** @var boolean */
	public $Web;
	/** @var int */
	public $VisitRefNo;
}
?>
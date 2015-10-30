<?php
namespace MindbodyAPI\structures;
class AddClientsToEnrollmentsRequest extends MBRequest {
	/** @var String[] */
	public $ClientIDs;
	/** @var Int[] */
	public $ClassScheduleIDs;
	/** @var Int[] */
	public $CourseIDs;
	/** @var dateTime */
	public $EnrollDateForward;
	/** @var DateTime[] */
	public $EnrollOpen;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $SendEmail;
	/** @var boolean */
	public $Waitlist;
	/** @var int */
	public $WaitlistEntryID;
}
?>
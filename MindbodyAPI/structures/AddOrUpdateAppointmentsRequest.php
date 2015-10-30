<?php
namespace MindbodyAPI\structures;
class AddOrUpdateAppointmentsRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $SendEmail;
	/** @var boolean */
	public $ApplyPayment;
	/** @var Appointment[] */
	public $Appointments;
	/** @var boolean */
	public $IgnoreDefaultSessionLength;
}
?>
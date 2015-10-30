<?php
namespace MindbodyAPI\structures;
class AddClientFormulaNoteRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var long */
	public $AppointmentID;
	/** @var string */
	public $Note;
}
?>
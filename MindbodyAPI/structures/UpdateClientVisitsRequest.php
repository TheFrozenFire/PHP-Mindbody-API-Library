<?php
namespace MindbodyAPI\structures;
class UpdateClientVisitsRequest extends MBRequest {
	/** @var Visit[] */
	public $Visits;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $SendEmail;
}
?>
<?php
namespace MindbodyAPI\structures;
class AddOrUpdateClientsRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var Client[] */
	public $Clients;
	/** @var boolean */
	public $SendEmail;
}
?>
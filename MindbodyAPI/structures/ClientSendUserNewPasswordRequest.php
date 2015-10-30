<?php
namespace MindbodyAPI\structures;
class ClientSendUserNewPasswordRequest extends MBRequest {
	/** @var string */
	public $UserEmail;
	/** @var string */
	public $UserFirstName;
	/** @var string */
	public $UserLastName;
}
?>
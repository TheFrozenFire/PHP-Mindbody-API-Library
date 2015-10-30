<?php
namespace MindbodyAPI\structures;
class GetFinderUserRequest extends MBRequest {
	/** @var string */
	public $Email;
	/** @var string */
	public $Password;
	/** @var int */
	public $PartnerID;
}
?>
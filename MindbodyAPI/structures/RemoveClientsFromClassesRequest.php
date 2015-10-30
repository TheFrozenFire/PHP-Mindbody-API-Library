<?php
namespace MindbodyAPI\structures;
class RemoveClientsFromClassesRequest extends MBRequest {
	/** @var String[] */
	public $ClientIDs;
	/** @var Int[] */
	public $ClassIDs;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $SendEmail;
	/** @var boolean */
	public $LateCancel;
}
?>
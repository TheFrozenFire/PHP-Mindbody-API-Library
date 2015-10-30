<?php
namespace MindbodyAPI\structures;
class GetClientsRequest extends MBRequest {
	/** @var String[] */
	public $ClientIDs;
	/** @var string */
	public $SearchText;
	/** @var boolean */
	public $IsProspect;
}
?>
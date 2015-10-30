<?php
namespace MindbodyAPI\structures;
class GetSessionTypesRequest extends MBRequest {
	/** @var Int[] */
	public $ProgramIDs;
	/** @var boolean */
	public $OnlineOnly;
}
?>
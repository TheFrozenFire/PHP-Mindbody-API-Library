<?php
namespace MindbodyAPI\structures;
class AddOrUpdateContactLogsRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var ContactLog[] */
	public $ContactLogs;
}
?>
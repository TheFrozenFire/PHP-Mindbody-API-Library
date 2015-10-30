<?php
namespace MindbodyAPI\structures;
class MBResult {
	/** @var StatusCode */
	public $Status;
	/** @var int */
	public $ErrorCode;
	/** @var string */
	public $Message;
	/** @var XMLDetailLevel */
	public $XMLDetail;
	/** @var int */
	public $ResultCount;
	/** @var int */
	public $CurrentPageIndex;
	/** @var int */
	public $TotalPageCount;
}
?>
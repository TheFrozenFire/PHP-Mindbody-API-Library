<?php
namespace MindbodyAPI\structures;
class MBRequest {
	/** @var SourceCredentials */
	public $SourceCredentials;
	/** @var UserCredentials */
	public $UserCredentials;
	/** @var XMLDetailLevel */
	public $XMLDetail;
	/** @var int */
	public $PageSize;
	/** @var int */
	public $CurrentPageIndex;
	/** @var String[] */
	public $Fields;
}
?>
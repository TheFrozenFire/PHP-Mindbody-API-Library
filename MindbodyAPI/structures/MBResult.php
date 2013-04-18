<?php
namespace MindbodyAPI\structures;
class MBResult {
	public $Status; // StatusCode
	public $ErrorCode; // int
	public $Message; // string
	public $XMLDetail; // XMLDetailLevel
	public $ResultCount; // int
	public $CurrentPageIndex; // int
	public $TotalPageCount; // int
	
}
?>
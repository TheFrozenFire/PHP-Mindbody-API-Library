<?php
namespace MindbodyAPI\structures;
class GetPackagesRequest extends MBRequest {
	/** @var Int[] */
	public $PackageIDs;
	/** @var boolean */
	public $SellOnline;
}
?>
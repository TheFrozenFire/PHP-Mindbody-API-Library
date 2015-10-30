<?php
namespace MindbodyAPI\structures;
class GetClassesWithinRadiusRequest extends MBRequest {
	/** @var double */
	public $SearchLatitude;
	/** @var double */
	public $SearchLongitude;
	/** @var double */
	public $SearchRadius;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var int */
	public $SearchLocationID;
	/** @var int */
	public $SearchClassID;
	/** @var string */
	public $SearchText;
	/** @var string */
	public $SortOption;
	/** @var string */
	public $SearchDomain;
	/** @var string */
	public $IPAddress;
}
?>
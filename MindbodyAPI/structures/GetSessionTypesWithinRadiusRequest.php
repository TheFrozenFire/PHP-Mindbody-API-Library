<?php
namespace MindbodyAPI\structures;
class GetSessionTypesWithinRadiusRequest extends MBRequest {
	/** @var double */
	public $SearchLatitude;
	/** @var double */
	public $SearchLongitude;
	/** @var double */
	public $SearchRadius;
	/** @var int */
	public $SearchLocationID;
	/** @var int */
	public $SearchSessionTypeID;
	/** @var string */
	public $SearchText;
	/** @var string */
	public $SortOption;
	/** @var string */
	public $SearchDomain;
	/** @var string */
	public $IPAddress;
	/** @var int */
	public $SessionsPerLocation;
}
?>
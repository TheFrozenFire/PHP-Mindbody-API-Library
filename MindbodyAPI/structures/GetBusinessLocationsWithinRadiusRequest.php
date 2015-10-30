<?php
namespace MindbodyAPI\structures;
class GetBusinessLocationsWithinRadiusRequest extends MBRequest {
	/** @var double */
	public $SearchLatitude;
	/** @var double */
	public $SearchLongitude;
	/** @var double */
	public $SearchRadius;
	/** @var int */
	public $SearchLocationID;
	/** @var string */
	public $SearchText;
	/** @var string */
	public $SortOption;
	/** @var string */
	public $SearchDomain;
}
?>
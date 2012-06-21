<?php
namespace MindbodyAPI\structures;
class GetClassesWithinRadiusRequest {
	public $SearchLatitude; // double
	public $SearchLongitude; // double
	public $SearchRadius; // double
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $SearchLocationID; // int
	public $SearchClassID; // int
	public $SearchText; // string
	public $SortOption; // string
	public $SearchDomain; // string
	public $IPAddress; // string
	
}
?>
<?php
namespace MindbodyAPI\structures;
class GetSessionTypesWithinRadiusRequest {
	public $SearchLatitude; // double
	public $SearchLongitude; // double
	public $SearchRadius; // double
	public $SearchLocationID; // int
	public $SearchSessionTypeID; // int
	public $SearchText; // string
	public $SortOption; // string
	public $SearchDomain; // string
	public $IPAddress; // string
	public $SessionsPerLocation; // int
	
}
?>
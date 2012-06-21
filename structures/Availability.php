<?php
namespace MindbodyAPI\structures;
class Availability {
	public $ID; // int
	public $Staff; // Staff
	public $SessionType; // SessionType
	public $Programs; // ArrayOfProgram
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $BookableEndDateTime; // dateTime
	public $Location; // Location
	
}
?>
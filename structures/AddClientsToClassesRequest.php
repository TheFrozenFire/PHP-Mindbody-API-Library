<?php
namespace MindbodyAPI\structures;
class AddClientsToClassesRequest {
	public $ClientIDs; // ArrayOfString
	public $ClassIDs; // ArrayOfInt
	public $Test; // boolean
	public $RequirePayment; // boolean
	public $Waitlist; // boolean
	public $SendEmail; // boolean
	
}
?>
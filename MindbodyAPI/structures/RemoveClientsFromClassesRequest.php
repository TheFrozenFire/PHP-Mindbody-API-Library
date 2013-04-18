<?php
namespace MindbodyAPI\structures;
class RemoveClientsFromClassesRequest {
	public $ClientIDs; // ArrayOfString
	public $ClassIDs; // ArrayOfInt
	public $Test; // boolean
	public $SendEmail; // boolean
	public $LateCancel; // boolean
	
}
?>
<?php
namespace MindbodyAPI\structures;
class ContactLog {
	public $ID; // long
	public $CreatedBy; // Staff
	public $Client; // Client
	public $CreatedDateTime; // dateTime
	public $FollowupByDate; // dateTime
	public $ContactName; // string
	public $Text; // string
	public $AssignedTo; // Staff
	public $ContactMethod; // string
	public $IsSystemGenerated; // boolean
	public $Comments; // ArrayOfContactLogComment
	public $Types; // ArrayOfContactLogType
	public $Action; // ActionCode
	
}
?>
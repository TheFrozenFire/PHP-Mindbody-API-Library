<?php
namespace MindbodyAPI\structures;
class FinderUser {
	public $Email; // string
	public $Password; // string
	public $ChangePasswordNeeded; // boolean
	public $NewPassword; // string
	public $FirstName; // string
	public $LastName; // string
	public $Phone; // string
	public $Action; // ActionCode
	public $CreditCards; // ArrayOfClientCreditCard
	
}
?>
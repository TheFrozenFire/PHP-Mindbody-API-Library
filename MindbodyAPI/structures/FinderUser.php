<?php
namespace MindbodyAPI\structures;
class FinderUser extends MBObject {
	/** @var string */
	public $Email;
	/** @var string */
	public $Password;
	/** @var boolean */
	public $ChangePasswordNeeded;
	/** @var string */
	public $NewPassword;
	/** @var string */
	public $FirstName;
	/** @var string */
	public $LastName;
	/** @var string */
	public $Phone;
	/** @var ActionCode */
	public $Action;
	/** @var ClientCreditCard[] */
	public $CreditCards;
}
?>
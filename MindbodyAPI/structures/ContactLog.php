<?php
namespace MindbodyAPI\structures;
class ContactLog extends MBObject {
	/** @var long */
	public $ID;
	/** @var Staff */
	public $CreatedBy;
	/** @var Client */
	public $Client;
	/** @var dateTime */
	public $CreatedDateTime;
	/** @var dateTime */
	public $FollowupByDate;
	/** @var string */
	public $ContactName;
	/** @var string */
	public $Text;
	/** @var Staff */
	public $AssignedTo;
	/** @var string */
	public $ContactMethod;
	/** @var boolean */
	public $IsSystemGenerated;
	/** @var ContactLogComment[] */
	public $Comments;
	/** @var ContactLogType[] */
	public $Types;
	/** @var ActionCode */
	public $Action;
}
?>
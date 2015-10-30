<?php
namespace MindbodyAPI\structures;
class ContactLogComment extends MBObject {
	/** @var int */
	public $ID;
	/** @var string */
	public $Text;
	/** @var Staff */
	public $CreatedBy;
	/** @var dateTime */
	public $CreatedDateTime;
}
?>
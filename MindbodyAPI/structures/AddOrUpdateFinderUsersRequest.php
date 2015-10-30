<?php
namespace MindbodyAPI\structures;
class AddOrUpdateFinderUsersRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $NoClientEmail;
	/** @var int */
	public $PartnerID;
	/** @var FinderUser[] */
	public $FinderUsers;
}
?>
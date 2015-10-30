<?php
namespace MindbodyAPI\structures;
class GetClientServicesRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var int */
	public $ClassID;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var Int[] */
	public $SessionTypeIDs;
	/** @var Int[] */
	public $LocationIDs;
	/** @var int */
	public $VisitCount;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
	/** @var boolean */
	public $ShowActiveOnly;
}
?>
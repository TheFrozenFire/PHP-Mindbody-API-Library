<?php
namespace MindbodyAPI\structures;
class GetClassDescriptionsRequest extends MBRequest {
	/** @var Int[] */
	public $ClassDescriptionIDs;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var Long[] */
	public $StaffIDs;
	/** @var Int[] */
	public $LocationIDs;
	/** @var dateTime */
	public $StartClassDateTime;
	/** @var dateTime */
	public $EndClassDateTime;
}
?>
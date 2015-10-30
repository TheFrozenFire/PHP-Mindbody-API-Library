<?php
namespace MindbodyAPI\structures;
class AddOrUpdateAvailabilitiesRequest extends MBRequest {
	/** @var string */
	public $UpdateAction;
	/** @var boolean */
	public $Test;
	/** @var Int[] */
	public $AvailabilityIDs;
	/** @var int */
	public $LocationID;
	/** @var Long[] */
	public $StaffIDs;
	/** @var Int[] */
	public $ProgramIDs;
	/** @var dateTime */
	public $StartDateTime;
	/** @var dateTime */
	public $EndDateTime;
	/** @var DayOfWeek[] */
	public $DaysOfWeek;
	/** @var string */
	public $UnavailableDescription;
	/** @var boolean */
	public $IsUnavailable;
	/** @var AvailabilityDisplay */
	public $PublicDisplay;
	/** @var string */
	public $Execute;
}
?>
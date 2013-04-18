<?php
namespace MindbodyAPI\structures;
class AddOrUpdateAvailabilitiesRequest {
	public $UpdateAction; // string
	public $Test; // boolean
	public $AvailabilityIDs; // ArrayOfInt
	public $LocationID; // int
	public $StaffIDs; // ArrayOfLong
	public $ProgramIDs; // ArrayOfInt
	public $StartDateTime; // dateTime
	public $EndDateTime; // dateTime
	public $DaysOfWeek; // ArrayOfDayOfWeek
	public $UnavailableDescription; // string
	public $IsUnavailable; // boolean
	public $PublicDisplay; // AvailabilityDisplay
	
}
?>
<?php
namespace MindbodyAPI\structures;
class Client {
	public $NewID; // string
	public $AccountBalance; // double
	public $ClientIndexes; // ArrayOfClientIndex
	public $Username; // string
	public $Password; // string
	public $Notes; // string
	public $ClientCreditCard; // ClientCreditCard
	public $LastFormulaNotes; // string
	public $AppointmentGenderPreference; // string
	public $Gender; // string
	public $IsCompany; // boolean
	public $Inactive; // boolean
	public $ClientRelationships; // ArrayOfClientRelationship
	public $Reps; // ArrayOfRep
	public $CustomClientFields; // ArrayOfCustomClientField
	public $LiabilityRelease; // boolean
	public $EmergencyContactInfoName; // string
	public $EmergencyContactInfoRelationship; // string
	public $EmergencyContactInfoPhone; // string
	public $EmergencyContactInfoEmail; // string
	public $Action; // ActionCode
	public $ID; // string
	public $FirstName; // string
	public $MiddleName; // string
	public $LastName; // string
	public $Email; // string
	public $EmailOptIn; // boolean
	public $AddressLine1; // string
	public $AddressLine2; // string
	public $City; // string
	public $State; // string
	public $PostalCode; // string
	public $Country; // string
	public $MobilePhone; // string
	public $HomePhone; // string
	public $WorkPhone; // string
	public $WorkExtension; // string
	public $BirthDate; // dateTime
	public $FirstAppointmentDate; // dateTime
	public $ReferredBy; // string
	public $HomeLocation; // Location
	public $YellowAlert; // string
	public $RedAlert; // string
	public $PhotoURL; // string
	public $IsProspect; // boolean
	
}
?>
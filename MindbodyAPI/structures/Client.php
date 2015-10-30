<?php
namespace MindbodyAPI\structures;
class Client extends MBObject {
	/** @var string */
	public $NewID;
	/** @var double */
	public $AccountBalance;
	/** @var ClientIndex[] */
	public $ClientIndexes;
	/** @var string */
	public $Username;
	/** @var string */
	public $Password;
	/** @var string */
	public $Notes;
	/** @var int */
	public $MobileProvider;
	/** @var ClientCreditCard */
	public $ClientCreditCard;
	/** @var string */
	public $LastFormulaNotes;
	/** @var string */
	public $AppointmentGenderPreference;
	/** @var string */
	public $Gender;
	/** @var boolean */
	public $IsCompany;
	/** @var boolean */
	public $Inactive;
	/** @var ClientRelationship[] */
	public $ClientRelationships;
	/** @var Rep[] */
	public $Reps;
	/** @var CustomClientField[] */
	public $CustomClientFields;
	/** @var boolean */
	public $LiabilityRelease;
	/** @var string */
	public $EmergencyContactInfoName;
	/** @var string */
	public $EmergencyContactInfoRelationship;
	/** @var string */
	public $EmergencyContactInfoPhone;
	/** @var string */
	public $EmergencyContactInfoEmail;
	/** @var boolean */
	public $PromotionalEmailOptIn;
	/** @var ActionCode */
	public $Action;
	/** @var string */
	public $ID;
	/** @var string */
	public $FirstName;
	/** @var string */
	public $MiddleName;
	/** @var string */
	public $LastName;
	/** @var string */
	public $Email;
	/** @var boolean */
	public $EmailOptIn;
	/** @var string */
	public $AddressLine1;
	/** @var string */
	public $AddressLine2;
	/** @var string */
	public $City;
	/** @var string */
	public $State;
	/** @var string */
	public $PostalCode;
	/** @var string */
	public $Country;
	/** @var string */
	public $MobilePhone;
	/** @var string */
	public $HomePhone;
	/** @var string */
	public $WorkPhone;
	/** @var string */
	public $WorkExtension;
	/** @var dateTime */
	public $BirthDate;
	/** @var dateTime */
	public $FirstAppointmentDate;
	/** @var string */
	public $ReferredBy;
	/** @var Location */
	public $HomeLocation;
	/** @var string */
	public $YellowAlert;
	/** @var string */
	public $RedAlert;
	/** @var string */
	public $PhotoURL;
	/** @var boolean */
	public $IsProspect;
	/** @var string */
	public $Status;
	/** @var short */
	public $ContactMethod;
}
?>
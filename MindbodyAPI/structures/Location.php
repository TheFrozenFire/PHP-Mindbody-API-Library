<?php
namespace MindbodyAPI\structures;
class Location extends MBObject {
	/** @var int */
	public $BusinessID;
	/** @var int */
	public $SiteID;
	/** @var string */
	public $BusinessDescription;
	/** @var String[] */
	public $AdditionalImageURLs;
	/** @var int */
	public $FacilitySquareFeet;
	/** @var int */
	public $TreatmentRooms;
	/** @var boolean */
	public $ProSpaFinderSite;
	/** @var boolean */
	public $HasClasses;
	/** @var string */
	public $PhoneExtension;
	/** @var ActionCode */
	public $Action;
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $Address;
	/** @var string */
	public $Address2;
	/** @var float */
	public $Tax1;
	/** @var float */
	public $Tax2;
	/** @var float */
	public $Tax3;
	/** @var float */
	public $Tax4;
	/** @var float */
	public $Tax5;
	/** @var string */
	public $Phone;
	/** @var string */
	public $City;
	/** @var string */
	public $StateProvCode;
	/** @var string */
	public $PostalCode;
	/** @var double */
	public $Latitude;
	/** @var double */
	public $Longitude;
	/** @var double */
	public $DistanceInMiles;
	/** @var string */
	public $ImageURL;
	/** @var string */
	public $Description;
	/** @var boolean */
	public $HasSite;
	/** @var boolean */
	public $CanBook;
}
?>
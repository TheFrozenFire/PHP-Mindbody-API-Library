<?php
namespace MindbodyAPI\structures;
class FinderCheckoutShoppingCartRequest extends MBRequest {
	/** @var boolean */
	public $Test;
	/** @var boolean */
	public $NoClientEmail;
	/** @var int */
	public $MBFClassID;
	/** @var int */
	public $MBFSessionTypeID;
	/** @var dateTime */
	public $SessionDateTime;
	/** @var long */
	public $StaffID;
	/** @var int */
	public $PartnerID;
	/** @var double */
	public $SearchLatitude;
	/** @var double */
	public $SearchLongitude;
	/** @var boolean */
	public $SaveCCInfo;
	/** @var SpaFinderWellnessCard */
	public $SpaFinderWellnessCard;
	/** @var PaymentInfo */
	public $PaymentInfo;
}
?>
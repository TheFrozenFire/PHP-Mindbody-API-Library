<?php
namespace MindbodyAPI\structures;
class Site {
	/** @var int */
	public $ID;
	/** @var string */
	public $Name;
	/** @var string */
	public $Description;
	/** @var string */
	public $LogoURL;
	/** @var string */
	public $PageColor1;
	/** @var string */
	public $PageColor2;
	/** @var string */
	public $PageColor3;
	/** @var string */
	public $PageColor4;
	/** @var boolean */
	public $AcceptsVisa;
	/** @var boolean */
	public $AcceptsDiscover;
	/** @var boolean */
	public $AcceptsMasterCard;
	/** @var boolean */
	public $AcceptsAmericanExpress;
	/** @var string */
	public $ContactEmail;
	/** @var boolean */
	public $ESA;
	/** @var boolean */
	public $TotalWOD;
	/** @var boolean */
	public $TaxInclusivePrices;
	/** @var boolean */
	public $SMSPackageEnabled;
	/** @var boolean */
	public $AllowsDashboardAccess;
	/** @var string */
	public $PricingLevel;
}
?>
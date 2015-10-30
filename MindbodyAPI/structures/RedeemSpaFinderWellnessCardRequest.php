<?php
namespace MindbodyAPI\structures;
class RedeemSpaFinderWellnessCardRequest extends MBRequest {
	/** @var string */
	public $CardID;
	/** @var double */
	public $FaceAmount;
	/** @var string */
	public $Currency;
	/** @var string */
	public $ClientID;
	/** @var int */
	public $LocationID;
}
?>
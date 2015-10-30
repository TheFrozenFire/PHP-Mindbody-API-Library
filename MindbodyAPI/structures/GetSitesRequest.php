<?php
namespace MindbodyAPI\structures;
class GetSitesRequest extends MBRequest {
	/** @var string */
	public $SearchText;
	/** @var int */
	public $RelatedSiteID;
	/** @var boolean */
	public $ShowOnlyTotalWOD;
}
?>
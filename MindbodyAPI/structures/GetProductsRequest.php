<?php
namespace MindbodyAPI\structures;
class GetProductsRequest extends MBRequest {
	/** @var String[] */
	public $ProductIDs;
	/** @var string */
	public $SearchText;
	/** @var string */
	public $SearchDomain;
	/** @var Int[] */
	public $CategoryIDs;
	/** @var Int[] */
	public $SubCategoryIDs;
	/** @var boolean */
	public $SellOnline;
	/** @var int */
	public $LocationID;
}
?>
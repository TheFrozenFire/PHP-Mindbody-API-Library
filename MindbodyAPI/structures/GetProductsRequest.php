<?php
namespace MindbodyAPI\structures;
class GetProductsRequest {
	public $ProductIDs; // ArrayOfString
	public $SearchText; // string
	public $SearchDomain; // string
	public $CategoryIDs; // ArrayOfInt
	public $SubCategoryIDs; // ArrayOfInt
	public $SellOnline; // boolean
	public $LocationID; // int
	
}
?>
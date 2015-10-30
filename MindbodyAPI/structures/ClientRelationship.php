<?php
namespace MindbodyAPI\structures;
class ClientRelationship extends MBObject {
	/** @var Client */
	public $RelatedClient;
	/** @var Relationship */
	public $Relationship;
	/** @var string */
	public $RelationshipName;
}
?>
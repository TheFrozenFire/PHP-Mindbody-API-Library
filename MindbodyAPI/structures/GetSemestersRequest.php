<?php
namespace MindbodyAPI\structures;
class GetSemestersRequest extends MBRequest {
	/** @var Int[] */
	public $SemesterIDs;
	/** @var dateTime */
	public $StartDate;
	/** @var dateTime */
	public $EndDate;
}
?>
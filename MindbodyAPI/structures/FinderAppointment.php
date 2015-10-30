<?php
namespace MindbodyAPI\structures;
class FinderAppointment {
	/** @var Site */
	public $Site;
	/** @var Organization */
	public $Organization;
	/** @var Location */
	public $Location;
	/** @var long */
	public $MBFSessionTypeID;
	/** @var string */
	public $GUID;
	/** @var FinderSessionType */
	public $SessionType;
	/** @var Program */
	public $Program;
	/** @var double */
	public $Price;
	/** @var double */
	public $TaxRate;
	/** @var double */
	public $TaxAmount;
	/** @var boolean */
	public $Featured;
}
?>
<?php
namespace MindbodyAPI\structures;
class UploadClientDocumentRequest extends MBRequest {
	/** @var string */
	public $ClientID;
	/** @var string */
	public $FileName;
	/** @var base64Binary */
	public $Bytes;
}
?>
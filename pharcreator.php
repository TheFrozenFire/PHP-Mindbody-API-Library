<?php
$mindbody = new Phar("mboapi.phar");
$mindbody->startBuffering();
$mindbody->buildFromDirectory(dirname(__FILE__));
$mindbody->delete("pharcreator.php");
$mindbody->delete("librarygenerator.php");
$mindbody->addFromString("loadServices.php",
"<?php
	include_once(\"services/Appointment_Service.php\");
	include_once(\"services/Class_Service.php\");
	include_once(\"services/Client_Service.php\");
	include_once(\"services/Sale_Service.php\");
	include_once(\"services/Site_Service.php\");
	include_once(\"services/Staff_Service.php\");
?>");
$mindbody->setStub($mindbody->createDefaultStub("loadServices.php"));
$mindbody->stopBuffering();
?>

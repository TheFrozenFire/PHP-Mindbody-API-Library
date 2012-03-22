<?php
$mindbody = new Phar("mboapi.phar");
$mindbody->startBuffering();

$files = new AppendIterator();
$files->append(new DirectoryIterator("services"));
$files->append(new DirectoryIterator("structures"));

$mindbody->buildFromIterator($files, dirname(__FILE__));
$mindbody->addFile("LICENSE");
$mindbody->addFile("README.markdown");
$mindbody->addFromString("loadServices.php",
"<?php
	include_once(\"services/Appointment_Service.php\");
	include_once(\"services/Class_Service.php\");
	include_once(\"services/Client_Service.php\");
	include_once(\"services/Sale_Service.php\");
	include_once(\"services/Site_Service.php\");
	include_once(\"services/Staff_Service.php\");
	include_once(\"services/Data_Service.php\");
?>");
$mindbody->setStub($mindbody->createDefaultStub("loadServices.php"));
$mindbody->stopBuffering();

foreach(new RecursiveIteratorIterator($mindbody) as $file) {
	echo $file->getFileName()."\n";
}
?>

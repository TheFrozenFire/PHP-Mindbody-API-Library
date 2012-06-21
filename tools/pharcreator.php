<?php
chdir(__DIR__."/..");
$mindbody = new Phar("mboapi.phar");
$mindbody->startBuffering();

$files = new AppendIterator();
$files->append(new DirectoryIterator("services"));
$files->append(new DirectoryIterator("structures"));

$mindbody->buildFromIterator($files, dirname(__FILE__));
$mindbody->addFile("LICENSE");
$mindbody->addFile("README.markdown");
$mindbody->addFile("Mindbody.php");
$mindbody->addFile("MindbodyClient.php");
$mindbody->setStub($mindbody->createDefaultStub("Mindbody.php"));
$mindbody->stopBuffering();

foreach(new RecursiveIteratorIterator($mindbody) as $file) {
	echo $file->getFileName()."\n";
}
?>

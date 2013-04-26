<?php
require 'vendor/autoload.php';

$service = MindbodyAPI\MindbodyClient::service("ClassService");
$credentials = $service::credentials( // Put your source credentials here.
	"SourceName",
	"Key",
	array(
		"-99" // API Sandbox
	)
);

$request = $service::request("GetClasses", $credentials);
$response = $service->GetClasses($request);
if(!isset($response->Status) || $response->Status != "Success")
	die("Oh foo. It didn't work.");
?>
<html>
	<head>
		<title>List of Classes</title>
	</head>
	<body>
		<h1>Today's Classes</h1>
		<ul>
			<?php foreach($response->Classes->Class as $class): ?>
			<li>
				<p>
					<?php echo $class->ClassDescription->Name; ?> (<?php echo $class->Location->Name; ?>)
				</p>
				<p>
					<?php echo $class->ClassDescription->Description; ?>
				</p>
			</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>

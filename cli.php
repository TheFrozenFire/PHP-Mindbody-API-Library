<?php
if(!defined("STDIN")) define("STDIN", fopen("php://stdin", "r"));
$options = getopt("vs:p:i:");

if(empty($options["s"])) do {
	echo "Sourcename: ";
	$options["s"] = trim(fgets(STDIN));
} while(empty($options["s"]));

if(empty($options["p"])) do {
	echo "Password: ";
	$options["p"] = trim(fgets(STDIN));
} while(empty($options["p"]));

if(empty($options["i"])) do {
	echo "Studio ID: ";
	$options["i"] = trim(fgets(STDIN));
} while(empty($options["i"]));

mainMenu();

function mainMenu() {
	$directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
?>
-- Mindbody Online API Command-Line Interface --

	1) Appointments Service
	2) Class Service
	3) Client Service
	4) Region Service
	5) Sales Service
	6) Select Service
	7) Staff Service

	0) Exit
<?php
	do {
		echo "Choice: ";
		$result = trim(fgets(STDIN));
	} while(!is_numeric($result));
	
	switch($result) {
		case 0:
			exit;
		case 1:
			include_once("{$directory}services/Appointments_x0020_Service.php");
			service(new Appointments_x0020_Service(), "Appointments Service");
			break;
		case 2:
			include_once("{$directory}services/Class_x0020_Service.php");
			service(new Class_x0020_Service(), "Class Service");
			break;
		case 3:
			include_once("{$directory}services/Client_x0020_Service.php");
			service(new Client_x0020_Service(), "Client Service");
			break;
		case 4:
			include_once("{$directory}services/Region_x0020_Service.php");
			service(new Region_x0020_Service(), "Region Service");
			break;
		case 5:
			include_once("{$directory}services/Sales_x0020_Service.php");
			service(new Sales_x0020_Service(), "Sales Service");
			break;
		case 6:
			include_once("{$directory}services/Select_x0020_Service.php");
			service(new Select_x0020_Service(), "Select Service");
			break;
		case 7:
			include_once("{$directory}services/Staff_x0020_Service.php");
			service(new Staff_x0020_Service(), "Staff Service");
			break;
	}
	mainMenu();
}

function service($service, $servicename) {
	echo PHP_EOL.PHP_EOL."-- {$servicename} --".PHP_EOL.PHP_EOL;
	
	$functions = array();
	foreach(array_unique($service->__getFunctions()) as $function) {
		$curFunction =& $functions[];
		$tmp = explode(" ", $function, 2);
		$curFunction["returnType"] = $tmp[0];
		$tmp = explode("(", $tmp[1]);
		$curFunction["functionName"] = $tmp[0];
		$tmp = explode(" ", $tmp[1]);
		$curFunction["parameterType"] = $tmp[0];
	}
	
	foreach($functions as $index=>$function) {
?>
	<?php echo $index+1; ?>) <?php echo $function["functionName"]; ?>

<?php
	}
?>

	0) Main Menu
<?php
	
	do {
		echo "Choice: ";
		$result = trim(fgets(STDIN));
	} while(!is_numeric($result) || (!isset($functions[$result-1]) && $result !== "0"));
	
	if($result === "0") return;
	
	serviceCall($service, $functions[$result-1]["returnType"], $functions[$result-1]["functionName"], $functions[$result-1]["parameterType"]);
	service($service, $servicename);
}

function serviceCall($service, $returnType, $functionName, $parameterType) {
	global $options;
	echo "-- {$functionName} --".PHP_EOL.PHP_EOL;
	
	$parameter = new $parameterType();
	$properties = get_class_vars($parameterType);
	if(property_exists($parameter, "Sourcename")) {
		$parameter->Sourcename = $options["s"];
		unset($properties["Sourcename"]);
	}
	if(property_exists($parameter, "Password")) {
		$parameter->Password = $options["p"];
		unset($properties["Password"]);
	}
	if(property_exists($parameter, "StudioID")) {
		$paramter->StudioID = $options["i"];
		unset($properties["StudioID"]);
	}
	
	foreach($properties as $propertyName=>$value) do {
		echo "\t{$propertyName}: ";
		$parameter->$propertyName = trim(fgets(STDIN));
	} while(empty($result) && is_string($result) && $result !== "0");
	
	$callResult = $service->$functionName($parameter);
	
	var_dump($callResult);
}
?>

<?php
chdir(__DIR__."/..");
function is_includeable($filename, $returnpaths = false) {
	$include_paths = explode(PATH_SEPARATOR, ini_get('include_path'));

	foreach ($include_paths as $path) {
		$include = $path.DIRECTORY_SEPARATOR.$filename;
		if (is_file($include) && is_readable($include)) {
			if ($returnpaths == true) {
				$includable_paths[] = $path;
			} else {
				return true;
			}
		}
	}

	return (isset($includeable_paths) && $returnpaths == true) ? $includeable_paths : false;
}

function split_file($file, $dest) {
	$tokens = token_get_all(file_get_contents($file));
	$buffer = false;

	while ($token = next($tokens)) {
		if ($token[0] == T_CLASS) {
		$buffer = true;
		$name = null;
		$code = '';
		$braces = 1;
		do {
			$code .= is_string($token) ? $token : $token[1];
			if (is_array($token) 
				&& $token[0] == T_STRING 
				&& empty($name)) {
				$name = $token[1];
			}
		} while (!(is_string($token) && $token == '{') && $token = next($tokens));
		} elseif ($buffer) {
		if (is_string($token)) {
			$code .= $token;
			if ($token == '{') {
				$braces++;
			} elseif ($token == '}') {
				$braces--;
				if ($braces == 0) {
					$buffer = false;
					$file = $dest . '/' . $name . '.php';
					$code = '<?php' . PHP_EOL . $code . PHP_EOL . '?>';
					file_put_contents($file, $code); 
				}
			}
		} else {
			$code .= $token[1];
		}
		}
	}
}

if(!class_exists("SoapClient")) die("SOAP is required for this script to function.");
if(!class_exists("DOMDocument")) die("DOM is required for this script to function.");
if(!class_exists("ReflectionClass")) die("Reflection is required for this script to function.");
if(!is_includeable("wsdl2php.php")) die("wsdl2php is required for this script to function.");

if(!ini_get('user_agent')) die("This script requires that your user_agent ini setting be configured. This is due to Mindbody blocking all requests from clients not providing a user_agent header.\nAn example would be: 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19'\n");

$services = array(
	"https://api.mindbodyonline.com/0_5/AppointmentService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/ClassService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/ClientService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/SiteService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/SaleService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/StaffService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/DataService.asmx?WSDL",
	"https://api.mindbodyonline.com/0_5/FinderService.asmx?WSDL",
);

if(!is_dir("wsdl2phpoutput")) {
	mkdir("wsdl2phpoutput");
}
chdir("wsdl2phpoutput");

foreach($services as $service) {
	$result = shell_exec("wsdl2php {$service}");
	if(!strpos($result, "Writing")) die("Failed to fetch {$service}.");
}

chdir("..");

if(!is_dir("splitteroutput")) mkdir("splitteroutput");

// Fix for MBO API 0.5 naming clusterfsck
if(file_exists("wsdl2phpoutput/Class_x0020_Service.php")) {
	$file = file_get_contents("wsdl2phpoutput/Class_x0020_Service.php");
	if(strpos($file, "class Class {")) {
		$file = str_replace(
			array(
				"class Class {"
			),
			array(
				"class MindbodyClass {"
			),
			$file
		);
		file_put_contents("wsdl2phpoutput/Class_x0020_Service.php", $file);
	}
}

foreach(glob("wsdl2phpoutput/*.php") as $serviceFile) split_file($serviceFile, "splitteroutput");

if(!is_dir("splitteroutput/structures")) mkdir("splitteroutput/structures");
if(!is_dir("splitteroutput/services")) mkdir("splitteroutput/services");

include_once("MindbodyAPI/MindbodyClient.php");

foreach(glob("splitteroutput/*_x0020_*.php") as $serviceFile) {
	$oldServiceName = basename($serviceFile, ".php");
	$serviceName = str_replace("_x0020_", "", $oldServiceName);
	$file = file_get_contents($serviceFile);
	$constructorcode = <<<EOD
if(!ini_get('user_agent')) ini_set('user_agent', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.19) Gecko/20110707 Firefox/3.6.19');
	parent::__construct(\$wsdl, \$options);
EOD;
	$file = str_replace("<?php\nclass", "<?php\nnamespace MindbodyAPI\services;\nclass", $file);
	$file = str_replace($oldServiceName, $serviceName, $file);
	$file = str_replace("class {$serviceName} extends SoapClient", "class {$serviceName} extends \MindbodyAPI\MindbodyClient", $file);
	$file = str_replace("public function {$serviceName}(", "public function __construct(", $file);
	$file = str_replace("parent::__construct(\$wsdl, \$options);", $constructorcode, $file);
	$file = str_replace("private static \$classmap = array(", "public static \$classmap = array(", $file);
	
	eval(trim($file, "<?php")); // Oh yes, I did that. Sue me. :P
	$reflection = new ReflectionClass('MindbodyAPI\\services\\'.$serviceName);
	$classmapProperty = $reflection->getProperty('classmap');
	$classmap = $classmapProperty->getValue();
	
	$mapReplacements = array(0 => array(), 1 => array());
	
	foreach($classmap as $key => $value) {
		$mapReplacements[0][] = "'{$key}' => '{$value}'";
		$mapReplacements[0][] = "'Class' => 'Class',";
		$mapReplacements[0][] = "public function {$value}({$value}";
		$mapReplacements[1][] = "'{$key}' => 'MindbodyAPI\structures\\{$value}'";
		$mapReplacements[1][] = "'Class' => 'MindbodyAPI\structures\\MindbodyClass',";
		$mapReplacements[1][] = "public function {$value}(structures\\{$value}";
	}
	
	$file = str_replace($mapReplacements[0], $mapReplacements[1], $file);
	
	file_put_contents($serviceFile, $file);
	rename($serviceFile, "splitteroutput/services/{$serviceName}.php");
}
foreach(glob("splitteroutput/*.php") as $structureFile) {
	$file = file_get_contents($structureFile);
	$file = str_replace("<?php\nclass", "<?php\nnamespace MindbodyAPI\\structures;\nclass", $file);
	file_put_contents($structureFile, $file);
	rename($structureFile, "splitteroutput/structures/".basename($structureFile));
}

include_once("PHP/Beautifier.php");
if(class_exists('PHP_Beautifier')) {	
	$beautifier = new PHP_Beautifier();
	$beautifier->addFilter('ArrayNested');
	$beautifier->setIndentChar("\t");
	$beautifier->setIndentNumber(1);
	
	foreach(glob("splitteroutput/*/*.php") as $file) {
		$beautifier->setInputFile($file);
		$beautifier->setOutputFile($file);
		$beautifier->process();
		$beautifier->save();
	}
}

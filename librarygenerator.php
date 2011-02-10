<?php
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
if(!is_includeable("wsdl2php.php")) die("wsdl2php is required for this script to function.");

$services = array(
	"http://clients.mindbodyonline.com/api/0_5/AppointmentService.asmx?WSDL",
	"http://clients.mindbodyonline.com/api/0_5/ClassService.asmx?WSDL",
	"http://clients.mindbodyonline.com/api/0_5/ClientService.asmx?WSDL",
	"http://clients.mindbodyonline.com/api/0_5/SiteService.asmx?WSDL",
	"http://clients.mindbodyonline.com/api/0_5/SaleService.asmx?WSDL",
	"http://clients.mindbodyonline.com/api/0_5/StaffService.asmx?WSDL"
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
				"class Class {",
				"'Class' => 'Class',"
			),
			array(
				"class Mindbody_Class {",
				"'Class' => 'Mindbody_Class',"
			),
			$file
		);
		file_put_contents("wsdl2phpoutput/Class_x0020_Service.php", $file);
	}
}

foreach(glob("wsdl2phpoutput/*.php") as $serviceFile) split_file($serviceFile, "splitteroutput");

if(!is_dir("splitteroutput/structures")) mkdir("splitteroutput/structures");
if(!is_dir("splitteroutput/services")) mkdir("splitteroutput/services");

foreach(glob("splitteroutput/*_x0020_*.php") as $serviceFile) {
	$file = file_get_contents($serviceFile);
	$file = str_replace("parent::__construct(\$wsdl, \$options);", "\$directory = dirname(__FILE__).DIRECTORY_SEPARATOR;\n	foreach(\$options['classmap'] as \$key => \$value) if(file_exists(\"{\$directory}../structures/{\$value}.php\")) include_once(\"{\$directory}../structures/{\$value}.php\");\n    parent::__construct(\$wsdl, \$options);", $file);
	file_put_contents($serviceFile, $file);
	rename($serviceFile, "splitteroutput/services/".basename($serviceFile));
}
foreach(glob("splitteroutput/*.php") as $structureFile) rename($structureFile, "splitteroutput/structures/".basename($structureFile));
?>

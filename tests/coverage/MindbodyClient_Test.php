<?php
class MindbodyClient_Test extends PHPUnit_Framework_TestCase {
	/**
	 * Test getting each service
	 *
	 * @dataProvider providerServiceNames
	 */
	public function testServiceGetter($serviceName) {
		$service = \MindbodyAPI\MindbodyClient::service($serviceName);
		$this->assertInstanceOf("\\MindbodyAPI\\services\\{$serviceName}", $service);
	}
	
	/**
	 * Test that each service's types are valid
	 *
	 * @dataProvider providerServiceNames
	 */
	public function testServiceTypes($serviceName) {
		$service = \MindbodyAPI\MindbodyClient::service($serviceName);
		
		$this->assertTrue(is_array($service::$classmap), "Classmap is not an array");
		
		foreach($service::$classmap as $type => $class) {
			$this->assertTrue(class_exists($class), "{$class} type does not exist");
			$typeInstance = $service::structure($type, get_class_vars($class));
			$this->assertInstanceOf($class, $typeInstance);
		}
	}
	
	/**
	 * Test that each service's request function types have corresponding requests and results
	 *
	 * @dataProvider providerServiceNames
	 */
	public function testServiceFunctions($serviceName) {
		$service = \MindbodyAPI\MindbodyClient::service($serviceName);
		$reflector = new ReflectionClass($service);
				
		$functions = $service->__getFunctions();
		foreach($functions as $functionSpec) {
			preg_match('/(\w+) (\w+)/', $functionSpec, $functionSpecParsed);
	
			$functionName = "\\MindbodyAPI\\structures\\{$functionSpecParsed[2]}";
			
			$this->assertTrue(class_exists($functionName), "{$serviceName} {$functionName} does not exist");
			$functionInstance = new $functionName;
			$this->assertInstanceOf($functionName, $functionInstance);
			
			/*
			TODO: Test request type. Cannot do so reliably right now, because we don't typehint it
			$this->assertTrue(class_exists($functionRequest), "{$serviceName} {$functionRequest} does not exist");
			$requestInstance = new $functionRequest;
			$this->assertInstanceOf($functionRequest, $requestInstance);
			*/
			
			$functionResponse = "\\MindbodyAPI\\structures\\{$functionSpecParsed[1]}";
			
			$this->assertTrue(class_exists($functionResponse), "{$serviceName} {$functionResponse} does not exist");
			$responseInstance = new $functionResponse;
			$this->assertInstanceOf($functionResponse, $responseInstance);
		}
	}
	
	public function providerServiceNames() {
		return array(
			array("AppointmentService"),
			array("ClassService"),
			array("ClientService"),
			array("DataService"),
			array("FinderService"),
			array("SaleService"),
			array("SiteService"),
			array("StaffService")
		);
	}
}

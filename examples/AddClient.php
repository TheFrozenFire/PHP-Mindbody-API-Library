<?php
require 'vendor/autoload.php';

$service = MindbodyAPI\MindbodyClient::service("ClientService");
$credentials = $service::credentials( // Put your source credentials here.
	"SourceName",
	"Key",
	array(
		"-99" // API Sandbox
	)
);
$userCredentials = $service::userCredentials( // API sandbox test credentials
	"Siteowner",
	"apitest1234",
	array(
		"-99"
	)
);

// By including staff credentials, we enter Business Mode, which has less restrictive required fields
$request = $service::request("AddOrUpdateClients", $credentials, $userCredentials);

$client = $service::structure("Client", array( // Creates a Client structure, and populates it
	"FirstName" => "John",
	"LastName" => "Doe",
	"HomePhone" => "555-555-5555",
	"BirthDate" => date("c"),
	"AddressLine1" => "123 Main St",
	"City" => "Beverley Hills",
	"State" => "CA",
	"PostalCode" => "90210",
	"Email" => "test@example.com",
	"EmailOptIn" => true,
	"EmergencyContactInfoName" => "Jane Doe",
	"EmergencyContactInfoPhone" => "555-555-5555"
));

$request->Request->UpdateAction = "AddNew";
$request->Request->Clients = array(
	$client
);

$response = $service->AddOrUpdateClients($request);
if(!isset($response->Status) || $response->Status != "Success")
	die("Oh foo. It didn't work.");

// For single-client requests, it's a single item. For multiple, it's an array.
var_dump($response->Clients->Client);

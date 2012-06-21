PHP Mindbody API Library
========================

This library provides a set of PHP classes which allow one to interface with
the [Mindbody SOAP API](http://www.mindbodyonline.com/api) in a fairly simple
way.

The API's main documentation is available [here](http://clients.mindbodyonline.com/api/Doc.aspx).

Preparation
-----------

Before you can make use of this library, you will need to get a set of
[API credentials from Mindbody](http://getsatisfaction.com/mindbody/topics/getting_started_with_the_api).

As well, you will need to know your Site ID.

This library will of course require the SOAP extension be installed and
enabled in your PHP installation, and allow_url_fopen must be enabled.

Additionally, if you are running the librarygenerator.php script, you must
have the DOM extension enabled, and you must install
[WSDL2PHP](http://www.urdalen.no/wsdl2php/) on your system.

Basic Usage
-----------

Here is a very basic usage example for the Site Service class, which should
print out a full informational listing on locations associated with your
specified site.

```php
<?php
require("services/Site_Service.php");

$service = new Site_Service();

$parameters = new GetLocations();
$parameters->Request = new GetLocationsRequest();

$parameters->Request->SourceCredentials = new SourceCredentials();
$parameters->Request->SourceCredentials->SourceName = "YourSourceName";
$parameters->Request->SourceCredentials->Password = "YourPassword";
$parameters->Request->SourceCredentials->SiteIDs = array(
	1234 // Your Site ID(s)
);

$locations = $service->GetLocations($parameters);

var_dump($locations);
```
    ?>

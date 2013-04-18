PHP Mindbody API Library
========================

This library provides a set of PHP classes which allow one to interface with
the [Mindbody SOAP API](http://www.mindbodyonline.com/api) in a fairly simple
way.

The API's main documentation is available through the [API portal](http://api.mindbodyonline.com/).

Preparation
-----------

Before you can make use of this library, you will need to get a set of
[API credentials from Mindbody](https://support.mindbodyonline.com/entries/21301433-how-to-access-client-data-using-the-mindbody-api).

As well, you will need to know your Site ID.  
Your API credentials must be authorized for your Site ID using the SiteService::GetActivationCode method.

The API sandbox information can be found via the [API FAQ](https://support.mindbodyonline.com/entries/22021573-api-faq#Howcanitest).

This library will of course require the SOAP extension be installed and
enabled in your PHP installation, and allow_url_fopen must be enabled.

Additionally, if you are running the librarygenerator.php script, you must
have the DOM extension enabled, and you must install
[WSDL2PHP](http://www.urdalen.no/wsdl2php/) on your system.

Installation
-----------

The most simple method of installation is via [Composer](http://getcomposer.org/). Simply add the
[thefrozenfire/mindbodyapi](https://packagist.org/packages/thefrozenfire/mindbodyapi) package as a requirement and update
your project.

Alternatively, you can simply clone this project from [GitHub](https://github.com/TheFrozenFire/PHP-Mindbody-API-Library).

This library supports PSR-0 autoloading, though you need to register the MindbodyAPI namespace as being in the root
of the library, as opposed to vendor-prefixed.

Basic Usage
-----------

Here is a very basic usage example for the Site Service class, which should
print out a full informational listing on locations associated with your
specified site.

```php
<?php
require 'vendor/autoload.php';

$service = MindbodyAPI\MindbodyClient::service("SiteService");

$credentials = $service::credentials(
	"YourSourceName",
	"YourPassword",
	array(
		1234 // Your Site ID(s)
	)
);

$request = $service::request('GetLocations', $credentials);
$locations = $service->GetLocations($request);

var_dump($locations);
```

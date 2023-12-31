<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use bolt_dev\bolt;
use bolt_dev\bolt\Models\Shared;
use bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()->build();

try {
    $request = new Operations\AccountAddressCreateRequest();
    $request->xPublishableKey = 'string';
    $request->addressListing = new Shared\AddressListing();
    $request->addressListing->company = 'ACME Corporation';
    $request->addressListing->countryCode = 'US';
    $request->addressListing->email = 'alice@example.com';
    $request->addressListing->firstName = 'Alice';
    $request->addressListing->id = 'D4g3h5tBuVYK9';
    $request->addressListing->isDefault = true;
    $request->addressListing->lastName = 'Baker';
    $request->addressListing->locality = 'San Francisco';
    $request->addressListing->phone = '+14155550199';
    $request->addressListing->postalCode = '94105';
    $request->addressListing->region = 'CA';
    $request->addressListing->streetAddress1 = '535 Mission St, Ste 1401';
    $request->addressListing->streetAddress2 = 'c/o Shipping Department';

    $requestSecurity = new Operations\AccountAddressCreateSecurity();
    $requestSecurity->option1 = new Operations\AccountAddressCreateSecurityOption1();
    $requestSecurity->option1->apiKey = '<YOUR_API_KEY_HERE>';
    $requestSecurity->option1->oauth = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

    $response = $sdk->account->addAddress($request, $requestSecurity);

    if ($response->addressListing !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->
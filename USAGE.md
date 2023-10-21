<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use bolt_dev\bolt\BoltEmbed;
use bolt_dev\bolt\Models\Shared\Security;
use bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest;
use bolt_dev\bolt\Models\Shared\AddressListing;
use bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity;
use bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurityOption1;
use bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurityOption2;

$sdk = BoltEmbed::builder()->build();

try {
    $request = new AccountAddressCreateRequest();
    $request->xPublishableKey = 'string';
    $request->addressListing = new AddressListing();
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

    $requestSecurity = new AccountAddressCreateSecurity();
    $requestSecurity->option1 = new AccountAddressCreateSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->account->addAddress($request, $requestSecurity);

    if ($response->addressListing !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->
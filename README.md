# bolt-dev/bolt-embed

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/bolt-php.git"
        }
    ],
    "require": {
        "bolt-dev/bolt-embed": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest;
use \bolt_dev\bolt\Models\Shared\AddressListing;
use \bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountAddressCreateRequest();
    $request->xPublishableKey = 'corrupti';
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
    $requestSecurity->apiKey = '';
    $requestSecurity->oauth = '';

    $response = $sdk->account->addAddress($request, $requestSecurity);

    if ($response->addressListing !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [account](docs/sdks/account/README.md)

* [addAddress](docs/sdks/account/README.md#addaddress) - Add an address
* [addPaymentMethod](docs/sdks/account/README.md#addpaymentmethod) - Add a payment method to a shopper's Bolt account Wallet.
* [deleteAddress](docs/sdks/account/README.md#deleteaddress) - Delete an existing address
* [editAddress](docs/sdks/account/README.md#editaddress) - Edit an existing address
* [exists](docs/sdks/account/README.md#exists) - Determine the existence of a Bolt account
* [get](docs/sdks/account/README.md#get) - Retrieve account details

### [configuration](docs/sdks/configuration/README.md)

* [getmerchantCallback](docs/sdks/configuration/README.md#getmerchantcallback) - Retrieve callback URLs for the merchant
* [getmerchantIdenitfier](docs/sdks/configuration/README.md#getmerchantidenitfier) - Retrieve identifiers for the merchant
* [updatemerchantCallback](docs/sdks/configuration/README.md#updatemerchantcallback) - Update callback URLs for the merchant

### [payments](docs/sdks/payments/README.md)

* [initializeGuestPayment](docs/sdks/payments/README.md#initializeguestpayment) - Initialize a Bolt payment for guest shoppers
* [initializeLoggedInPayment](docs/sdks/payments/README.md#initializeloggedinpayment) - Initialize a Bolt payment for logged in shoppers

### [testing](docs/sdks/testing/README.md)

* [createAccount](docs/sdks/testing/README.md#createaccount) - Create a test account
* [createShipmentTracking](docs/sdks/testing/README.md#createshipmenttracking) - Simulate a shipment tracking update
* [getCreditCard](docs/sdks/testing/README.md#getcreditcard) - Retrieve a test credit card, including its token

### [webhooks](docs/sdks/webhooks/README.md)

* [create](docs/sdks/webhooks/README.md#create) - Create a webhook to subscribe to certain events
* [delete](docs/sdks/webhooks/README.md#delete) - Delete an existing webhook
* [get](docs/sdks/webhooks/README.md#get) - Retrieve information for a specific webhook
* [getAll](docs/sdks/webhooks/README.md#getall) - Retrieve information about all existing webhooks
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)

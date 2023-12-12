<div align="center">
    <img src="https://github.com/speakeasy-sdks/bolt-java/assets/6267663/3e741d7f-a84e-4cce-b60b-4f3a98fe48f4" width="300">
    <h1>PHP SDK</h1>
   <p>Shockingly simple Checkout</p>
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
   <a href="https://help.bolt.com/api-bolt/"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=000&style=for-the-badge" /></a>
   <a href="https://github.com/speakeasy-sdks/bolt-php/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/bolt-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" /></a>
</div>

<!-- Start SDK Installation [installation] -->
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
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [Account](docs/sdks/account/README.md)

* [addAddress](docs/sdks/account/README.md#addaddress) - Add an address
* [addPaymentMethod](docs/sdks/account/README.md#addpaymentmethod) - Add a payment method to a shopper's Bolt account Wallet.
* [deleteAddress](docs/sdks/account/README.md#deleteaddress) - Delete an existing address
* [editAddress](docs/sdks/account/README.md#editaddress) - Edit an existing address
* [exists](docs/sdks/account/README.md#exists) - Determine the existence of a Bolt account
* [get](docs/sdks/account/README.md#get) - Retrieve account details

### [Payments](docs/sdks/payments/README.md)

* [initializeGuestPayment](docs/sdks/payments/README.md#initializeguestpayment) - Initialize a Bolt payment for guest shoppers
* [initializeLoggedInPayment](docs/sdks/payments/README.md#initializeloggedinpayment) - Initialize a Bolt payment for logged in shoppers

### [Configuration](docs/sdks/configuration/README.md)

* [getmerchantCallback](docs/sdks/configuration/README.md#getmerchantcallback) - Retrieve callback URLs for the merchant
* [getmerchantIdenitfier](docs/sdks/configuration/README.md#getmerchantidenitfier) - Retrieve identifiers for the merchant
* [updatemerchantCallback](docs/sdks/configuration/README.md#updatemerchantcallback) - Update callback URLs for the merchant

### [Testing](docs/sdks/testing/README.md)

* [createAccount](docs/sdks/testing/README.md#createaccount) - Create a test account
* [createShipmentTracking](docs/sdks/testing/README.md#createshipmenttracking) - Simulate a shipment tracking update
* [getCreditCard](docs/sdks/testing/README.md#getcreditcard) - Retrieve a test credit card, including its token

### [Webhooks](docs/sdks/webhooks/README.md)

* [create](docs/sdks/webhooks/README.md#create) - Create a webhook to subscribe to certain events
* [delete](docs/sdks/webhooks/README.md#delete) - Delete an existing webhook
* [get](docs/sdks/webhooks/README.md#get) - Retrieve information for a specific webhook
* [getAll](docs/sdks/webhooks/README.md#getall) - Retrieve information about all existing webhooks
<!-- End Available Resources and Operations [operations] -->



<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://api.{username}.dev.bolt.me/v3` | `username` (default is `xwang`) |
| 1 | `https://{environment}.bolt.com/v3` | `environment` (default is `api-sandbox`) |



#### Variables

Some of the server options above contain variables. If you want to set the values of those variables, the following optional parameters are available when initializing the SDK client instance:
 * `username: string`
 * `environment: ServerEnvironment`

### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)

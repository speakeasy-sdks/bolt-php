# Testing


## Overview

Endpoints that allow you to generate and retrieve test data to verify certain
flows in non-production environments.


### Available Operations

* [createAccount](#createaccount) - Create a test account
* [createShipmentTracking](#createshipmenttracking) - Simulate a shipment tracking update
* [getCreditCard](#getcreditcard) - Retrieve a test credit card, including its token

## createAccount

Create a Bolt shopper account for testing purposes.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = bolt\BoltEmbed::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\AccountTestCreationData();
    $request->deactivateAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2017-07-21T17:32:28Z');
    $request->emailState = Shared\EmailState::Unverified;
    $request->hasAddress = true;
    $request->isMigrated = true;
    $request->phoneState = Shared\PhoneState::Verified;

    $response = $sdk->testing->createAccount($request);

    if ($response->accountTestCreationData !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\bolt_dev\bolt\Models\Shared\AccountTestCreationData](../../Models/Shared/AccountTestCreationData.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingAccountCreateResponse](../../Models/Operations/TestingAccountCreateResponse.md)**


## createShipmentTracking

Simulate a shipment tracking update, such as those that Bolt would ingest from
third-party shipping providers that would allow updating tracking and delivery
information to shipments associated with orders.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = bolt\BoltEmbed::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\ShipmentTrackingUpdate();
    $request->deliveryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2014-08-23:T06:00:00Z');
    $request->status = Shared\ShipmentTrackingUpdateStatus::InTransit;
    $request->trackingDetails = [
        new Shared\TrackingDetails(),
    ];
    $request->trackingNumber = 'MockBolt-143292';

    $response = $sdk->testing->createShipmentTracking($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdate](../../Models/Shared/ShipmentTrackingUpdate.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateResponse](../../Models/Operations/TestingShipmentTrackingCreateResponse.md)**


## getCreditCard

Retrieve test credit card information. This includes its token, which is
generated against the `4111 1111 1111 1004` test card.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = bolt\BoltEmbed::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->testing->getCreditCard();

    if ($response->creditCard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingCreditCardGetResponse](../../Models/Operations/TestingCreditCardGetResponse.md)**


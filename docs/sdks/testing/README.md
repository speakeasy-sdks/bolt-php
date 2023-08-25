# testing

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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Shared\AccountTestCreationDataInput;
use \bolt_dev\bolt\Models\Shared\AccountTestCreationDataEmailState;
use \bolt_dev\bolt\Models\Shared\AccountTestCreationDataPhoneState;
use \bolt_dev\bolt\Models\Operations\TestingAccountCreateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountTestCreationDataInput();
    $request->deactivateAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2017-07-21T17:32:28Z');
    $request->emailState = AccountTestCreationDataEmailState::Unverified;
    $request->hasAddress = true;
    $request->isMigrated = true;
    $request->phoneState = AccountTestCreationDataPhoneState::Verified;

    $requestSecurity = new TestingAccountCreateSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->testing->createAccount($request, $requestSecurity);

    if ($response->accountTestCreationData !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\bolt_dev\bolt\Models\Shared\AccountTestCreationDataInput](../../models/shared/AccountTestCreationDataInput.md)         | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [\bolt_dev\bolt\Models\Operations\TestingAccountCreateSecurity](../../models/operations/TestingAccountCreateSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingAccountCreateResponse](../../models/operations/TestingAccountCreateResponse.md)**


## createShipmentTracking

Simulate a shipment tracking update, such as those that Bolt would ingest from
third-party shipping providers that would allow updating tracking and delivery
information to shipments associated with orders.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdate;
use \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdateStatus;
use \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdateTrackingDetails;
use \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdateTrackingDetailsStatus;
use \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new ShipmentTrackingUpdate();
    $request->deliveryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2014-08-23:T06:00:00Z');
    $request->status = ShipmentTrackingUpdateStatus::InTransit;
    $request->trackingDetails = [
        new ShipmentTrackingUpdateTrackingDetails(),
        new ShipmentTrackingUpdateTrackingDetails(),
    ];
    $request->trackingNumber = 'MockBolt-143292';

    $requestSecurity = new TestingShipmentTrackingCreateSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->testing->createShipmentTracking($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                  | Type                                                                                                                                       | Required                                                                                                                                   | Description                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                                 | [\bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdate](../../models/shared/ShipmentTrackingUpdate.md)                                       | :heavy_check_mark:                                                                                                                         | The request object to use for the request.                                                                                                 |
| `security`                                                                                                                                 | [\bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateSecurity](../../models/operations/TestingShipmentTrackingCreateSecurity.md) | :heavy_check_mark:                                                                                                                         | The security requirements to use for the request.                                                                                          |


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateResponse](../../models/operations/TestingShipmentTrackingCreateResponse.md)**


## getCreditCard

Retrieve test credit card information. This includes its token, which is
generated against the `4111 1111 1111 1004` test card.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\TestingCreditCardGetSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $requestSecurity = new TestingCreditCardGetSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->testing->getCreditCard($requestSecurity);

    if ($response->creditCard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                               | [\bolt_dev\bolt\Models\Operations\TestingCreditCardGetSecurity](../../models/operations/TestingCreditCardGetSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\bolt_dev\bolt\Models\Operations\TestingCreditCardGetResponse](../../models/operations/TestingCreditCardGetResponse.md)**


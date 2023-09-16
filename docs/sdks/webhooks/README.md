# Webhooks

## Overview

Set up webhooks to notify your backend of events within Bolt. These webhooks
can communicate with your OMS or other systems to keep them up to date with Bolt.


<https://help.bolt.com/get-started/during-checkout/webhooks/>
### Available Operations

* [create](#create) - Create a webhook to subscribe to certain events
* [delete](#delete) - Delete an existing webhook
* [get](#get) - Retrieve information for a specific webhook
* [getAll](#getall) - Retrieve information about all existing webhooks

## create

Create a new webhook to receive notifications from Bolt about various events, such as transaction status.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Shared\WebhookInput;
use \bolt_dev\bolt\Models\Operations\WebhooksCreateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new WebhookInput();
    $request->event = new EventGroup();
    $request->event->dotTag = EventGroupTag::Group;
    $request->event->eventGroup = EventGroupEventGroup::All;
    $request->url = 'https://www.example.com/webhook';

    $requestSecurity = new WebhooksCreateSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->create($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\bolt_dev\bolt\Models\Shared\WebhookInput](../../models/shared/WebhookInput.md)                             | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `security`                                                                                                   | [\bolt_dev\bolt\Models\Operations\WebhooksCreateSecurity](../../models/operations/WebhooksCreateSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksCreateResponse](../../models/operations/WebhooksCreateResponse.md)**


## delete

Delete an existing webhook. You will no longer receive notifications from Bolt about its events.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\WebhooksDeleteRequest;
use \bolt_dev\bolt\Models\Operations\WebhooksDeleteSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new WebhooksDeleteRequest();
    $request->id = 'wh_za7VbYcSQU2zRgGQXQAm-g';

    $requestSecurity = new WebhooksDeleteSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->delete($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\bolt_dev\bolt\Models\Operations\WebhooksDeleteRequest](../../models/operations/WebhooksDeleteRequest.md)   | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `security`                                                                                                   | [\bolt_dev\bolt\Models\Operations\WebhooksDeleteSecurity](../../models/operations/WebhooksDeleteSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksDeleteResponse](../../models/operations/WebhooksDeleteResponse.md)**


## get

Retrieve information for an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\WebhooksGetRequest;
use \bolt_dev\bolt\Models\Operations\WebhooksGetSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new WebhooksGetRequest();
    $request->id = 'wh_za7VbYcSQU2zRgGQXQAm-g';

    $requestSecurity = new WebhooksGetSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->get($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\bolt_dev\bolt\Models\Operations\WebhooksGetRequest](../../models/operations/WebhooksGetRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [\bolt_dev\bolt\Models\Operations\WebhooksGetSecurity](../../models/operations/WebhooksGetSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksGetResponse](../../models/operations/WebhooksGetResponse.md)**


## getAll

Retrieve information about all existing webhooks.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\WebhooksGetAllRequest;
use \bolt_dev\bolt\Models\Operations\WebhooksGetAllSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new WebhooksGetAllRequest();
    $request->xPublishableKey = 'magnam';

    $requestSecurity = new WebhooksGetAllSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->getAll($request, $requestSecurity);

    if ($response->webhooksGetAll200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [\bolt_dev\bolt\Models\Operations\WebhooksGetAllRequest](../../models/operations/WebhooksGetAllRequest.md)   | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |
| `security`                                                                                                   | [\bolt_dev\bolt\Models\Operations\WebhooksGetAllSecurity](../../models/operations/WebhooksGetAllSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksGetAllResponse](../../models/operations/WebhooksGetAllResponse.md)**


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

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = bolt\BoltEmbed::builder()->setSecurity($security)->build();

try {
        $request = new Shared\WebhookInput();
    $request->event = 'string';
    $request->url = 'https://www.example.com/webhook';;

    $response = $sdk->webhooks->create($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [\bolt_dev\bolt\Models\Shared\WebhookInput](../../Models/Shared/WebhookInput.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksCreateResponse](../../Models/Operations/WebhooksCreateResponse.md)**


## delete

Delete an existing webhook. You will no longer receive notifications from Bolt about its events.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = bolt\BoltEmbed::builder()->setSecurity($security)->build();

try {
        $request = new Operations\WebhooksDeleteRequest();
    $request->id = 'wh_za7VbYcSQU2zRgGQXQAm-g';;

    $response = $sdk->webhooks->delete($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\bolt_dev\bolt\Models\Operations\WebhooksDeleteRequest](../../Models/Operations/WebhooksDeleteRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksDeleteResponse](../../Models/Operations/WebhooksDeleteResponse.md)**


## get

Retrieve information for an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = bolt\BoltEmbed::builder()->setSecurity($security)->build();

try {
        $request = new Operations\WebhooksGetRequest();
    $request->id = 'wh_za7VbYcSQU2zRgGQXQAm-g';;

    $response = $sdk->webhooks->get($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\bolt_dev\bolt\Models\Operations\WebhooksGetRequest](../../Models/Operations/WebhooksGetRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksGetResponse](../../Models/Operations/WebhooksGetResponse.md)**


## getAll

Retrieve information about all existing webhooks.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = bolt\BoltEmbed::builder()->setSecurity($security)->build();

try {
        $request = new Operations\WebhooksGetAllRequest();
    $request->xPublishableKey = 'string';;

    $response = $sdk->webhooks->getAll($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\bolt_dev\bolt\Models\Operations\WebhooksGetAllRequest](../../Models/Operations/WebhooksGetAllRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\bolt_dev\bolt\Models\Operations\WebhooksGetAllResponse](../../Models/Operations/WebhooksGetAllResponse.md)**


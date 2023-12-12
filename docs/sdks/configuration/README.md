# Configuration


## Overview

Merchant configuration endpoints allow you to retrieve and configure merchant-level
configuration, such as callback URLs, identifiers, secrets, etc...


### Available Operations

* [getmerchantCallback](#getmerchantcallback) - Retrieve callback URLs for the merchant
* [getmerchantIdenitfier](#getmerchantidenitfier) - Retrieve identifiers for the merchant
* [updatemerchantCallback](#updatemerchantcallback) - Update callback URLs for the merchant

## getmerchantCallback

Return callback URLs configured on the merchant such as OAuth URLs.


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
        $request = new Operations\MerchantCallbacksGetRequest();
    $request->xPublishableKey = 'string';;

    $response = $sdk->configuration->getmerchantCallback($request);

    if ($response->callbackUrls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksGetRequest](../../Models/Operations/MerchantCallbacksGetRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantCallbacksGetResponse](../../Models/Operations/MerchantCallbacksGetResponse.md)**


## getmerchantIdenitfier

Return several identifiers for the merchant, such as public IDs, publishable keys, signing secrets, etc...

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
    $response = $sdk->configuration->getmerchantIdenitfier();

    if ($response->identifiers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetResponse](../../Models/Operations/MerchantIdentifiersGetResponse.md)**


## updatemerchantCallback

Update and configure callback URLs on the merchant such as OAuth URLs.


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
        $request = new Operations\MerchantCallbacksUpdateRequest();
    $request->xPublishableKey = 'string';
    $request->callbackUrls = new Shared\CallbackUrls();
    $request->callbackUrls->accountPage = 'https://www.example.com/account';
    $request->callbackUrls->baseDomain = 'https://www.example.com/';
    $request->callbackUrls->confirmationRedirect = 'https://www.example.com/bolt/redirect';
    $request->callbackUrls->createOrder = 'https://www.example.com/bolt/order';
    $request->callbackUrls->debug = 'https://www.example.com/bolt/debug';
    $request->callbackUrls->getAccount = 'https://www.example.com/bolt/account';
    $request->callbackUrls->mobileAppDomain = 'https://m.example.com/';
    $request->callbackUrls->oauthLogout = 'https://www.example.com/bolt/logout';
    $request->callbackUrls->oauthRedirect = 'https://www.example.com/bolt/oauth';
    $request->callbackUrls->privacyPolicy = 'https://www.example.com/privacy-policy';
    $request->callbackUrls->productInfo = 'https://www.example.com/bolt/product';
    $request->callbackUrls->remoteApi = 'https://www.example.com/bolt/remote-api';
    $request->callbackUrls->shipping = 'https://www.example.com/bolt/shipping';
    $request->callbackUrls->supportPage = 'https://www.example.com/help';
    $request->callbackUrls->tax = 'https://www.example.com/bolt/tax';
    $request->callbackUrls->termsOfService = 'https://www.example.com/terms-of-service';
    $request->callbackUrls->universalMerchantApi = 'https://www.example.com/bolt/merchant-api';
    $request->callbackUrls->updateCart = 'https://www.example.com/bolt/cart';
    $request->callbackUrls->validateAdditionalAccountData = 'https://www.example.com/bolt/validate-account';;

    $response = $sdk->configuration->updatemerchantCallback($request);

    if ($response->callbackUrls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateRequest](../../Models/Operations/MerchantCallbacksUpdateRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateResponse](../../Models/Operations/MerchantCallbacksUpdateResponse.md)**


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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetRequest;
use \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new MerchantCallbacksGetRequest();
    $request->xPublishableKey = 'vel';

    $requestSecurity = new MerchantCallbacksGetSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->configuration->getmerchantCallback($request, $requestSecurity);

    if ($response->callbackUrls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksGetRequest](../../models/operations/MerchantCallbacksGetRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksGetSecurity](../../models/operations/MerchantCallbacksGetSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantCallbacksGetResponse](../../models/operations/MerchantCallbacksGetResponse.md)**


## getmerchantIdenitfier

Return several identifiers for the merchant, such as public IDs, publishable keys, signing secrets, etc...

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $requestSecurity = new MerchantIdentifiersGetSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->configuration->getmerchantIdenitfier($requestSecurity);

    if ($response->identifiers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                   | [\bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetSecurity](../../models/operations/MerchantIdentifiersGetSecurity.md) | :heavy_check_mark:                                                                                                           | The security requirements to use for the request.                                                                            |


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetResponse](../../models/operations/MerchantIdentifiersGetResponse.md)**


## updatemerchantCallback

Update and configure callback URLs on the merchant such as OAuth URLs.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateRequest;
use \bolt_dev\bolt\Models\Shared\CallbackUrls;
use \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new MerchantCallbacksUpdateRequest();
    $request->xPublishableKey = 'error';
    $request->callbackUrls = new CallbackUrls();
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
    $request->callbackUrls->validateAdditionalAccountData = 'https://www.example.com/bolt/validate-account';

    $requestSecurity = new MerchantCallbacksUpdateSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->configuration->updatemerchantCallback($request, $requestSecurity);

    if ($response->callbackUrls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateRequest](../../models/operations/MerchantCallbacksUpdateRequest.md)   | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `security`                                                                                                                     | [\bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateSecurity](../../models/operations/MerchantCallbacksUpdateSecurity.md) | :heavy_check_mark:                                                                                                             | The security requirements to use for the request.                                                                              |


### Response

**[?\bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateResponse](../../models/operations/MerchantCallbacksUpdateResponse.md)**


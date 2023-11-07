# Account


## Overview

Account endpoints allow you to view and manage shoppers' accounts. For example,
you can add or remove addresses and payment information.


### Available Operations

* [addAddress](#addaddress) - Add an address
* [addPaymentMethod](#addpaymentmethod) - Add a payment method to a shopper's Bolt account Wallet.
* [deleteAddress](#deleteaddress) - Delete an existing address
* [editAddress](#editaddress) - Edit an existing address
* [exists](#exists) - Determine the existence of a Bolt account
* [get](#get) - Retrieve account details

## addAddress

Add an address to the shopper's account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()
    ->build();

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

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest](../../models/operations/AccountAddressCreateRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [\bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity](../../models/operations/AccountAddressCreateSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountAddressCreateResponse](../../models/operations/AccountAddressCreateResponse.md)**


## addPaymentMethod

Add a payment method to a shopper's Bolt account Wallet. For security purposes, this request must come from
your backend because authentication requires the use of your private key.<br />
**Note**: Before using this API, the credit card details must be tokenized using Bolt's JavaScript library function,
which is documented in [Install the Bolt Tokenizer](https://help.bolt.com/developers/references/bolt-tokenizer).


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()
    ->build();

try {
    $request = new Operations\AccountAddPaymentMethodRequest();
    $request->requestBody = 'string';
    $request->xPublishableKey = 'string';

    $requestSecurity = new Operations\AccountAddPaymentMethodSecurity();
    $requestSecurity->option1 = new Operations\AccountAddPaymentMethodSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->account->addPaymentMethod($request, $requestSecurity);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [\bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodRequest](../../models/operations/AccountAddPaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |
| `security`                                                                                                                     | [\bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodSecurity](../../models/operations/AccountAddPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                             | The security requirements to use for the request.                                                                              |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodResponse](../../models/operations/AccountAddPaymentMethodResponse.md)**


## deleteAddress

Delete an existing address. Deleting an address does not invalidate transactions or
shipments that are associated with it.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()
    ->build();

try {
    $request = new Operations\AccountAddressDeleteRequest();
    $request->xPublishableKey = 'string';
    $request->id = 'D4g3h5tBuVYK9';

    $requestSecurity = new Operations\AccountAddressDeleteSecurity();
    $requestSecurity->option1 = new Operations\AccountAddressDeleteSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->account->deleteAddress($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [\bolt_dev\bolt\Models\Operations\AccountAddressDeleteRequest](../../models/operations/AccountAddressDeleteRequest.md)   | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |
| `security`                                                                                                               | [\bolt_dev\bolt\Models\Operations\AccountAddressDeleteSecurity](../../models/operations/AccountAddressDeleteSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountAddressDeleteResponse](../../models/operations/AccountAddressDeleteResponse.md)**


## editAddress

Edit an existing address on the shopper's account. This does not edit addresses
that are already associated with other resources, such as transactions or
shipments.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()
    ->build();

try {
    $request = new Operations\AccountAddressEditRequest();
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
    $request->id = 'D4g3h5tBuVYK9';

    $requestSecurity = new Operations\AccountAddressEditSecurity();
    $requestSecurity->option1 = new Operations\AccountAddressEditSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->account->editAddress($request, $requestSecurity);

    if ($response->addressListing !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\bolt_dev\bolt\Models\Operations\AccountAddressEditRequest](../../models/operations/AccountAddressEditRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\bolt_dev\bolt\Models\Operations\AccountAddressEditSecurity](../../models/operations/AccountAddressEditSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountAddressEditResponse](../../models/operations/AccountAddressEditResponse.md)**


## exists

Determine whether or not an identifier is associated with an existing Bolt account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = bolt\BoltEmbed::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AccountExistsRequest();
    $request->xPublishableKey = 'string';
    $request->identifier = new Shared\Identifier();
    $request->identifier->identifierType = Shared\IdentifierType::Email;
    $request->identifier->identifierValue = 'alice@example.com';

    $response = $sdk->account->exists($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [\bolt_dev\bolt\Models\Operations\AccountExistsRequest](../../models/operations/AccountExistsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountExistsResponse](../../models/operations/AccountExistsResponse.md)**


## get

Retrieve a shopper's account details, such as addresses and payment information

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt;
use \bolt_dev\bolt\Models\Shared;
use \bolt_dev\bolt\Models\Operations;

$sdk = bolt\BoltEmbed::builder()
    ->build();

try {
    $request = new Operations\AccountGetRequest();
    $request->xPublishableKey = 'string';

    $requestSecurity = new Operations\AccountGetSecurity();
    $requestSecurity->option1 = new Operations\AccountGetSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->account->get($request, $requestSecurity);

    if ($response->account !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\bolt_dev\bolt\Models\Operations\AccountGetRequest](../../models/operations/AccountGetRequest.md)   | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |
| `security`                                                                                           | [\bolt_dev\bolt\Models\Operations\AccountGetSecurity](../../models/operations/AccountGetSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |


### Response

**[?\bolt_dev\bolt\Models\Operations\AccountGetResponse](../../models/operations/AccountGetResponse.md)**


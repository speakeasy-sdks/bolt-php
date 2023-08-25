# account

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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest;
use \bolt_dev\bolt\Models\Shared\AddressListing;
use \bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountAddressCreateRequest();
    $request->xPublishableKey = 'provident';
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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodRequest;
use \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountAddPaymentMethodRequest();
    $request->requestBody = new PaymentMethodCreditCard();
    $request->requestBody->dotTag = PaymentMethodCreditCardTag::CreditCard;
    $request->requestBody->billingAddressId = 'D4g3h5tBuVYK9';
    $request->requestBody->billingAddressInput = new AddressReferenceExplicit();
    $request->requestBody->billingAddressInput->dotTag = AddressReferenceExplicitTag::Explicit;
    $request->requestBody->billingAddressInput->company = 'ACME Corporation';
    $request->requestBody->billingAddressInput->countryCode = 'US';
    $request->requestBody->billingAddressInput->email = 'alice@example.com';
    $request->requestBody->billingAddressInput->firstName = 'Alice';
    $request->requestBody->billingAddressInput->id = 'D4g3h5tBuVYK9';
    $request->requestBody->billingAddressInput->lastName = 'Baker';
    $request->requestBody->billingAddressInput->locality = 'San Francisco';
    $request->requestBody->billingAddressInput->phone = '+14155550199';
    $request->requestBody->billingAddressInput->postalCode = '94105';
    $request->requestBody->billingAddressInput->region = 'CA';
    $request->requestBody->billingAddressInput->streetAddress1 = '535 Mission St, Ste 1401';
    $request->requestBody->billingAddressInput->streetAddress2 = 'c/o Shipping Department';
    $request->requestBody->bin = '411111';
    $request->requestBody->expiration = '2025-03';
    $request->requestBody->id = 'X5h6j8uLpVGK0';
    $request->requestBody->last4 = '1004';
    $request->requestBody->network = PaymentMethodCreditCardNetwork::Visa;
    $request->requestBody->token = 'a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0';
    $request->requestBody->type = PaymentMethodCreditCardType::Credit;
    $request->xPublishableKey = 'quibusdam';

    $requestSecurity = new AccountAddPaymentMethodSecurity();
    $requestSecurity->apiKey = '';
    $requestSecurity->oauth = '';

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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountAddressDeleteRequest;
use \bolt_dev\bolt\Models\Operations\AccountAddressDeleteSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountAddressDeleteRequest();
    $request->xPublishableKey = 'unde';
    $request->id = 'D4g3h5tBuVYK9';

    $requestSecurity = new AccountAddressDeleteSecurity();
    $requestSecurity->apiKey = '';
    $requestSecurity->oauth = '';

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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountAddressEditRequest;
use \bolt_dev\bolt\Models\Shared\AddressListing;
use \bolt_dev\bolt\Models\Operations\AccountAddressEditSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountAddressEditRequest();
    $request->xPublishableKey = 'nulla';
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
    $request->id = 'D4g3h5tBuVYK9';

    $requestSecurity = new AccountAddressEditSecurity();
    $requestSecurity->apiKey = '';
    $requestSecurity->oauth = '';

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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountExistsRequest;
use \bolt_dev\bolt\Models\Shared\Identifier;
use \bolt_dev\bolt\Models\Shared\IdentifierIdentifierType;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountExistsRequest();
    $request->xPublishableKey = 'corrupti';
    $request->identifier = new Identifier();
    $request->identifier->identifierType = IdentifierIdentifierType::Email;
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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Operations\AccountGetRequest;
use \bolt_dev\bolt\Models\Operations\AccountGetSecurity;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new AccountGetRequest();
    $request->xPublishableKey = 'illum';

    $requestSecurity = new AccountGetSecurity();
    $requestSecurity->apiKey = '';
    $requestSecurity->oauth = '';

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

# Payments


## Overview

Use the Payments API to tokenize and process alternative payment methods including Paypal with Bolt. This API is for the Bolt
Accounts package.


### Available Operations

* [initializeGuestPayment](#initializeguestpayment) - Initialize a Bolt payment for guest shoppers
* [initializeLoggedInPayment](#initializeloggedinpayment) - Initialize a Bolt payment for logged in shoppers

## initializeGuestPayment

Initialize a Bolt payment token that will be used to reference this payment to
Bolt when it is updated or finalized for guest shoppers.


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
    $request = new Operations\GuestPaymentsInitializeRequest();
    $request->xPublishableKey = 'string';
    $request->guestPaymentMethodInitializeRequest = new Shared\GuestPaymentMethodInitializeRequest();
    $request->guestPaymentMethodInitializeRequest->cart = new Shared\Cart();
    $request->guestPaymentMethodInitializeRequest->cart->amounts = new Shared\Amounts();
    $request->guestPaymentMethodInitializeRequest->cart->amounts->currency = 'USD';
    $request->guestPaymentMethodInitializeRequest->cart->amounts->tax = 900;
    $request->guestPaymentMethodInitializeRequest->cart->amounts->total = 900;
    $request->guestPaymentMethodInitializeRequest->cart->discounts = [
        new Shared\CartDiscount(),
    ];
    $request->guestPaymentMethodInitializeRequest->cart->displayId = '215614191';
    $request->guestPaymentMethodInitializeRequest->cart->items = [
        new Shared\CartItem(),
    ];
    $request->guestPaymentMethodInitializeRequest->cart->orderDescription = 'Order #1234567890';
    $request->guestPaymentMethodInitializeRequest->cart->orderReference = 'order_100';
    $request->guestPaymentMethodInitializeRequest->cart->shipments = [
        new Shared\CartShipment(),
    ];
    $request->guestPaymentMethodInitializeRequest->paymentMethod = 'string';

    $response = $sdk->payments->initializeGuestPayment($request);

    if ($response->paymentMethodInitializeResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [\bolt_dev\bolt\Models\Operations\GuestPaymentsInitializeRequest](../../Models/Operations/GuestPaymentsInitializeRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\bolt_dev\bolt\Models\Operations\GuestPaymentsInitializeResponse](../../Models/Operations/GuestPaymentsInitializeResponse.md)**


## initializeLoggedInPayment

Initialize a Bolt payment token that will be used to reference this payment to
Bolt when it is updated or finalized for logged in shoppers.


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
    $request = new Operations\PaymentsInitializeRequest();
    $request->xPublishableKey = 'string';
    $request->paymentMethodInitializeRequest = new Shared\PaymentMethodInitializeRequest();
    $request->paymentMethodInitializeRequest->cart = new Shared\Cart();
    $request->paymentMethodInitializeRequest->cart->amounts = new Shared\Amounts();
    $request->paymentMethodInitializeRequest->cart->amounts->currency = 'USD';
    $request->paymentMethodInitializeRequest->cart->amounts->tax = 900;
    $request->paymentMethodInitializeRequest->cart->amounts->total = 900;
    $request->paymentMethodInitializeRequest->cart->discounts = [
        new Shared\CartDiscount(),
    ];
    $request->paymentMethodInitializeRequest->cart->displayId = '215614191';
    $request->paymentMethodInitializeRequest->cart->items = [
        new Shared\CartItem(),
    ];
    $request->paymentMethodInitializeRequest->cart->orderDescription = 'Order #1234567890';
    $request->paymentMethodInitializeRequest->cart->orderReference = 'order_100';
    $request->paymentMethodInitializeRequest->cart->shipments = [
        new Shared\CartShipment(),
    ];
    $request->paymentMethodInitializeRequest->paymentMethod = 'string';

    $requestSecurity = new Operations\PaymentsInitializeSecurity();
    $requestSecurity->option1 = new Operations\PaymentsInitializeSecurityOption1();
    $requestSecurity->option1->apiKey = '';
    $requestSecurity->option1->oauth = '';

    $response = $sdk->payments->initializeLoggedInPayment($request, $requestSecurity);

    if ($response->paymentMethodInitializeResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\bolt_dev\bolt\Models\Operations\PaymentsInitializeRequest](../../Models/Operations/PaymentsInitializeRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\bolt_dev\bolt\Models\Operations\PaymentsInitializeSecurity](../../Models/Operations/PaymentsInitializeSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\bolt_dev\bolt\Models\Operations\PaymentsInitializeResponse](../../Models/Operations/PaymentsInitializeResponse.md)**


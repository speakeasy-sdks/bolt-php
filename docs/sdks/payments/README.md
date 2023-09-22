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

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Shared\Security;
use \bolt_dev\bolt\Models\Operations\GuestPaymentsInitializeRequest;
use \bolt_dev\bolt\Models\Shared\GuestPaymentMethodInitializeRequest;
use \bolt_dev\bolt\Models\Shared\Cart;
use \bolt_dev\bolt\Models\Shared\Amounts;
use \bolt_dev\bolt\Models\Shared\CartDiscount;
use \bolt_dev\bolt\Models\Shared\CartItem;
use \bolt_dev\bolt\Models\Shared\CartShipment;
use \bolt_dev\bolt\Models\Shared\PaymentMethodPaypal;
use \bolt_dev\bolt\Models\Shared\PaymentMethodPaypalTag;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new GuestPaymentsInitializeRequest();
    $request->xPublishableKey = 'suscipit';
    $request->guestPaymentMethodInitializeRequest = new GuestPaymentMethodInitializeRequest();
    $request->guestPaymentMethodInitializeRequest->cart = new Cart();
    $request->guestPaymentMethodInitializeRequest->cart->amounts = new Amounts();
    $request->guestPaymentMethodInitializeRequest->cart->amounts->currency = 'USD';
    $request->guestPaymentMethodInitializeRequest->cart->amounts->tax = 900;
    $request->guestPaymentMethodInitializeRequest->cart->amounts->total = 900;
    $request->guestPaymentMethodInitializeRequest->cart->discounts = [
        new CartDiscount(),
    ];
    $request->guestPaymentMethodInitializeRequest->cart->displayId = '215614191';
    $request->guestPaymentMethodInitializeRequest->cart->items = [
        new CartItem(),
    ];
    $request->guestPaymentMethodInitializeRequest->cart->orderDescription = 'Order #1234567890';
    $request->guestPaymentMethodInitializeRequest->cart->orderReference = 'order_100';
    $request->guestPaymentMethodInitializeRequest->cart->shipments = [
        new CartShipment(),
    ];
    $request->guestPaymentMethodInitializeRequest->paymentMethod = new PaymentMethodPaypal();
    $request->guestPaymentMethodInitializeRequest->paymentMethod->dotTag = PaymentMethodPaypalTag::Paypal;
    $request->guestPaymentMethodInitializeRequest->paymentMethod->cancel = 'www.example.com/handle_paypal_cancel';
    $request->guestPaymentMethodInitializeRequest->paymentMethod->success = 'www.example.com/handle_paypal_success';

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
| `$request`                                                                                                                   | [\bolt_dev\bolt\Models\Operations\GuestPaymentsInitializeRequest](../../models/operations/GuestPaymentsInitializeRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |


### Response

**[?\bolt_dev\bolt\Models\Operations\GuestPaymentsInitializeResponse](../../models/operations/GuestPaymentsInitializeResponse.md)**


## initializeLoggedInPayment

Initialize a Bolt payment token that will be used to reference this payment to
Bolt when it is updated or finalized for logged in shoppers.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \bolt_dev\bolt\BoltEmbed;
use \bolt_dev\bolt\Models\Shared\Security;
use \bolt_dev\bolt\Models\Operations\PaymentsInitializeRequest;
use \bolt_dev\bolt\Models\Shared\PaymentMethodInitializeRequest;
use \bolt_dev\bolt\Models\Shared\Cart;
use \bolt_dev\bolt\Models\Shared\Amounts;
use \bolt_dev\bolt\Models\Shared\CartDiscount;
use \bolt_dev\bolt\Models\Shared\CartItem;
use \bolt_dev\bolt\Models\Shared\CartShipment;
use \bolt_dev\bolt\Models\Shared\PaymentMethodSavedPaymentMethod;
use \bolt_dev\bolt\Models\Shared\PaymentMethodSavedPaymentMethodTag;
use \bolt_dev\bolt\Models\Operations\PaymentsInitializeSecurity;
use \bolt_dev\bolt\Models\Operations\PaymentsInitializeSecurityOption1;
use \bolt_dev\bolt\Models\Operations\PaymentsInitializeSecurityOption2;

$sdk = BoltEmbed::builder()
    ->build();

try {
    $request = new PaymentsInitializeRequest();
    $request->xPublishableKey = 'iure';
    $request->paymentMethodInitializeRequest = new PaymentMethodInitializeRequest();
    $request->paymentMethodInitializeRequest->cart = new Cart();
    $request->paymentMethodInitializeRequest->cart->amounts = new Amounts();
    $request->paymentMethodInitializeRequest->cart->amounts->currency = 'USD';
    $request->paymentMethodInitializeRequest->cart->amounts->tax = 900;
    $request->paymentMethodInitializeRequest->cart->amounts->total = 900;
    $request->paymentMethodInitializeRequest->cart->discounts = [
        new CartDiscount(),
    ];
    $request->paymentMethodInitializeRequest->cart->displayId = '215614191';
    $request->paymentMethodInitializeRequest->cart->items = [
        new CartItem(),
    ];
    $request->paymentMethodInitializeRequest->cart->orderDescription = 'Order #1234567890';
    $request->paymentMethodInitializeRequest->cart->orderReference = 'order_100';
    $request->paymentMethodInitializeRequest->cart->shipments = [
        new CartShipment(),
    ];
    $request->paymentMethodInitializeRequest->paymentMethod = new PaymentMethodSavedPaymentMethod();
    $request->paymentMethodInitializeRequest->paymentMethod->dotTag = PaymentMethodSavedPaymentMethodTag::SavedPaymentMethod;
    $request->paymentMethodInitializeRequest->paymentMethod->id = 'id';

    $requestSecurity = new PaymentsInitializeSecurity();
    $requestSecurity->option1 = new PaymentsInitializeSecurityOption1();
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
| `$request`                                                                                                           | [\bolt_dev\bolt\Models\Operations\PaymentsInitializeRequest](../../models/operations/PaymentsInitializeRequest.md)   | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |
| `security`                                                                                                           | [\bolt_dev\bolt\Models\Operations\PaymentsInitializeSecurity](../../models/operations/PaymentsInitializeSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |


### Response

**[?\bolt_dev\bolt\Models\Operations\PaymentsInitializeResponse](../../models/operations/PaymentsInitializeResponse.md)**


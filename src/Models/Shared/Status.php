<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


enum Status: string
{
    case AwaitingUserConfirmation = 'awaiting_user_confirmation';
    case PaymentReady = 'payment_ready';
    case UpdatePaymentMethod = 'update_payment_method';
    case Success = 'success';
}

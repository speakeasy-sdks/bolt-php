<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


enum EmailState: string
{
    case Missing = 'missing';
    case Unverified = 'unverified';
    case Verified = 'verified';
}

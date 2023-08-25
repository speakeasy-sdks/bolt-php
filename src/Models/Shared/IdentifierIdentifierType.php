<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


/** The type of identifier */
enum IdentifierIdentifierType: string
{
    case Email = 'email';
    case EmailSha256 = 'email_sha256';
}

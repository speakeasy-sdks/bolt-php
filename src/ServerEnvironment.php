<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt;

enum ServerEnvironment: string
{
    case Api = 'api';
    case ApiSandbox = 'api-sandbox';
    case ApiStaging = 'api-staging';
}
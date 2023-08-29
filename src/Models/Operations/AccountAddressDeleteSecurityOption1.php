<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Operations;

use \bolt_dev\bolt\Utils\SpeakeasyMetadata;
class AccountAddressDeleteSecurityOption1
{
	#[SpeakeasyMetadata('security:scheme=true,type=apiKey,subtype=header,name=X-API-Key')]
    public string $apiKey;
    
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $oauth;
    
	public function __construct()
	{
		$this->apiKey = "";
		$this->oauth = "";
	}
}

<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Operations;

use \bolt_dev\bolt\Utils\SpeakeasyMetadata;
class AccountExistsRequest
{
    /**
     * The publicly viewable identifier used to identify a merchant division.
     * 
     * @var string $xPublishableKey
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Publishable-Key')]
    public string $xPublishableKey;
    
    /**
     * A type and value combination that defines the identifier used to detect
     * 
     * the existence of an account.
     * 
     * 
     * @var \bolt_dev\bolt\Models\Shared\Identifier $identifier
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=identifier')]
    public \bolt_dev\bolt\Models\Shared\Identifier $identifier;
    
	public function __construct()
	{
		$this->xPublishableKey = "";
		$this->identifier = new \bolt_dev\bolt\Models\Shared\Identifier();
	}
}

<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Operations;

use \bolt_dev\bolt\Utils\SpeakeasyMetadata;
class AccountAddressEditRequest
{
    /**
     * The publicly viewable identifier used to identify a merchant division.
     * 
     * @var string $xPublishableKey
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Publishable-Key')]
    public string $xPublishableKey;
    
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \bolt_dev\bolt\Models\Shared\AddressListing $addressListing;
    
    /**
     * The ID of the address to edit
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->xPublishableKey = "";
		$this->addressListing = new \bolt_dev\bolt\Models\Shared\AddressListing();
		$this->id = "";
	}
}
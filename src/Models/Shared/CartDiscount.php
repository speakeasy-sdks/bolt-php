<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class CartDiscount
{
	#[\JMS\Serializer\Annotation\SerializedName('amounts')]
    #[\JMS\Serializer\Annotation\Type('bolt_dev\bolt\Models\Shared\Amounts')]
    public Amounts $amounts;
    
    /**
     * Discount code.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Used to provide a link to additional details, such as a landing page, associated with the discount offering.
     * 
     * @var ?string $detailsUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('details_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $detailsUrl = null;
    
	public function __construct()
	{
		$this->amounts = new \bolt_dev\bolt\Models\Shared\Amounts();
		$this->code = null;
		$this->detailsUrl = null;
	}
}
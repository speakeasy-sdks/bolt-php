<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class Account
{
    /**
     * $addresses
     * 
     * @var array<\bolt_dev\bolt\Models\Shared\AddressListing> $addresses
     */
	#[\JMS\Serializer\Annotation\SerializedName('addresses')]
    #[\JMS\Serializer\Annotation\Type('array<bolt_dev\bolt\Models\Shared\AddressListing>')]
    public array $addresses;
    
    /**
     * $paymentMethods
     * 
     * @var array<\bolt_dev\bolt\Models\Shared\PaymentMethodCreditCard> $paymentMethods
     */
	#[\JMS\Serializer\Annotation\SerializedName('payment_methods')]
    #[\JMS\Serializer\Annotation\Type('array<bolt_dev\bolt\Models\Shared\PaymentMethodCreditCard>')]
    public array $paymentMethods;
    
	#[\JMS\Serializer\Annotation\SerializedName('profile')]
    #[\JMS\Serializer\Annotation\Type('bolt_dev\bolt\Models\Shared\Profile')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Profile $profile = null;
    
	public function __construct()
	{
		$this->addresses = [];
		$this->paymentMethods = [];
		$this->profile = null;
	}
}

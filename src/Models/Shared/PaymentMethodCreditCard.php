<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class PaymentMethodCreditCard
{
	#[\JMS\Serializer\Annotation\SerializedName('.tag')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardTag>')]
    public PaymentMethodCreditCardTag $dotTag;
    
    /**
     * The ID of credit card's billing address
     * 
     * @var ?string $billingAddressId
     */
	#[\JMS\Serializer\Annotation\SerializedName('billing_address_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $billingAddressId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('billing_address_input')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $billingAddressInput = null;
    
    /**
     * The Bank Identification Number for the credit card. This is typically the first 4-6 digits of the credit card number.
     * 
     * @var string $bin
     */
	#[\JMS\Serializer\Annotation\SerializedName('bin')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $bin;
    
    /**
     * The expiration date of the credit card. TODO TO MAKE EXPIRATION REUSABLE
     * 
     * @var string $expiration
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiration')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiration;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    /**
     * The last 4 digits of the credit card number.
     * 
     * @var string $last4
     */
	#[\JMS\Serializer\Annotation\SerializedName('last4')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $last4;
    
    /**
     * The credit card network.
     * 
     * @var \bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardNetwork $network
     */
	#[\JMS\Serializer\Annotation\SerializedName('network')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardNetwork>')]
    public PaymentMethodCreditCardNetwork $network;
    
    /**
     * The Bolt token associated to the credit card.
     * 
     * @var string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $token;
    
    /**
     * Credit card type
     * 
     * @var \bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardType>')]
    public PaymentMethodCreditCardType $type;
    
	public function __construct()
	{
		$this->dotTag = \bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardTag::CreditCard;
		$this->billingAddressId = null;
		$this->billingAddressInput = null;
		$this->bin = "";
		$this->expiration = "";
		$this->id = null;
		$this->last4 = "";
		$this->network = \bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardNetwork::Visa;
		$this->token = "";
		$this->type = \bolt_dev\bolt\Models\Shared\PaymentMethodCreditCardType::Credit;
	}
}

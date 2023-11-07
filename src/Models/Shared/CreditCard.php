<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class CreditCard
{
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
     * @var \bolt_dev\bolt\Models\Shared\Network $network
     */
	#[\JMS\Serializer\Annotation\SerializedName('network')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\Network>')]
    public Network $network;
    
    /**
     * The Bolt token associated to the credit card.
     * 
     * @var string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $token;
    
	public function __construct()
	{
		$this->bin = "";
		$this->expiration = "";
		$this->last4 = "";
		$this->network = \bolt_dev\bolt\Models\Shared\Network::Visa;
		$this->token = "";
	}
}

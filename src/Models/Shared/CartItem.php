<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class CartItem
{
    /**
     * A human-readable description of this cart item.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * Used to provide a link to the image associated with the item.
     * 
     * @var ?string $imageUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;
    
    /**
     * The name of a given item.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The number of units that comprise this cart item.
     * 
     * @var int $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $quantity;
    
    /**
     * This value is used by Bolt as an external reference to a given item.
     * 
     * @var string $reference
     */
	#[\JMS\Serializer\Annotation\SerializedName('reference')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $reference;
    
    /**
     * The total amount, in cents, of the item including its taxes if applicable.
     * 
     * @var int $totalAmount
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalAmount;
    
    /**
     * The price of one unit of the item; for example, the price of one pack of socks.
     * 
     * @var int $unitPrice
     */
	#[\JMS\Serializer\Annotation\SerializedName('unit_price')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $unitPrice;
    
	public function __construct()
	{
		$this->description = null;
		$this->imageUrl = null;
		$this->name = "";
		$this->quantity = 0;
		$this->reference = "";
		$this->totalAmount = 0;
		$this->unitPrice = 0;
	}
}

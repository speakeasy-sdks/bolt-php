<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class Action
{
	#[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\Method>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Method $method = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\Type>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Type $type = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;
    
	public function __construct()
	{
		$this->method = null;
		$this->type = null;
		$this->url = null;
	}
}
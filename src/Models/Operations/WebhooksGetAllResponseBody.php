<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Operations;


/**
 * WebhooksGetAllResponseBody - All existing webhook information has been retrieved
 * 
 * @package bolt_dev\bolt\Models\Operations
 * @access public
 */
class WebhooksGetAllResponseBody
{
    /**
     * $webhooks
     * 
     * @var ?array<\bolt_dev\bolt\Models\Shared\Webhook> $webhooks
     */
	#[\JMS\Serializer\Annotation\SerializedName('webhooks')]
    #[\JMS\Serializer\Annotation\Type('array<bolt_dev\bolt\Models\Shared\Webhook>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $webhooks = null;
    
	public function __construct()
	{
		$this->webhooks = null;
	}
}

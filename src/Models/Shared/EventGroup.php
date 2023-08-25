<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt\Models\Shared;


class EventGroup
{
	#[\JMS\Serializer\Annotation\SerializedName('.tag')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\EventGroupTag>')]
    public EventGroupTag $dotTag;
    
	#[\JMS\Serializer\Annotation\SerializedName('event_group')]
    #[\JMS\Serializer\Annotation\Type('enum<bolt_dev\bolt\Models\Shared\EventGroupEventGroup>')]
    public EventGroupEventGroup $eventGroup;
    
	public function __construct()
	{
		$this->dotTag = \bolt_dev\bolt\Models\Shared\EventGroupTag::Group;
		$this->eventGroup = \bolt_dev\bolt\Models\Shared\EventGroupEventGroup::All;
	}
}

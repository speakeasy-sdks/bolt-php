<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	/** @var array<array<string, string>> */
	public ?array $serverDefaults = [
		[
			'username' => 'xwang',
		],
		[
			'environment' => 'api-sandbox',
		],
	];
	public string $language = 'php';
	public string $openapiDocVersion = '3.0.1';
	public string $sdkVersion = '0.9.0';
	public string $genVersion = '2.181.1';
	public string $userAgent = 'speakeasy-sdk/php 0.9.0 2.181.1 3.0.1 bolt-dev/bolt-embed';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return BoltEmbed::SERVERS[$this->serverIndex];
	}
	
	/**
	 * @return array<string, string>
	 */
	public function getServerDefaults(): ?array
	{
		return $this->serverDefaults[$this->serverIndex];
	}
}
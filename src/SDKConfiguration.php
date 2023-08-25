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
	public string $sdkVersion = '0.1.0';
	public string $genVersion = '2.88.1';

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
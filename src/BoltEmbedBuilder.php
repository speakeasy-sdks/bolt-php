<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace bolt_dev\bolt;

/**
 * BoltEmbedBuilder is used to configure and build an instance of the SDK.
 * 
 * @package bolt_dev\bolt
 */
class BoltEmbedBuilder
{
    private SDKConfiguration $sdkConfig;

    public function __construct() {
        $this->sdkConfig = new SDKConfiguration();
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return BoltEmbedBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): BoltEmbedBuilder
    {
        $this->sdkConfig->defaultClient = $client;
        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return BoltEmbedBuilder
     */
    public function setSecurity(Models\Shared\Security $security): BoltEmbedBuilder
    {
        $this->sdkConfig->security = $security;
        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return BoltEmbedBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): BoltEmbedBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return BoltEmbedBuilder
     */
    public function setServerIndex(int $serverIdx): BoltEmbedBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;
        return $this;
    }
    
    
    /**
     * setUsername is used to configure the username variable for url substitution
     *
     * @param string $username
     * @return BoltEmbedBuilder
     */
    public function setUsername(string $username): BoltEmbedBuilder
    {
        foreach ($this->sdkConfig->serverDefaults as $idx => $serverDefaults) {
            if (!array_key_exists('username', $serverDefaults)) {
                continue;
            }
            
            $this->sdkConfig->serverDefaults[$idx]['username'] = $username;
        }

        return $this;
    }
    /**
     * setEnvironment is used to configure the environment variable for url substitution
     *
     * @param ServerEnvironment $environment
     * @return BoltEmbedBuilder
     */
    public function setEnvironment(ServerEnvironment $environment): BoltEmbedBuilder
    {
        foreach ($this->sdkConfig->serverDefaults as $idx => $serverDefaults) {
            if (!array_key_exists('environment', $serverDefaults)) {
                continue;
            }
            
            $this->sdkConfig->serverDefaults[$idx]['environment'] = $environment->value;
            
        }

        return $this;
    }
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return BoltEmbed
     */
    public function build(): BoltEmbed
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->security !== null) {
			$this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->security);
		}
		
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new BoltEmbed($this->sdkConfig);
    }
}
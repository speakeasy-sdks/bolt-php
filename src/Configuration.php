<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt;

class Configuration 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Retrieve callback URLs for the merchant
     * 
     * Return callback URLs configured on the merchant such as OAuth URLs.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetRequest $request
     * @param \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetResponse
     */
	public function getmerchantCallback(
        \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetRequest $request,
        \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/merchant/callbacks');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\MerchantCallbacksGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->callbackUrls = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\CallbackUrls', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve identifiers for the merchant
     * 
     * Return several identifiers for the merchant, such as public IDs, publishable keys, signing secrets, etc...
     * 
     * @param \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetResponse
     */
	public function getmerchantIdenitfier(
        \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/merchant/identifiers');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\MerchantIdentifiersGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->identifiers = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\Identifiers', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update callback URLs for the merchant
     * 
     * Update and configure callback URLs on the merchant such as OAuth URLs.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateRequest $request
     * @param \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateResponse
     */
	public function updatemerchantCallback(
        \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateRequest $request,
        \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/merchant/callbacks');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "callbackUrls", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\MerchantCallbacksUpdateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->callbackUrls = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\CallbackUrls', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->merchantCallbacksUpdate400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
}
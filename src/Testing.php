<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt;

class Testing 
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
     * Create a test account
     * 
     * Create a Bolt shopper account for testing purposes.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Shared\AccountTestCreationDataInput $request
     * @param \bolt_dev\bolt\Models\Operations\TestingAccountCreateSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\TestingAccountCreateResponse
     */
	public function createAccount(
        \bolt_dev\bolt\Models\Shared\AccountTestCreationDataInput $request,
        \bolt_dev\bolt\Models\Operations\TestingAccountCreateSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\TestingAccountCreateResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/testing/accounts');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\TestingAccountCreateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountTestCreationData = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\AccountTestCreationDataOutput', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Simulate a shipment tracking update
     * 
     * Simulate a shipment tracking update, such as those that Bolt would ingest from
     * third-party shipping providers that would allow updating tracking and delivery
     * information to shipments associated with orders.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdate $request
     * @param \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateResponse
     */
	public function createShipmentTracking(
        \bolt_dev\bolt\Models\Shared\ShipmentTrackingUpdate $request,
        \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/testing/shipments');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\TestingShipmentTrackingCreateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
	
    /**
     * Retrieve a test credit card, including its token
     * 
     * Retrieve test credit card information. This includes its token, which is
     * generated against the `4111 1111 1111 1004` test card.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\TestingCreditCardGetSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\TestingCreditCardGetResponse
     */
	public function getCreditCard(
        \bolt_dev\bolt\Models\Operations\TestingCreditCardGetSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\TestingCreditCardGetResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/testing/credit-cards');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\TestingCreditCardGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->creditCard = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\CreditCard', 'json');
            }
        }

        return $response;
    }
}
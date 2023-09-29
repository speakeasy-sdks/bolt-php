<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace bolt_dev\bolt;

class Account 
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
     * Add an address
     * 
     * Add an address to the shopper's account
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest $request
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\AccountAddressCreateResponse
     */
	public function addAddress(
        \bolt_dev\bolt\Models\Operations\AccountAddressCreateRequest $request,
        \bolt_dev\bolt\Models\Operations\AccountAddressCreateSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\AccountAddressCreateResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account/addresses');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "addressListing", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountAddressCreateResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->addressListing = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\AddressListing', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountAddressCreate400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Add a payment method to a shopper's Bolt account Wallet.
     * 
     * Add a payment method to a shopper's Bolt account Wallet. For security purposes, this request must come from
     * your backend because authentication requires the use of your private key.<br />
     * **Note**: Before using this API, the credit card details must be tokenized using Bolt's JavaScript library function,
     * which is documented in [Install the Bolt Tokenizer](https://help.bolt.com/developers/references/bolt-tokenizer).
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodRequest $request
     * @param \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodResponse
     */
	public function addPaymentMethod(
        \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodRequest $request,
        \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account/payment-methods');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "paymentMethodCreditCard", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountAddPaymentMethodResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentMethodCreditCard = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\PaymentMethodCreditCard', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete an existing address
     * 
     * Delete an existing address. Deleting an address does not invalidate transactions or
     * shipments that are associated with it.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressDeleteRequest $request
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressDeleteSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\AccountAddressDeleteResponse
     */
	public function deleteAddress(
        ?\bolt_dev\bolt\Models\Operations\AccountAddressDeleteRequest $request,
        \bolt_dev\bolt\Models\Operations\AccountAddressDeleteSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\AccountAddressDeleteResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account/addresses/{id}', \bolt_dev\bolt\Models\Operations\AccountAddressDeleteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountAddressDeleteResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Edit an existing address
     * 
     * Edit an existing address on the shopper's account. This does not edit addresses
     * that are already associated with other resources, such as transactions or
     * shipments.
     * 
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressEditRequest $request
     * @param \bolt_dev\bolt\Models\Operations\AccountAddressEditSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\AccountAddressEditResponse
     */
	public function editAddress(
        \bolt_dev\bolt\Models\Operations\AccountAddressEditRequest $request,
        \bolt_dev\bolt\Models\Operations\AccountAddressEditSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\AccountAddressEditResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account/addresses/{id}', \bolt_dev\bolt\Models\Operations\AccountAddressEditRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "addressListing", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountAddressEditResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->addressListing = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\AddressListing', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountAddressEdit400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Determine the existence of a Bolt account
     * 
     * Determine whether or not an identifier is associated with an existing Bolt account.
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountExistsRequest $request
     * @return \bolt_dev\bolt\Models\Operations\AccountExistsResponse
     */
	public function exists(
        ?\bolt_dev\bolt\Models\Operations\AccountExistsRequest $request,
    ): \bolt_dev\bolt\Models\Operations\AccountExistsResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account/exists');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\bolt_dev\bolt\Models\Operations\AccountExistsRequest::class, $request, null));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountExistsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve account details
     * 
     * Retrieve a shopper's account details, such as addresses and payment information
     * 
     * @param \bolt_dev\bolt\Models\Operations\AccountGetRequest $request
     * @param \bolt_dev\bolt\Models\Operations\AccountGetSecurity $security
     * @return \bolt_dev\bolt\Models\Operations\AccountGetResponse
     */
	public function get(
        ?\bolt_dev\bolt\Models\Operations\AccountGetRequest $request,
        \bolt_dev\bolt\Models\Operations\AccountGetSecurity $security,
    ): \bolt_dev\bolt\Models\Operations\AccountGetResponse
    {
        $baseUrl = Utils\Utils::templateUrl($this->sdkConfiguration->getServerUrl(), $this->sdkConfiguration->getServerDefaults());
        $url = Utils\Utils::generateUrl($baseUrl, '/account');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \bolt_dev\bolt\Models\Operations\AccountGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->account = $serializer->deserialize((string)$httpResponse->getBody(), 'bolt_dev\bolt\Models\Shared\Account', 'json');
            }
        }

        return $response;
    }
}
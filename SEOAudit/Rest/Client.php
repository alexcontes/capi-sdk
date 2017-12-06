<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace SEOAudit\Rest;

use SEOAudit\Exceptions\ConfigurationException;
use SEOAudit\Exceptions\SEOAuditException;
use SEOAudit\Http\Client as HttpClient;
use SEOAudit\Http\CurlClient;
use SEOAudit\VersionInfo;

/**
 * A client for accessing the SEOAudit API.
 * 
 * @property \SEOAudit\Rest\Domdetailer domdetailer
 */
class Client {
    const ENV_API_KEY = "SEOAUDIT_ACCOUNT_SID";

    protected $api_key;
    protected $httpClient;
    protected $env;
    protected $endpoint;

    /**
     * Initializes the SEOAudit Client
     * 
     * @param string $api_key API Key to authenticate with
     * @param \SEOAudit\Http\Client $httpClient HttpClient, defaults to CurlClient
     * @param string $env Environment to use
     */
    public function __construct($api_key = null, HttpClient $httpClient = null, $env = "production") {
        if (is_null($environment)) {
            $environment = $_ENV;
        }

        $this->api_key = $api_key;
        
        if ($httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new CurlClient();
        }

        $this->env = $env;

        switch ($env) {
            case "production";
                $endpoint = "http://seoaudit.us-east-1.elasticbeanstalk.com/";
            break;

            case "dev":
                $endpoint = "http://seoaudit.dev/";
            break;
        }

        $endpoint .= "api/v".VersionInfo::Major;
        $this->endpoint = $endpoint;
    }

    /**
    * Makes a GET request to the SEOAudit API
    */
    public function get($uri, $params = array(), $data = array(), $headers = array(), $api_key = null, $timeout = null) {
        return $this->request("GET", $uri, $params, $data, $headers, $api_key, $timeout);
    }

    /**
    * Makes a POST request to the SEOAudit API
    */
    public function post($uri, $params = array(), $data = array(), $headers = array(), $api_key = null, $timeout = null) {
        return $this->request("POST", $uri, $params, $data, $headers, $api_key, $timeout);
    }

    /**
     * Makes a request to the SEOAudit API using the configured http client
     * Authentication information is automatically added if none is provided
     * 
     * @param string $method HTTP Method
     * @param string $uri Fully qualified url
     * @param string[] $params Query string parameters
     * @param string[] $data POST body data
     * @param string[] $headers HTTP Headers
     * @param string $api_key API Key for Authentication
     * @param int $timeout Timeout in seconds
     * @return \SEOAudit\Http\Response Response from the SEOAudit API
     */
    public function request($method, $uri, $params = array(), $data = array(), $headers = array(), $api_key = null, $timeout = null) {
        $api_key = $api_key ? $api_key : $this->api_key;

        $headers['User-Agent'] = 'seoaudit-sdk/' . VersionInfo::string() .
                                 ' (PHP ' . phpversion() . ')';
        $headers['Accept-Charset'] = 'utf-8';

        if ($method == 'POST' && !array_key_exists('Content-Type', $headers)) {
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if (!array_key_exists('Accept', $headers)) {
            $headers['Accept'] = 'application/json';
        }

        $uri = $this->endpoint.$uri;

        return $this->getHttpClient()->request(
            $method,
            $uri,
            $params,
            $data,
            $headers,
            $api_key,
            $timeout
        );
    }

    /**
     * Retrieve the API Key
     * 
     * @return string Current API Key
     */
    public function getApiKey() {
        return $this->api_key;
    }

    /**
     * Retrieve the HttpClient
     * 
     * @return \SEOAudit\Http\Client Current HttpClient
     */
    public function getHttpClient() {
        return $this->httpClient;
    }

    /**
     * Retrieve the Environment
     * 
     * @return string Current Environment
     */
    public function getEnv() {
        return $this->env;
    }

    /**
     * Set the HttpClient
     * 
     * @param \SEOAudit\Http\Client $httpClient HttpClient to use
     */
    public function setHttpClient(HttpClient $httpClient) {
        $this->httpClient = $httpClient;
    }
}
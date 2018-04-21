<?php

class Payeezy_Client
{
    /**
     * @var string The Payeezy API key to be used for requests.
     */
    public $apiKey;

    /**
     * @var string The Payeezy API Secret to be used for requests.
     */
    public $apiSecret;

    /**
     * @var string The Payeezy Merchant Token to be used for requests.
     */
    public $merchantToken;

    /**
     * @var string The Payeezy URL to be used for requests.
     */
    public $url;

    const VERSION = '1.0.0';

    /**
     * @return string The API key used for requests.
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string The API key used for requests.
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;
    }

    /**
     * @return string The API key used for requests.
     */
    public function getMerchantToken()
    {
        return $this->merchantToken;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public function setMerchantToken($merchantToken)
    {
        $this->merchantToken = $merchantToken;
    }


    /**
     * @return string The API key used for requests.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the API key to be used for requests.
     *
     * @param string $apiKey
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}

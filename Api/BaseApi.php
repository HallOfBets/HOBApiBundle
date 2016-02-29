<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ClientInterface;

/**
 * Class BaseApi
 * @package HOB\ApiBundle\Api
 */
abstract class BaseApi
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * HOBAppServiceApi constructor.
     * @param ClientInterface $client
     * @param $endpoint
     */
    public function __construct(ClientInterface $client, $endpoint)
    {
        $this->client   = $client;
        $this->endpoint = $endpoint;
    }

    /**
     * Check endpoint parameter of Api
     */
    protected function checkEndpoint()
    {
        if(is_null($this->endpoint)) {
            throw new \InvalidArgumentException(sprintf("Missing endpoint parameter for Api '%s'", get_class($this)));
        }
    }

    /**
     * @param $url
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($url, array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.$url, $parameters, $headers);
    }

    /**
     * @param $url
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function post($url, array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->post($this->endpoint.$url, $parameters, $headers);
    }
}

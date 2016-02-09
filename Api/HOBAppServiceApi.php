<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ApiInterface;
use HOB\ApiBundle\Model\ClientInterface;

/**
 * Class HOBAppServiceApi
 * @package HOB\ApiBundle\Api
 */
class HOBAppServiceApi implements ApiInterface
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
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listApps(array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/applications', $parameters, $headers);
    }

    /**
     * @param $id
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showApp($id, array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/applications/'. (int) $id, [], $headers);
    }

    /**
     * Check endpoint parameter of Api
     */
    private function checkEndpoint()
    {
        if(is_null($this->endpoint)) {
            throw new \InvalidArgumentException(sprintf("Missing endpoint parameter for Api '%s'", get_class($this)));
        }
    }
}

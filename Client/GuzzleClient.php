<?php
namespace HOB\ApiBundle\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use HOB\ApiBundle\Model\ClientInterface;

/**
 * Class GuzzleClient
 * @package HOB\ApiBundle\Client
 */
class GuzzleClient implements ClientInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * GuzzleClient constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @inheritdoc
     */
    public function get($url, array $parameters = [], array $headers = [])
    {
        $request    = new Request('GET', $url, $headers);
        $response   = $this->client->send($request, ['query' => $parameters]);

        return $response;
    }

    /**
     * @inheritdoc
     */
    public function post($url, array $parameters = [], array $headers = [])
    {
        $request    = new Request('POST', $url, $headers);
        $response   = $this->client->send($request, ['json' => $parameters]);

        return $response;
    }
}

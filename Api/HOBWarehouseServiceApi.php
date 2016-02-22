<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ApiInterface;
use HOB\ApiBundle\Model\ClientInterface;

/**
 * Class HOBWarehouseServiceApi
 * @package HOB\ApiBundle\Api
 */
class HOBWarehouseServiceApi implements ApiInterface
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
    public function getSports(array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/sports', $parameters, $headers);
    }

    /**
     * @param $sportId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getSportTournaments($sportId, array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/sports/'.$sportId.'/tournaments', $parameters, $headers);
    }

    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTournaments(array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/tournaments', $parameters, $headers);
    }

    /**
     * @param $tournamentId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTournamentMatches($tournamentId, array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/tournaments/'.$tournamentId.'/matches', $parameters, $headers);
    }

    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getMatches(array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/matches', $parameters, $headers);
    }

    /**
     * @param $matchId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getMatch($matchId, array $parameters = [], array $headers = [])
    {
        $this->checkEndpoint();

        return $this->client->get($this->endpoint.'/matches/'.$matchId, $parameters, $headers);
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

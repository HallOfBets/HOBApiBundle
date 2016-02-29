<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ApiInterface;

/**
 * Class HOBWarehouseServiceApi
 * @package HOB\ApiBundle\Api
 */
class HOBWarehouseServiceApi extends BaseApi implements ApiInterface
{
    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getSports(array $parameters = [], array $headers = [])
    {
        return $this->get('/sports', $parameters, $headers);
    }

    /**
     * @param $sportId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getSportTournaments($sportId, array $parameters = [], array $headers = [])
    {
        return $this->get('/sports/'.$sportId.'/tournaments', $parameters, $headers);
    }

    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTournaments(array $parameters = [], array $headers = [])
    {
        return $this->get('/tournaments', $parameters, $headers);
    }

    /**
     * @param $tournamentId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getTournamentMatches($tournamentId, array $parameters = [], array $headers = [])
    {
        return $this->get('/tournaments/'.$tournamentId.'/matches', $parameters, $headers);
    }

    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getMatches(array $parameters = [], array $headers = [])
    {
        return $this->get('/matches', $parameters, $headers);
    }

    /**
     * @param $matchId
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getMatch($matchId, array $parameters = [], array $headers = [])
    {
        return $this->get('/matches/'.$matchId, $parameters, $headers);
    }
}

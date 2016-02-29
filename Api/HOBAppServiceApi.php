<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ApiInterface;

/**
 * Class HOBAppServiceApi
 * @package HOB\ApiBundle\Api
 */
class HOBAppServiceApi extends BaseApi implements ApiInterface
{
    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listApps(array $parameters = [], array $headers = [])
    {
        return $this->get('/applications', $parameters, $headers);
    }

    /**
     * @param $id
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showApp($id, array $headers = [])
    {
        $this->checkEndpoint();

        return $this->get('/applications/'. (int) $id, [], $headers);
    }
}

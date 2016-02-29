<?php
namespace HOB\ApiBundle\Api;

use HOB\ApiBundle\Model\ApiInterface;

/**
 * Class HOBAuthServiceApi
 * @package HOB\ApiBundle\Api
 */
class HOBAuthServiceApi extends BaseApi implements ApiInterface
{
    /**
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createAccessToken(array $parameters = [], array $headers = [])
    {
        return $this->post('/accesstoken/', $parameters, $headers);
    }
}

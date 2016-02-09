<?php
namespace HOB\ApiBundle\Model;

/**
 * Interface ClientInterface
 * @package HOB\ApiBundle\Model
 */
interface ClientInterface
{
    /**
     * @param $url
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($url, array $parameters = [], array $headers = []);

    /**
     * @param $url
     * @param array $parameters
     * @param array $headers
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function post($url, array $parameters = [], array $headers = []);
}
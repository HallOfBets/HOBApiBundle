<?php
namespace HOB\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class ApiConfiguration
 * @package HOB\ApiBundle\DependencyInjection
 */
class ApiConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder    = new TreeBuilder();
        $rootNode       = $treeBuilder->root('hob_api');

        return $treeBuilder;
    }
}

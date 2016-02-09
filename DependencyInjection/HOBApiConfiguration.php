<?php
namespace HOB\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class HOBApiConfiguration
 * @package HOB\ApiBundle\DependencyInjection
 */
class HOBApiConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder    = new TreeBuilder();
        $rootNode       = $treeBuilder->root('hob_api');

        return $treeBuilder;
    }
}

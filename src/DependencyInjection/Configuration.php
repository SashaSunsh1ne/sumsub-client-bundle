<?php

namespace alexeevdv\Symfony\SumSub\DependencyInjection;

use alexeevdv\SumSub\Client;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('sumsub_client');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('base_uri')
                    ->isRequired()
                    ->defaultValue(Client::PRODUCTION_BASE_URI)
                ->end()
                ->scalarNode('app_token')
                    ->isRequired()
                ->end()
                ->scalarNode('secret_key')
                    ->isRequired()
                ->end()
        ;

        return $treeBuilder;
    }
}

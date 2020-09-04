<?php

namespace alexeevdv\Symfony\SumSub\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class SumSubClientExtension extends Extension
{
    public function getAlias()
    {
        return 'sumsub_client';
    }

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $container->setParameter('sumsub_client.base_uri', $config['base_uri']);
        $container->setParameter('sumsub_client.app_token', $config['app_token']);
        $container->setParameter('sumsub_client.secret_key', $config['secret_key']);
    }
}

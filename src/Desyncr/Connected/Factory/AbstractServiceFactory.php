<?php
namespace Desyncr\Connected\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

abstract class AbstractServiceFactory implements FactoryInterface {
    protected $config = array();

    public function createService(ServiceLocatorInterface $serviceLocator) {

        $configuration = $serviceLocator->get('Config');
        $this->config = isset($configuration['connected']) ? $configuration['connected'] : array();
        return $this->config;

    }

    public function getConfig($data = null) {
        $configuration = $this->config[$this->configuration_key] ? $this->config[$this->configuration_key] : array();
        if ($data && isset($configuration[$data])) {
            return $configuration[$data];
        } else {
            return array();
        }

        return $configuration;
    }
}

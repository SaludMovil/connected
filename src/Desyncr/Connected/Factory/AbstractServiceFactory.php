<?php
namespace Desyncr\Connected\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AbstractServiceFactory implements FactoryInterface {
    protected $config = array();

    public function createService(ServiceLocatorInterface $serviceLocator) {

        $configuration = $serviceLocator->get('Config');
        $this->config = isset($configuration['connected']) ? $configuration['connected'] : array();
        return $this->config;

    }
}

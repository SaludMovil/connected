<?php
/**
 * Desyncr\Connected\Factory
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Connected\Factory
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\Connected\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Desyncr\Connected\Factory
 *
 * @category General
 * @package  Desyncr\Connected\Factory
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://docs.saludmovil.net
 */
abstract class AbstractServiceFactory implements
    FactoryInterface
{
    /**
     * @var array
     */
    protected $config = array();

    /**
     * createService
     *
     * @param ServiceLocatorInterface $serviceLocator Service Manager
     *
     * @return Object
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $configuration = $serviceLocator->get('Config');
        $this->config = isset($configuration['connected']) ?
            $configuration['connected'] : array();

        return $this->config;
    }

    /**
     * getConfig
     *
     * @param mixed $data Data
     *
     * @return array
     */
    public function getConfig($data = null)
    {
        $configuration = $this->config[$this->configuration_key] ?
            $this->config[$this->configuration_key] : array();

        if ($data && isset($configuration[$data])) {
            return $configuration[$data];
        } else {
            return array();
        }
    }
}

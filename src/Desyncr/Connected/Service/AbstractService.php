<?php
/**
 * Desyncr\Connected\Service
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Connected\Service
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\Connected\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\AbstractOptions;

/**
 * Class AbstractService
 *
 * @category General
 * @package  Desyncr\Connected\Service
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
abstract class AbstractService implements
    ServiceInterface,
    ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $sm;
    /**
     * @var AbstractOptions
     */
    protected $options;

    /**
     * setServiceManager
     *
     * @param ServiceLocatorInterface $serviceManager Service Manager
     *
     * @return mixed
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceManager)
    {
        $this->sm = $serviceManager;
    }

    /**
     * getServiceManager
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->sm;
    }

    /**
     * setOptions
     *
     * @param AbstractOptions $options Options array
     *
     * @return null
     */
    public function setOptions(AbstractOptions $options)
    {
        $this->options = $options;
    }

    /**
     * getOptions
     *
     * @return AbstractOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}

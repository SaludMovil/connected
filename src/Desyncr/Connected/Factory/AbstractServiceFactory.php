<?php
/**
 * Desyncr\Conencted\Factory
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Conencted\Factory
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\Connected\Factory;

use Desyncr\Connected\Service\ServiceBase;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class AbstractServiceFactory
 *
 * @category General
 * @package  Desyncr\Connected\Factory
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
abstract class AbstractServiceFactory implements FactoryInterface
{
    /**
     * createService
     *
     * @param ServiceLocatorInterface $serviceLocator Service Manager
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \Zend\Stdlib\AbstractOptions $options */
        $options = $serviceLocator->get('Desyncr\Connected\Options\ServiceOptions');
        return new ServiceBase($serviceLocator, $options);
    }
}

<?php
/**
 * Desyncr\ConnectedTest
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\ConnectedTest
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\ConnectedTest\Service;

use Desyncr\Connected\Service\AbstractService;

/**
 * Class AbstractServiceTest
 *
 * @category General
 * @package  Desyncr\ConnectedTest\Service
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractService
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $mock = $this->getMockForAbstractClass(
            'Desyncr\Connected\Service\ServiceBase'
        );
        $mock->expects($this->any())
            ->method('dispatch')
            ->will($this->returnValue(1));

        $this->object = $mock;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::setOptions
     */
    public function testSetOptions()
    {
        $config = array(
            'timeout' => 10,
        );
        $serviceOptionsMock = $this->getMock(
            'Desyncr\Connected\Options\ServiceOptions',
            array('setTimeout', 'getTimeout')
        );
        $serviceOptionsMock->expects($this->once())
            ->method('setTimeout')
            ->with($this->equalTo($config['timeout']));

        $serviceOptionsMock->setFromArray($config);
        $this->object->setOptions($serviceOptionsMock);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::setOptions
     */
    public function testSetOptionsNestedArray()
    {
        $config = array(
            'names' => array(
                'John Doe',
                'Jane Doe',
                'Alice',
                'Bob'
            )
        );

        $serviceOptionsMock = $this->getMock(
            'Desyncr\Connected\Options\ServiceOptions',
            array('setNames', 'getNames')
        );
        $serviceOptionsMock->expects($this->once())
            ->method('setNames')
            ->with($this->equalTo($config['names']));
        $serviceOptionsMock->setFromArray($config);

        $this->object->setOptions($serviceOptionsMock);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::setOptions
     */
    public function testSetOptionsNestedArrayLevel()
    {
        $config = array(
            'servers' => array(
                'frontend' => array(
                    array('host' => '127.0.0.1', 'port' => 80),
                    array('host' => '127.0.0.1', 'port' => 81)
                ),
                'backend' => array(
                    array('host' => '127.0.0.1', 'port' => 8888)
                )
            )
        );

        $serviceOptionsMock = $this->getMock(
            'Desyncr\Connected\Options\ServiceOptions',
            array('setServers', 'getServers')
        );
        $serviceOptionsMock->expects($this->once())
            ->method('setServers')
            ->with($this->equalTo($config['servers']));
        $serviceOptionsMock->setFromArray($config);

        $this->object->setOptions($serviceOptionsMock);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::getOptions
     */
    public function testGetOption()
    {
        $config = array(
            'servers' => array(
                'frontend' => array(
                    array('host' => '127.0.0.1', 'port' => 80)
                )
            )
        );

        $serviceOptionsMock = $this->getMock(
            'Desyncr\Connected\Options\ServiceOptions',
            array('setServers', 'getServers')
        );
        $serviceOptionsMock->expects($this->once())
            ->method('setServers')
            ->with($this->equalTo($config['servers']));

        $serviceOptionsMock->expects($this->once())
            ->method('getServers')
            ->will($this->returnValue($config['servers']));

        $serviceOptionsMock->setFromArray($config);

        $this->object->setOptions($serviceOptionsMock);

        $this->assertEquals($this->object->getOptions()->getServers(), $config['servers']);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::add
     */
    public function testAdd()
    {
        $key = 'frame.service.key';
        $frame = array();
        $frameObject = $this->object->add($key, $frame);

        $this->assertEquals('Desyncr\Connected\Frame\BaseFrame', get_class($frameObject));
        $this->assertEquals($frameObject->getId(), $key);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::add
     */
    public function testAddInvalidJob()
    {
        $key = 'frame.service.key';
        $frame = new \StdClass;
        $this->setExpectedException('Exception');
        $this->object->add($key, $frame);
    }

    /**
     * @covers Desyncr\Connected\Service\AbstractService::dispatch
     */

    public function testDispatch()
    {
        $key = 'frame.service.key';
        $frame = array();
        $mock = $this->getMock(
            'Desyncr\Connected\Service\ServiceBase',
            array('dispatch')
        );
        $mock->expects($this->once())
            ->method('dispatch')
            ->will($this->returnValue(1));

        $mock->add($key, $frame);

        $this->assertEquals(1, $mock->dispatch());
    }
}

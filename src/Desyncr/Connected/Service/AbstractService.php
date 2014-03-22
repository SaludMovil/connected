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

use Desyncr\Connected\Frame\BaseFrame;

/**
 * Desyncr\Connected\Service
 *
 * @category General
 * @package  Desyncr\Connected\Service
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://docs.saludmovil.net
 */
abstract class AbstractService implements ServiceInterface
{
    /**
     * @var array
     */
    protected $frames = array();

    /**
     * setOptions
     *
     * @param Array $options Options
     *
     * @return null
     */
    public function setOptions($options)
    {
        foreach ($options as $k => $v) {
            $this->$k = $v;
        }
    }

    /**
     * getOption
     *
     * @param String $option Options
     *
     * @return mixed
     */
    public function getOption($option)
    {
        if (isset($this->$option)) {
            return $this->$option;
        }
    }

    /**
     * add
     *
     * @param String $key    Key id
     * @param Object $frame  Frame object
     * @param null   $target Target
     *
     * @return BaseFrame
     */
    public function add($key, $frame, $target = null)
    {
        if (!is_object($frame)) {
            $frame = new BaseFrame($frame);
        }

        $frame->setId($key);
        $this->frames[] = $frame;
        return $frame;
    }
}

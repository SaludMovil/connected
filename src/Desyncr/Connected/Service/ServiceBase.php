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
use Desyncr\Connected\Frame\FrameInterface;

/**
 * Class ServiceBase
 *
 * @category General
 * @package  Desyncr\Connected\Service
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
class ServiceBase extends AbstractService
{
    /**
     * @var array
     */
    protected $frames = array();

    /**
     * add
     *
     * @param $key
     * @param $frame
     *
     * @return mixed
     * @throws \Exception
     */
    public function add($key, $frame) {

        if (!is_object($frame)) {
            $frame = new BaseFrame($frame);
        }

        if (!$frame instanceOf FrameInterface) {
            throw new \Exception('Frame must implement FrameInterface');
        }

        $frame->setId($key);
        array_push($this->frames, $frame);

        return $frame;
    }

    /**
     * dispatch
     *
     * @return mixed
     */
    public function dispatch()
    {
    }
}
 
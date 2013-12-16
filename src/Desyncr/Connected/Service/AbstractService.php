<?php
namespace Desyncr\Connected\Service;
use \Desyncr\Connected\Frame\BaseFrame;

abstract class AbstractService implements ServiceInterface {
    protected $frames = array();

    public function setOptions($options) {
        foreach ($options as $k => $v) {
            $this->$k = $v;
        }
    }

    public function add($key, $frame) {

        if (!is_object($frame)) {
            $frame = new BaseFrame($frame);
        }
        $frame->setId($key);

        if (!$frame instanceOf \Desyncr\Connected\Frame\FrameInterface) {
            throw new \Exception('Frame must implement FrameInterface');
        }

        $this->frames[] = $frame;
    }
}

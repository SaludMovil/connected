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

    public function getOption($option) {
        if (isset($this->$option)) {
            return $this->$option;
        }
    }


    public function add($key, $frame) {

        if (!is_object($frame)) {
            $frame = new BaseFrame($frame);
        }

        if (!$frame instanceOf \Desyncr\Connected\Frame\FrameInterface) {
            throw new \Exception('Frame must implement FrameInterface');
        }

        $frame->setId($key);

        $this->frames[] = $frame;

        return $frame;
    }
}

<?php
namespace Desyncr\Connected\Service;
interface ServiceInterface {
    public function setOptions($options);
    public function add($key, $job, $target);
    public function dispatch();
}

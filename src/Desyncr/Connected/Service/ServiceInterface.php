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

/**
 * Interface ServiceInterface
 *
 * @package Desyncr\Connected\Service
 */
interface ServiceInterface
{
    /**
     * setOptions
     *
     * @param Array $options Options
     *
     * @return mixed
     */
    public function setOptions($options);

    /**
     * add
     *
     * @param String $key    Key
     * @param Object $job    Job object
     * @param mixed  $target Target
     *
     * @return mixed
     */
    public function add($key, $job, $target);

    /**
     * dispatch
     *
     * @return mixed
     */
    public function dispatch();
}

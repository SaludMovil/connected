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
     * add
     *
     * @param $key
     * @param $job
     *
     * @return mixed
     */
    public function add($key, $job);

    /**
     * dispatch
     *
     * @return mixed
     */
    public function dispatch();
}

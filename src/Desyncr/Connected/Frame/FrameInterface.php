<?php
/**
 * Desyncr\Connected\Frame
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Connected\Frame
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */
namespace Desyncr\Connected\Frame;

/**
 * Interface FrameInterface
 *
 * @package Desyncr\Connected\Frame
 */
interface FrameInterface
{
    /**
     * getId
     *
     * @return mixed
     */
    public function getId();

    /**
     * setId
     *
     * @param $id
     *
     * @return mixed
     */
    public function setId($id);

    /**
     * get
     *
     * @param $k
     *
     * @return mixed
     */
    public function get($k);

    /**
     * set
     *
     * @param $k
     * @param $v
     *
     * @return mixed
     */
    public function set($k, $v);
}

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
     * serialize
     *
     * @return mixed
     */
    public function serialize();

    /**
     * getId
     *
     * @return mixed
     */
    public function getId();

    /**
     * setId
     *
     * @param String $id Id
     *
     * @return mixed
     */
    public function setId($id);

    /**
     * get
     *
     * @param String $k Key
     *
     * @return mixed
     */
    public function get($k);

    /**
     * set
     *
     * @param String $k Key
     * @param mixed  $v Value
     *
     * @return mixed
     */
    public function set($k, $v);
}

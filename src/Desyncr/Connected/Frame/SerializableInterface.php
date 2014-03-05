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
 * Interface SerializableInterface
 *
 * @package Desyncr\Connected\Frame
 */
interface SerializableInterface
{
    /**
     * serialize
     *
     * @return mixed
     */
    public function serialize();
}
 
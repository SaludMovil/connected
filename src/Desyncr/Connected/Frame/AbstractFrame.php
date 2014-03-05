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
 * Class AbstractFrame
 *
 * @category General
 * @package  Desyncr\Connected\Frame
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @link     https://github.com/desyncr
 */
abstract class AbstractFrame implements
    FrameInterface,
    SerializableInterface
{
    /**
     * @var
     */
    protected $id;

    /**
     * Constructor
     *
     * @param null $arr
     */
    public function __construct($arr = null)
    {
        if (is_array($arr)) {
            foreach ($arr as $k => $v) {
                $this->set($k, $v);
            }
        }
    }

    /**
     * getId
     *
     * @return String
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param String $id Id
     *
     * @return mixed
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * serialize
     *
     * @return String
     */
    public function serialize()
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * set
     *
     * @param String $k Key
     * @param mixed  $v Value
     *
     * @return mixed
     */
    public function set($k, $v)
    {
        $this->$k = $v;
    }

    /**
     * get
     *
     * @param String $k Key
     *
     * @return mixed
     */
    public function get($k)
    {
        return isset($this->$k) ? $this->$k : null;
    }
}

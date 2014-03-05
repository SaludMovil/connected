<?php
/**
 * Desyncr\Connected
 *
 * PHP version 5.4
 *
 * @category General
 * @package  Desyncr\Connected
 * @author   Dario Cavuotti <dc@syncr.com.ar>
 * @license  https://www.gnu.org/licenses/gpl.html GPL-3.0+
 * @version  GIT:<>
 * @link     https://github.com/desyncr
 */

return array(
    'factories' => array(
        'Desyncr\Connected\Service\AbstractService'
        => 'Desyncr\Connected\Factory\AbstractServiceFactory',

        'Desyncr\Connected\Options\ServiceOptions'
        => 'Desyncr\Connected\Factory\ServiceOptionsFactory'
    )
);

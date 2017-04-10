<?php
/**
 * Tiny Api Framework.
 *
 * @link https://github.com/cizel/tiny
 *
 * @copyright 2017-2017 i@cizel.cn
 */

namespace Exception;

class YafException extends \Yaf_Exception
{
    public function getName()
    {
        return 'Yaf Exception';
    }
}

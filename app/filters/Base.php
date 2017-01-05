<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Base.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Filters
 *
 * Date: 2017/1/3 下午10:39
 */

namespace App\Filters;

use stdClass;

class Base
{
    static public function uuid(stdClass $context)
    {
        if(isset($context->userdata->uuid)){
            return $context->userdata->uuid;
        } else {
            $uuid = microtime(true);
            return $uuid;
        }
    }

    static public function stat(stdClass $context) {
        if (isset($context->userdata->starttime)) {
            $t = microtime(true) - $context->userdata->starttime;
            self::log(self::uuid($context) . ' TimeStat', [$t]);
        }
        else {
            $context->userdata->starttime = microtime(true);
        }
    }

    static public function log($message, $data, $type = 'info')
    {
        di('log')->$type($message, [$data]);
    }
}
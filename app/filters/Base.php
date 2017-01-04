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
    /**
     * @param stdClass $context
     *
     * @return mixed
     */
    static public function uuid(stdClass $context)
    {
        if(isset($context->userdata->uuid)){
            return $context->userdata->uuid;
        } else {
            $uuid = microtime(true);
            return $uuid;
        }
    }

    /**
     * @param stdClass $context
     */
    static public function stat(stdClass $context) {
        if (isset($context->userdata->starttime)) {
            $t = microtime(true) - $context->userdata->starttime;
            di('log')->info(self::uuid($context) . ' TimeStat', [$t]);
        }
        else {
            $context->userdata->starttime = microtime(true);
        }
    }

    /**
     * @param        $message
     * @param        $data
     * @param string $type
     */
    static public function log($message, $data, $type = 'info')
    {
        di('log')->$type($message, [$data]);
    }
}
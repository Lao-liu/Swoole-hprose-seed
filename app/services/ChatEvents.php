<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: ChatEvents.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2017/1/3 下午10:26
 */

namespace App\Services;

use stdClass;
use App\Filters\Base;

class ChatEvents
{
    static public function beforeInvoke ($name, &$args, $byref, stdClass $context)
    {
        Base::log('onAfterInvoke', [$name, $args, $byref, $context]);
    }

    static public function afterInvoke ($name, &$args, $byref, &$result, \stdClass $context)
    {
        Base::log('onAfterInvoke', [$name, $args, $byref, $result, $context]);
    }

    static public function sendError(&$error, stdClass $context)
    {
        Base::log('onSendError', [$error, $context]);
    }

    static public function sendHeader(stdClass $context)
    {
        Base::log('onSendHeader', [$context]);
    }

    static public function accept(stdClass $context)
    {
        Base::log('onAccept', [$context]);
    }

    static public function close(stdClass $context)
    {
        Base::log('onClose', [$context]);
    }

    static public function error($error, stdClass $context)
    {
        Base::log('onError', [$error, $context]);
    }
}
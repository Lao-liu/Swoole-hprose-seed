<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Chat.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2017/1/2 下午8:04
 */

namespace App\Services;

use stdClass;
use App\Filters\Base;

class Chat
{
    public function getAllUsers(stdClass $context)
    {
        Base::log("getAllUsers", [$context]);
        $context->clients->idlist('message');
    }

    public function sendMessage($from, $to, $message, stdClass $context)
    {
        Base::log("sendMessage", [$from, $to, $message, $context]);
        $context->clients->push('message', $to, $from . ' talk to me: ' . $message);
        $context->clients->push('message', $from, 'I talk to ' . $to . ': ' . $message);
    }

    public function broadcast($from, $message, stdClass $context)
    {
        Base::log("broadcast", [$from, $message, $context]);
        $context->clients->push('message', $from . ' said: ' . $message);
    }
}
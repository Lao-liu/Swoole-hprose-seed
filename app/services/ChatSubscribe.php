<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: ChatSubscribe.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2017/1/2 下午8:11
 */

namespace App\Services;

use Hprose\Service;

class ChatSubscribe
{
    static public function subscribe($topic, $id, Service $service)
    {
        if($topic == 'message'){
            $service->push('message', $id . ' is online.');
        } else {
            $service->push('updateUsers', $service->idlist('message'));
        }
    }

    static public function unSubscribe($topic, $id, Service $service)
    {
        if($topic == 'message'){
            $service->push('message', $id . ' is offline.');
        } else {
            $service->push('updateUsers', $service->idlist('message'));
        }
    }
}
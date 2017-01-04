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

use Hprose\Swoole\WebSocket\Server;

class ChatSubscribe
{
    static public function subscribe($id, Server $server)
    {
        $server->push('message', $id . ' is online.');
        $server->push('updateUsers', $server->idlist('message'));
    }

    static public function unSubscribe($id, Server $server)
    {
        $server->push('message', $id . ' is offline.');
        $server->push('updateUsers', $server->idlist('message'));
    }
}
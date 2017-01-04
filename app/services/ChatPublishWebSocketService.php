<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Start.php
 *
 * This is the WebSocket Service Demo
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2016/12/28 下午9:32
 */

namespace App\Services;

use Exception;
use App\Filters\Base;
use Hprose\Swoole\WebSocket\Server as WebSocketServer;

class ChatPublishWebSocketService
{
    static public function publish()
    {
        if(!extension_loaded('swoole')){
            throw new Exception("This application must running on Swoole extension...");
        }

        $server = new WebSocketServer("ws://192.168.1.25:5555");
        $server->passContext = true;
        $server->debug = true;
//        $server->onAccept = 'App\Services\ChatEvents::accept';
//        $server->onClose = 'App\Services\ChatEvents::close';
        $server->onError = 'App\Services\ChatEvents::error';
        $server->publish('message');
        $server->publish('updateUsers');
        $server->addInstanceMethods(new Chat(), '', '', ['oneway' => true]);
        $server->onSubscribe = function($topic, $id) use ($server){
            Base::log('onSubscribe', ["topic" => $topic, "id"=>$id, "server"=>$server]);
            ChatSubscribe::subscribe($id, $server);
        };
        $server->onUnsubscribe = function($topic, $id) use ($server){
            Base::log('onUnsubscribe', ["topic" => $topic, "id"=>$id]);
            ChatSubscribe::unSubscribe($id, $server);
        };

        return $server->start();
    }
}
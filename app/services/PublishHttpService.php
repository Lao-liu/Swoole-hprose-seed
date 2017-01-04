<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: PublishHttpService.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2017/1/2 下午8:17
 */

namespace App\Services;

use App\Middleware\Logger as MLogger;
use App\Filters\Logger as FLogger;
use Hprose\Http\Server as HttpServer;

class PublishHttpService
{
    /**
     * 发布Hprose服务
     */
    static public function publish()
    {
        $server = new HttpServer();
        $server->addFilter(new FLogger());
        $server->addInvokeHandler([new MLogger(), 'handle']);
        $server->addInstanceMethods(new UserService(), '', 'user');

        return $server->start();
    }
}
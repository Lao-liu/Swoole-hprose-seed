<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: server.php
 *
 * @author:  Liujian <laoliu@lanmv.com>
 *
 * Date: 2016/12/28 下午3:41
 */

use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;
use App\Services\ChatPublishWebSocketService;

define('BASE_DIR', dirname(__FILE__));
define('APP_PATH', BASE_DIR . '/app');
define('STORAGE_PATH', BASE_DIR . '/storage');

try {
    $di = new FactoryDefault();
    include APP_PATH . '/config/services.php';
    $config = $di->getConfig();
    include APP_PATH . '/config/loader.php';
    $app = new Micro($di);
    $app->get('/', function(){
        return ChatPublishWebSocketService::publish();
    });
    $app->post('/', function(){
        return ChatPublishWebSocketService::publish();
    });
    $app->handle();
} catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString() . PHP_EOL;
}
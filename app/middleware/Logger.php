<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Logger.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Middleware
 *
 * Date: 2016/12/28 下午9:48
 */

namespace App\Middleware;

use App\Filters\Base;

class Logger
{
    public function handle($name, array &$args, \stdClass $context, \Closure $next)
    {
        $id = isset($context->uuid) ? $context->uuid . ' ' : "";
        Base::log($id . $name, $args);
        return $next($name, $args, $context);
    }
}
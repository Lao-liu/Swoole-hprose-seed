<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Cache.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Middleware
 *
 * Date: 2017/1/5 下午3:52
 */

namespace App\Middleware;

use Closure;
use stdClass;

class Cache
{
    public function handle($name, array &$args, stdClass $context, Closure $next)
    {
        if (isset($context->userdata->cache)) {
            $key = 'api-'.$name.'-'.md5(hprose_serialize($args));
            if (di('cache')::exists($key)) {
                return di('cache')::get($key);
            }
            else {
                $result = $next($name, $args, $context);
                di('cache')::save($key, $result, 3600);
            }
            return $result;
        }
        return $next($name, $args, $context);
    }
}
<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Cache.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package app\filters
 *
 * Date: 2016/12/28 下午6:14
 */

namespace App\Filters;

use Hprose\Filter;
use stdClass;

class Cache implements Filter
{
    public function inputFilter($data, stdClass $context)
    {
        // TODO: Implement inputFilter() method.
        return $data;
    }

    public function outputFilter($data, stdClass $context)
    {
        // TODO: Implement outputFilter() method.
        return $data;
    }
}
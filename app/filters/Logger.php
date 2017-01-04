<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Logger.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Filters
 *
 * Date: 2016/12/28 下午10:28
 */

namespace App\Filters;

use Hprose\Filter;
use stdClass;

class Logger implements Filter
{
    public function inputFilter($data, stdClass $context)
    {
        Base::log(Base::uuid($context) . " Input", [$data]);

        return $data;
    }

    public function outputFilter($data, stdClass $context)
    {
        Base::log(Base::uuid($context)." Output", [$data]);

        return $data;
    }
}
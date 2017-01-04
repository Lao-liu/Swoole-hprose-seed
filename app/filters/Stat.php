<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Stat.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Filters
 *
 * Date: 2017/1/3 下午10:37
 */

namespace App\Filters;

use Hprose\Filter;
use stdClass;

class Stat implements Filter
{
    public function inputFilter($data, stdClass $context)
    {
        Base::stat($context);
        return $data;
    }

    public function outputFilter($data, stdClass $context)
    {
        Base::stat($context);
        return $data;
    }
}
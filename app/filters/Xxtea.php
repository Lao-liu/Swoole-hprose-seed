<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Xxtea.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Filters
 *
 * Date: 2016/12/28 下午6:15
 */

namespace App\Filters;

use Hprose\Filter;
use stdClass;

class Xxtea implements Filter
{
    public function inputFilter($data, stdClass $context)
    {
        return $data;
    }

    public function outputFilter($data, stdClass $context)
    {
        return $data;
    }
}
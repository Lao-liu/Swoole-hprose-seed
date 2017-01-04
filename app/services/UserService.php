<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: Users.php
 *
 * @author  :  Liujian <laoliu@lanmv.com>
 * @package App\Services
 *
 * Date: 2016/12/28 下午9:34
 */

namespace App\Services;

class UserService
{
    public function all()
    {
        return [
            0 => [
                "name" => "laoliu",
                "age" => 37,
                "sex" => "男"
            ],
            1 => [
                "name" => "laoliu",
                "age" => 37,
                "sex" => "男"
            ],
            2 => [
                "name" => "laoliu",
                "age" => 37,
                "sex" => "男"
            ],
            3 => [
                "name" => "laoliu",
                "age" => 37,
                "sex" => "男"
            ],
            4 => [
                "name" => "laoliu",
                "age" => 37,
                "sex" => "男"
            ],
        ];
    }
}
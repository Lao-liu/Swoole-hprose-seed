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
                "name" => "user1",
                "age" => 32,
                "sex" => "男"
            ],
            1 => [
                "name" => "user2",
                "age" => 33,
                "sex" => "女"
            ],
            2 => [
                "name" => "user3",
                "age" => 24,
                "sex" => "男"
            ],
            3 => [
                "name" => "user4",
                "age" => 25,
                "sex" => "女"
            ],
            4 => [
                "name" => "user5",
                "age" => 26,
                "sex" => "男"
            ],
        ];
    }
}
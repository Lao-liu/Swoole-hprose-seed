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
    const ENCRYPTION_KEY = '5AB485E2E3D7901A';

    public function inputFilter($data, stdClass $context)
    {
        try {
            $data = xxtea_decrypt(base64_decode($data), self::ENCRYPTION_KEY);
            return $data;
        } catch (\Exception $e) {
            throw new("Request parameter decryption failed");
        }
    }

    public function outputFilter($data, stdClass $context)
    {
        try {
            $data = base64_encode(xxtea_encrypt($data, self::ENCRYPTION_KEY));
            return $data;
        } catch (\Exception $e) {
            throw new("Request parameter decryption failed");
        }
    }
}
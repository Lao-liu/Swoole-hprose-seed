<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: misc.php
 *
 * @author:  Liujian <laoliu@lanmv.com>
 *
 * Date: 2016/12/28 下午9:11
 */

if (! function_exists('env')) {

    /**
     * This handles the the global environment variables, it acts as getenv()
     * that handles the .env file in the root folder of a project.
     *
     * @param string $const The constant variable
     * @param string\bool|mixed $default The default value if it is empty
     * @return mixed The value based on requested variable
     */
    function env($const, $default = null)
    {
        $val = getenv($const);

        if (empty($val)) {
            $val = $default;
        }

        switch (strtolower($val)) {
            case 'true':
                return true;
                break;

            case 'false':
                return false;
                break;

            case 'empty':
                return '';
                break;

            case 'null':
                return;
                break;
        }

        return $val;
    }
}

if (! function_exists('url_trimmer')) {

    /**
     * This trims a url that has multiple slashes and trimming slash at the end.
     *
     * @return string
     */
    function url_trimmer($url)
    {
        return rtrim(preg_replace('/([^:])(\/{2,})/', '$1/', $url), '/');
    }
}

if (! function_exists('processing_time')) {

    /**
     * This calculates the processing time based on the starting time.
     *
     * @param int $starting_time The microtime it starts
     * @return string
     */
    function processing_time($starting_time = 0)
    {
        return round(microtime(true) - $starting_time, 3);
    }
}

if (! function_exists('is_cli')) {
    function is_cli()
    {
        if (php_sapi_name() === 'cli') {
            return true;
        }

        return false;
    }
}
<?php
/**
 * Project ~ Swoole-hprose-seed
 * FileName: paths.php
 *
 * @author:  Liujian <laoliu@lanmv.com>
 *
 * Date: 2016/12/28 下午9:55
 */

if (! function_exists('base_path')) {

    /**
     * Get the base path.
     *
     * @param string $extend_path To access file by providing extended path
     * @return string
     */
    function base_path($extend_path = null)
    {
        return url_trimmer(BASE_PATH.'/'.$extend_path);
    }
}

if (! function_exists('app_path')) {

    /**
     * Get the app path.
     *
     * @param string $extend_path To access file by providing extended path
     * @return string
     */
    function app_path($extend_path = null)
    {
        return url_trimmer(APP_PATH.'/'.$extend_path);
    }
}

if (! function_exists('config_path')) {

    /**
     * Get the config path.
     *
     * @param string $extend_path To access file by providing extended path
     * @return string
     */
    function config_path($extend_path = null)
    {
        return url_trimmer(CONFIG_PATH.'/'.$extend_path);
    }
}

if (! function_exists('storage_path')) {

    /**
     * Get the storage path.
     *
     * @param string $extend_path To access file by providing extended path
     * @return string
     */
    function storage_path($extend_path = null)
    {
        return url_trimmer(STORAGE_PATH.'/'.$extend_path);
    }
}

if (! function_exists('public_path')) {

    /**
     * Get the public path.
     *
     * @param string $extend_path To access file by providing extended path
     * @return string
     */
    function public_path($extend_path = null)
    {
        return url_trimmer(PUBLIC_PATH.'/'.$extend_path);
    }
}
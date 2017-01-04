<?php

include BASE_PATH . '/vendor/autoload.php';

if (file_exists(BASE_PATH.'/.env')) {
    $dotEnv = new Dotenv\Dotenv(
        dirname(url_trimmer(BASE_PATH.'/.env'))
    );

    $dotEnv->load();
}

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        $config->application->modelsDir
    ]
)->register();

/**
 * Registering namespaces
 */
$loader->registerNamespaces([
    "App"               => APP_PATH,
    "App\\Services\\"   => APP_PATH . '/services',
    "App\\Filters\\"    => APP_PATH . '/filters',
    "App\\Middleware\\" => APP_PATH . '/middleware',
    "App\\Models\\"     => APP_PATH . '/models'
])->register();
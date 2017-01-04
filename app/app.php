<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */
use App\Services\PublishHttpService;

/**
 * Add your routes here
 */
$app->get('/', function () {
    echo $this['view']->render('index');
});

$app->get('/api', function(){
    return PublishHttpService::publish();
});

$app->post('/api', function(){
    return PublishHttpService::publish();
});

/**
 * Not found handler
 */
$app->notFound(function () use($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo $app['view']->render('404');
});
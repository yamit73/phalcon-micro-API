<?php
use Phalcon\Mvc\Micro;
use Phalcon\Loader;

$loader=new Loader();

$loader->registerNamespaces(
    [
        'Api\Handlers'=>'./handlers'
    ]
);

$loader->register();
$prod=new \Api\Handlers\Product();

$app=new Micro();

$app->get(
    '/invoices/views/{id}/{where}/{limit}/{page}',
    [
        $prod,
        'get'
    ]
);
$app->handle($_SERVER["REQUEST_URI"]);
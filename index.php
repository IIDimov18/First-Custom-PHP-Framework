<?php

require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;
use app\core\Router;

$app = new Application();


$app->router->get('/',function(){
   return 'Hello World!';
});

$app->router->get('contact',function(){
    return 'contact!';
});

$app->run();

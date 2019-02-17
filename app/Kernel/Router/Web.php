<?php
/**
 * Created by PhpStorm.
 * User: Nozdrzej
 * Date: 17.02.2019
 * Time: 17:25
 */


use Kernel\Router\Router;
use Kernel\Router\Request\Request as Request;



$router = new Router(new Request);

$router->get('/', function() {
    return <<<HTML
  <h1>Hello world</h1>
HTML;
});



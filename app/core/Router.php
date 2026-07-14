<?php

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$uri = trim($uri,'/');
if($uri === ''){
    $uri = '/login';
}
// var_dump($uri); die;

$routes =
[
    '/login' =>
    [
        'controller' => 'AuthController', 'action'=> 'login'
    ],
    '/logout' =>
    [
        'controller' => 'AuthController', 'action'=> 'logout'
    ],
    '/apprenant/dashboard' =>
    [
        'controller' => 'ApprenantController', 'action'=> 'dashboard'
    ],
    '/gerant/apprenant/dashboard' =>
    [
        'controller' => 'GerantController', 'action'=> 'dashboard'
    ],
];



$route = $routes[$uri];
if($route){  
    $controller = $route['controller'];
    var_dump($controller); die;
    $action = $route['action'];
    require_once(dirname(__DIR__)."/controller".$controller.".php");
}


?>
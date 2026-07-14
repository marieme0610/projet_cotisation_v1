<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// var_dump($uri); die;
if($uri === '/'){
    $uri = '/login';
}
// var_dump($uri); die;

$routes =
[
    '/login' =>
    [
        'controller' => 'AuthController', 'action'=> 'login'
    ],
    '/register' =>
    [
        'controller' => 'AuthController', 'action'=> 'register'
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



$route = $routes[$uri] ?? null;
if($route){  
    $controller = $route['controller'];
    // var_dump($controller); die;
    $action = $route['action'];
    require_once(dirname(__DIR__)."/controllers/".$controller.".php");
    $action();
}


?>
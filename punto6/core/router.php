<?php

namespace App\core;

class Router
{
    public $routes = [];

    function define($routes)
    {
        $this->routes = $routes;
    }

    function direct($path, $method)
    {
        $operation = $this->routes["$method $path"];
        list($class, $function) = explode('@', $operation);
        $fullClass = "App\controller\\$class";
        $controller = new $fullClass;
        $controller->$function();
    }
}
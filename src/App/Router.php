<?php

namespace Marselinus\BelajarMvc\App;

class Router
{
    private static $routes = [];

    static public function add(string $method, string $path, string $controler, string $function):void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controler' => $controler,
            'function' => $function
        ];
    }

    static public function run():void
    {
        $path = "/";
        if(isset($_SERVER['PATH_INFO'])){
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if($path == $route['path']  && $method == $route['method']){
                echo "Controler: " . $route['controler'] . ", Function : " . $route['function'];
                return;
            }
        }

        http_response_code(404);
        echo "Controller Not Found";
    }
}
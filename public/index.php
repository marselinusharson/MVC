<?php

//if(isset($_SERVER['PATH_INFO'])){
//    echo $_SERVER['PATH_INFO'];
//}else{
//    echo "Path not found";
//}

//$path = "/index";

//if(isset($_SERVER['PATH_INFO'])){
//    $path = $_SERVER['PATH_INFO'];
//}
//
//require_once __DIR__ . "/../src/view" . $path . ".php";

require_once  __DIR__ . "/../vendor/autoload.php";

use Marselinus\BelajarMvc\App\Router;
use Marselinus\BelajarMvc\Controller\HomeController;
use Marselinus\BelajarMvc\Controller\ProductControler;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/hello", HomeController::class, "hello");
Router::add("GET", "/world", HomeController::class, "world");
Router::add("GET", "/bangjago", HomeController::class, "jago");
Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductControler::class, 'categories');
Router::run();



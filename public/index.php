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

Router::add("GET", "/", "test", "product");
Router::add("GET", "/hello","helloControler", "hello");
Router::add("GET", "/marselinus","marselController", "addMarsel");

Router::run();



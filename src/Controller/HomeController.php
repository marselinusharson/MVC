<?php

namespace Marselinus\BelajarMvc\Controller;

use Marselinus\BelajarMvc\App\View;
class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat belajar PHP MVC dari PZN"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function jago(): void
    {
        echo "HomeController.jago()";
    }

    function login():void
    {
        $request= [
            "username" => $_POST["username"],
            "password" => $_POST["password"],
        ];

        $user = [
            "ussername"
        ];

        $response = [
            "massage" => "Login sukses",
        ];

//        kirim response ke view
    }
}
<?php
    require_once(__DIR__."/vendor/autoload.php");

    use CoffeeCode\Router\Router;

    $router = new Router(PROJECT_URL);
    
    $router->group(null)->namespace("Controller");
    
    $router->get("/", "AppController:viewLogin", "app.login");
    
    $router->get("/home", "AppController:homepage", "app.homepage");
    

    $router->dispatch();
    

    if($router->error()) {
        $error = match($router->error()) {
            400 => "400 -  Bad Request",
            404 => "404 - Not Found",
            405 => "405 - Method not allowed",
            501 => "501 - Not Implemented",
            default => "Error"
        };

        echo "<h1 style=\"text-align: center;margin-top: 2rem;\"> Ocorreu um erro. Código " . $error . "</h1>";
    }
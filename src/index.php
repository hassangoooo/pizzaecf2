<?php

    require_once("./model/pizzamodel.php");
    

    $methode = $_SERVER['REQUEST_METHOD'];
    $route = isset($_GET['route']) ? $_GET['route'] : 'pizza';

    switch ($route) {
        case 'pizza':
            require_once("./controller/pizzacontroller.php");
            $controller = new pizzaController();
            $controller->$methode();
            
            break;
        default:
            $controller = new pizzaController();
            break;
    }

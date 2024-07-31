<?php

// use Controller;

class DashboardController {

    function ventas($args){
        $view = "dashventas";
        extract($args);
        require(__DIR__ . "/../views/{$view}/{$view}.php");
        // Controller::view("dashventas", [$args]);
    }

    
}
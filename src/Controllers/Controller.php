<?php

class Controller {

    static public function formatoSalida($code, $dato){
        $html = "<h1>{$dato}</h1>";
        return $html;
    }

    static public function encode($texto){
        return openssl_encrypt($texto, "AES-256-CBC", "6UG8key@Un14nd3s", 0);
    }

    static public function decode($texto){
        return openssl_decrypt($texto, "AES-256-CBC", "6UG8key@Un14nd3s", 0 );
    }

    // static  function view($view, $args = []){
    //     extract($args);
    //     require(__DIR__ . "/../views/{$view}/{$view}.php");
    // }

    // protected function views($view, $args = []){
    //     extract($args);
    //     require(__DIR__ . "/../Views/{$view}/{$view}.php");
    // }
}
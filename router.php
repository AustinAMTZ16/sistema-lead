<?php
class Router{
    private $controller;
    private $method;

    public function __construct(){
        $this->matchRoute();
    }
    public function matchRoute(){
        //var_dump(URL);
        $url = explode("/", URL);
        
        $this->controller = !empty($url[1]) ? $url[1] : 'page';
        $this->method = !empty($url[2]) ? $url[2] : 'home';
        $this->controller = $this->controller . 'Controller';

        var_dump('<br>----URL');
        var_dump( $url );
        var_dump('<br>----Controller');
        var_dump( $this->controller );
        var_dump('<br>----Method');
        var_dump( $this->method );

        $res = require_once (__DIR__.'/controllers/'.$this->controller . '.php');
        var_dump('<br>---- DIR:');
        var_dump(__DIR__);
        var_dump('<br>---- Respuesta del controlador');
        
    }
    public function run(){
        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();
    }
}
<?php
namespace App\bootstraper;

class app{

    protected $controller = 'home';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        if (file_exists(str_replace('bootstraper','',__DIR__).'Controllers/'. $url[0] .'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }else {
            echo(str_replace('bootstraper', '', __DIR__) . 'Controllers/Home/' . $url[0] . '.php <h1> Not Found! </h1>');
        }
        require_once (str_replace('bootstraper','',__DIR__).'Controllers/'. $this->controller .'.php');
        $controller = new $this->controller;
        if (method_exists($controller,$url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }else{
            echo "<h1> The Mothod doesn`t exeist  </h1>";
        }
        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->parameters);

    }
    public function parseUrl(){
        return explode('/', filter_var(trim($_SERVER[REQUEST_URI],'/'),FILTER_SANITIZE_URL));
    }
}
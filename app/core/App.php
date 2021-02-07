<?php

class App
{
    // set controller ke home sebagai default 
    protected $controller = 'Home'; //Default Controller
    protected $method = 'index'; //public function
    protected $params = []; //parameter

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);
        // die;

        // controller
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
                // var_dump($url);
            }
        }


        // parameter
        if (!empty($url)) {
            $this->params = array_values($url);
            // var_dump($url);
        }


        // jalankan controller method dan kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // untuk membuat routing berdasarkan url
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}
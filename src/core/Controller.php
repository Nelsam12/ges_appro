<?php

namespace Core;

class Controller {
    protected string $layout;

    public function __construct()
    {
        Session::ouvrirSession();
        $this->layout = "base";
    }

    public function renderView(string $view, array $data = []){
        ob_start();
        extract($data);
        require_once "../view/$view.html.php";
        $content = ob_get_clean();
        require_once "../view/layout/$this->layout.layout.php";
    }

    public function redirecteToRoute(string $route){
        header('Location:' . WEBROOT . "?$route");
    }
}
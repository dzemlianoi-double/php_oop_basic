<?php

  class Router {
    private $request;
    private $controller_name;
    private $action_name;
    private $controller;

    public function init() {
      $this -> request = $_SERVER['REQUEST_URI'];
      $this -> controller_name = explode('/', $this -> request)[1];
      $this -> action_name = explode('/', $this -> request)[2];
      $controller_path = "app/controllers/{$this -> controller_name}_controller.php";
      if (file_exists($controller_path)){
        require $controller_path;
        $controller_class_name = ucfirst($this -> controller_name) . 'Controller';
        $this -> controller = new $controller_class_name; //BooksController
        if (method_exists($this -> controller, $this -> action_name)){
          $controller = $this -> controller;
          $action_name = $this -> action_name;
          $controller -> $action_name();
        }else {
          $this -> error404();
        }
      }else {
        $this -> error404();
      }
    }

    public function error404() {
      echo '404';
    }
  }
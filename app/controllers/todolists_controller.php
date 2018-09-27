<?php
  class TodolistsController {
    public function index() {
      include ROOT_PATH . 'app/models/todolists_model.php';
      $model = new TodolistsModel;
      $data = $model -> all();

      include ROOT_PATH . 'base/view.php';
      $this -> view = new View('todolists');
      // $this -> view -> render('all', ['all_todolists' => $data]);
      $this -> view -> redirect('http://google.com.ua');
    }
  }
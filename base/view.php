<?php
  class View {
    private $entity;

    public function __construct($entity) {
      $this -> entity = $entity;
    }

    public function render($file_name, $data) {
      // $data = ['all_todolists' => $data];
      include ROOT_PATH . "app/views/{$this -> entity}/$file_name.php";
    }

    public function redirect($location) {
      header("Location: $location");
    }
  }
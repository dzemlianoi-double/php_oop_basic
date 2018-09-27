<?php
  class TodolistsModel {
    private $connect;

    public function all() {
      $this -> connect = new mysqli('localhost', 'denis', 'denis', 'todo');
      $query = 'SELECT * FROM todolists;';
      $result = $this -> connect -> query($query);
      $final_array = [];
      while($row = mysqli_fetch_assoc($result)) {
        array_push($final_array, $row);
      }
      return $final_array;
    }
  }
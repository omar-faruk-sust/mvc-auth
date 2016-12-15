<?php
  class PagesController {
    
    public function home() {
      $test_string = 'Hello world';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
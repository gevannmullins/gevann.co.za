<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once 'views/cms/dashboard.php';
    }

    public function error() {
      require_once 'views/cms/error.php';
    }
  }
?>
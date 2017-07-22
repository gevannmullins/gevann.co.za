<?php
session_start();
unset($_SESSION);

$_SESSION['user_session_auth'] = '123456';

if(!isset($_SESSION['user_session_auth'])){
    header('Location: login.php');
}

$GLOBAL['base_url'] = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];


  require_once __DIR__ . '/connection.php';

  if (isset($_GET['controller'], $_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }

  require_once __DIR__ . '/views/layout.php';

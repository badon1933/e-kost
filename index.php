<?php
$page = (isset($_GET['p'])) ? $_GET['p'] : 'login';

switch ($page) {
  case 'login-page':
    include 'public/templates/header.php';
    include 'public/login/login.php';
    include 'public/templates/footer.php';
    break;

  case 'forgot-page':
    include 'public/templates/header.php';
    include 'public/login/forgot.php';
    include 'public/templates/footer.php';
    break;

  case 'user-login':
    include 'public/templates/header.php';
    include 'sys/users/login.php';
    include 'public/templates/footer.php';
    break;
}

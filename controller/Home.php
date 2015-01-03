<?php
session_start();
require_once '../model/config.php';

if (!empty($_SESSION)){
  header('Location:admincontroller');
  exit();
}


  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $config = new config();
    if ($config->checkValidLogin($username, $password)){
      $_SESSION['username'] = $username;
      header('Location:admincontroller');
      exit();
    }else {
        $status1 = 'Invalid Username or Password';
      }

   }

   require '../view/home.php';



 ?>

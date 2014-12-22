<?php
session_start();
include '../model/config.php';
if (!empty($_SESSION)){
  header('Location:admincontroller.php');
  exit();
}



if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (checkValidLogin($username, $password)==true){
    $_SESSION['username'] = $username;
    header('Location:admincontroller.php');
    exit();
  }else {
      $status1 = 'Invalid Username or Password';
    }

 }


require '../view/home.php';

 ?>

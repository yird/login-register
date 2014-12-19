<?php
session_start();
include '../model/config.php';
if (!empty($_SESSION)){
  include '../view/admin.php';
  exit();
}



if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


  $result = connect()->prepare("SELECT username,password FROM users WHERE username=:username AND password=:password");
  $result->bindParam('username',$username);
  $result->bindParam('password',$password);
  $result->execute();
  $rowsfound = $result->fetch(PDO::FETCH_NUM);

    if ($rowsfound > 0){
      $_SESSION['username'] = $username;
      header('Location:../view/admin.php');
    }else {
      $status1 = 'Invalid Username or Password';
    }

 }


require '../view/home.php';

 ?>

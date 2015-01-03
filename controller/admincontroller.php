<?php
session_start();
require_once '../model/config.php';
if (!empty($_SESSION)){
   $username = $_SESSION['username'];
   $config = new config();
   $name = $config->checkname($username);
   $about = $config->aboutme($username);

  include '../view/admin.php';
}else{
  header('Location:HomeController.php');
}
?>

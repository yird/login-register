<?php
session_start();
require '../model/config.php';
if(empty($_SESSION)){
  header('Location:HomeController.php');
}
$config = new config();
$username = $_SESSION['username'];
$oldabout = $config->aboutme($username);
if (isset($_POST['submit'])){
  $about = $_POST['text'];
  $config->editAbout($username,$about);
  header('Location:admincontroller.php');
}

require '../view/aboutme.php';

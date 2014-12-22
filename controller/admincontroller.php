<?php
session_start();
if (!empty($_SESSION)){
  include '../view/admin.php';
}else{
  header('Location:index.php');
}
?>

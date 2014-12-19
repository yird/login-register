<?php
function connect(){
  try {
  $dbh = new PDO('mysql:dbname=base;host=localhost','root','root');
  return $dbh;
  }
  catch(PDOExeption $e){
  echo 'ERROR', $e->getMessage();
  }
}

 ?>

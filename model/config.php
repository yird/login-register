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

function checkValidLogin($username,$password){
  $result = connect()->prepare("SELECT username,password FROM users WHERE username=:username AND password=:password");
  $result->bindParam('username',$username);
  $result->bindParam('password',$password);
  $result->execute();
  $rowsfound = $result->fetch(PDO::FETCH_NUM);

  if ($rowsfound > 0){
    return true;
  }else {
    return false;
  }

}

function checkUsernameTaken($checkuser){

  $check = connect()->prepare("SELECT username FROM users WHERE username=:username");
  $check->bindParam(':username',$checkuser);
  $check->execute();

  if ($check->rowCount() > 0){
    return true;
  }else{
    return false;
  }
}
function registerUser($username,$password,$fname,$lname,$email){
    $query = connect()->prepare("INSERT INTO users (username, password,fname,lname,email) VALUES (:username, :password, :fname, :lname, :email)");
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':fname', $fname);
    $query->bindParam(':lname', $lname);
    $query->bindParam(':email', $email);
    if ($query->execute()){
      return true;
    }
}
 ?>

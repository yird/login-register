<?php

class config{

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
    $result = $this->connect()->prepare("SELECT password FROM users WHERE username='$username'");
    $result->execute();
    $hash = $result->fetch(PDO::FETCH_ASSOC);
    return (password_verify($password,$hash['password']));

  }

  function checkUsernameTaken($username){

    $check = $this->connect()->prepare("SELECT username FROM users WHERE username='$username'");
    $check->execute();

    if ($check->rowCount() > 0){
      return true;
    }
  }
  function registerUser($username,$password,$fname,$lname,$email){
      $password = password_hash($password,PASSWORD_DEFAULT);
      $query = $this->connect()->prepare("INSERT INTO users (username, password,fname,lname,email) VALUES ('$username','$password','$fname','$lname','$email')");
      if ($query->execute()){
        return true;
      }
  }
  function checkname($username){
    $result = $this->connect()->prepare("SELECT fname FROM users WHERE username='$username'");
    $result->execute();
    $name = $result->fetch(PDO::FETCH_ASSOC);
    return $name['fname'];
  }
  function aboutme($username){
    $result = $this->connect()->prepare("SELECT about FROM users WHERE username='$username'");
    $result->execute();
    $about = $result->fetch(PDO::FETCH_ASSOC);
    return $about['about'];

  }

  function editAbout($username,$edit){
    $result = $this->connect()->prepare("UPDATE users SET about='$edit' WHERE username='$username'");
    $result->execute();
  }


    //Static Methods

  static function length($string){

    return strlen($string);

  }
  static function noSpaces($tocheck){
    if ( !preg_match('/\s/',$tocheck) && !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $tocheck)){
      return true;
    }else{
      return false;
    }
  }

}
 ?>

<?php
if (isset($_POST['create'])){

  require '../model/config.php';


  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];

  $userlen = strlen($username);
  $passlen = strlen($password);

  function checkUsername($checkuser){

    $check = connect()->prepare("SELECT username FROM users WHERE username=:username");
    $check->bindParam(':username',$checkuser);
    $check->execute();

    if ($check->rowCount() > 0){
      return true;
    }else{
      return false;
    }
  }
  if (checkUsername($username) === false){

    if ($userlen >= 4 && $passlen >= 6) {
          if ($password === $password2){
              $formcomplete = true;
          } else {
            $status = 'Passwords did not Match';
            }
      } elseif ($userlen < 4){
        $status = 'Username must be atleast 4 characters';
      }elseif ($passlen < 6){
        $status = 'Password must be atleast 6 characters';
      }
  } else{
    $status = 'Username is Taken';
  }

  if (isset($formcomplete)){

    $query = connect()->prepare("INSERT INTO users (username, password,email) VALUES (:username, :password, :email)");
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':email', $email);

    if($query->execute()){
      header("Location: ../controller/index.php");
    } else{
      $status ='Database Error, Please try again later..';
    }
  }
}

include '../view/register.php'
?>

<?php
session_start();
if (isset($_POST['create'])){

  require_once '../model/config.php';


  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];

  $config = new config();

  if (config::noSpaces($username)==true){
    if (config::length($username) >= 4 && config::length($username) <= 15){
      if ($config->checkUsernameTaken($username) == false){
        if (config::noSpaces($fname)==true && config::noSpaces($lname)==true){
          if (config::length($fname) > 2 && config::length($fname) < 15){
            if (config::length($lname) > 2 && config::length($lname) < 15){
              if (config::length($email) > 8){
                if (config::length($password) > 6){
                  if ($password === $password2){
                    $formcomplete = true;
                  }else{
                    $status='Passwords did not match';
                  }
                }else {
                  $status = 'Password must be atleast 6 characters';
                }
              }else{
                $status = 'Invalid Email';
              }
            }else{
              $status = 'Invalid Last Name';
            }
          }else{
            $status = 'Invalid First Name';
          }
        }else{
          $status = 'Name can\'t have spaces or special characters($%&*>#)';
        }
      }else{
        $status = 'Username is Unavailable';
      }
    } else {
      $status = 'Username must be 4 - 15 characters';
    }
  }else {
    $status = 'Username can\'t have spaces or special characters($%&*>#)';
  }
  if (!empty($formcomplete) && $formcomplete === true){
    if($config->registerUser($username,$password,$fname,$lname,$email)==true){
    $_SESSION['username'] = $username;
    header('Location:admincontroller');
  }else{
      $status ='Database Error, Please try again later..';
    }
  }
}

include '../view/register.php';
?>

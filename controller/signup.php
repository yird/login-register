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
  $fnamelen = strlen($fname);
  $lnamelen = strlen($lname);
  $emaillen = strlen($email);

  function noSpaces($tocheck){
    if ( !preg_match('/\s/',$tocheck) && !preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $tocheck)){
      return true;
  }else{
    return false;
  }
  }



  if (noSpaces($username)==true){
    if ($userlen >= 4 && $userlen <= 15){
      if (checkUsernameTaken($username) == false){
        if (noSpaces($fname)==true && noSpaces($lname)==true){
          if ($fnamelen > 2 && $fnamelen < 15){
            if ($lnamelen > 2 && $lnamelen < 15){
              if ($emaillen > 8){
                if ($passlen > 6){
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
    if(registerUser($username,$password,$fname,$lname,$email)==true){
    header("Location: ../controller/index.php");
  }else{
      $status ='Database Error, Please try again later..';
    }
  }
}

include '../view/register.php'
?>

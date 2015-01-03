<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

</head>
<body>
  <div class="container">
  <form class="form-group" action="" method="post">
      <h2 style="text-align:center">Create an Account!</h2><br>
      <div class="col-md-6 col-md-offset-3">
        <?php if(isset($status)): ?>
          <p class="alert alert-danger" style="text-align:center"><?="$status"?></p>
        <?php endif; ?>
      Username <input class="form-control" type="text" name="username" value="<?= isset($username) ? ($username) : ''?>">
      First Name <input class="form-control" type="text" name="fname"value="<?= isset($fname) ? ($fname) : ''?>">
      Last Name <input class="form-control" type="text" name="lname"value="<?= isset($lname) ? ($lname) : ''?>">
      Email <input class="form-control" type="email" name="email"value="<?= isset($email) ? ($email) : ''?>">
      Password <input class="form-control" type="password" name="password">
      Confirm Password <input class="form-control" type="password" name="password2"><br>
      <div style="text-align:center">
      <input class="btn btn-success navbar-btn" type="submit" name="create" value="Create Account">
      <a href="../controller" class="btn btn-default">Login</a>
    </div>
  </form>
 </div>
</body>
</html>

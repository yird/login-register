<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

  </head>
  <body>

        <h1 style="text-align:center">Login</h1>
      <div class="container">
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Username</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="username" placeholder="Username"value="<?= isset($username) ? ($username) : ''?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-10">
            <a href="signup.php" class="btn btn-default">Register</a>
            <input type="submit" name="login" class="btn btn-success" value="Sign in">
          </div>

        </div>

        <?php if(isset($status1)): ?>

          <p class="alert alert-danger" style="text-align:center"><?="$status1"?></p>

        <?php endif; ?>
      </form>
    </div>

  </body>
</html>

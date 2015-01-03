
<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

  </head>
  <body>

    <div class="container">
      <h2>Hello <?= $name ?><br/>
      You are now logged in!</h2><br><br>
      <h3>About Me</h3><br>

      <p>
        <?= $about ?>
      </p>
      <a href="AboutController.php">Edit About Me</a>

      <h3> <a href="../view/logout.php" class="btn btn-danger">Logout</a></h3>
    </div>



  </body>
</html>

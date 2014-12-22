
<html>
  <head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

  </head>
  <body>

    <div class="container">
      <h2>Hello <?= $_SESSION['username']?><br/>
      You are now logged in!</h2>

      <h3> <a href="../view/logout.php" class="btn btn-danger">Logout</a></h3>
    </div>



  </body>
</html>

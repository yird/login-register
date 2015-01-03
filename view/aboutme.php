<html>
<head>
  <title>About Me</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

</head>
  <body>
    <div class="container">

    <form action="" method="post" >
      <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
          <textarea type="text" class="form-control" rows="5"name="text" autofocus><?= isset($oldabout) ? ($oldabout) : ''?></textarea>
        </div>
      </div>
      <div class="col-sm-offset-5 col-sm-10">
        <br>
        <a href="admincontroller.php" class="btn btn-default">Cancle</a>
        <input type="submit" name="submit" class="btn btn-success">
      </div>
    </form>
  </div>
  </body>
</html>

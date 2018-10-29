<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <form method="POST" >
  <div class="form-group">
    <label for="formGroupExampleInput" >&nbsp&nbsp&nbsp&nbspUsername</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>
<input type="submit" class="btn btn-success" name="submit"></input>
    <div class="btn btn-light">
    <a href="registrasi.php" class="">Registrasi</a>
  </div>

</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
  session_start();
  $query = mysqli_query($conn,"SELECT * FROM user");
  while ($cek = mysqli_fetch_array($query)) {
    if ($cek['name']==$_POST['username']&&$cek['pass']==$_POST['password']) {
      $_SESSION['username'] = $cek['username'];
      $_SESSION['id'] = $cek['id'];
      header('Location:dashboard.php');
    }
  }
}
 ?>
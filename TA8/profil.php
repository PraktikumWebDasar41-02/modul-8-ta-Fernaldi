<?php 
include 'koneksi.php';

session_start();
$id = $_SESSION['id'];
$query = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
 while ($cek2 = mysqli_fetch_array($query)) {
 
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Profil</title>
  </head>
  <body>
    <form method="POST" >
    
    <div class="card" style="width: 20rem;">
    
    
      <img class="card-img-top" src=<?php if(empty($cek2['foto'])){echo "Picture/kosong.jpg";}else{echo "Picture/".$cek2['foto'];}?> alt="Card image cap">
      <div class="card-body">
        <a href="ubah.php" class="btn btn-success" >Ubah</a>
      </div>

    </div>

    
    <div class="form-group">
    <label for="formGroupExampleInput" >&nbsp&nbsp&nbsp&nbspUsername</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="formGroupExampleInput" name="username" placeholder="Username" disabled name="user" value=<?php echo $cek2['name'];  ?>>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" value=<?php echo $cek2['pass'];  ?>>
    </div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput" >&nbsp&nbsp&nbsp&nbspEmail</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email@gmail.com" value=<?php echo $cek2['email'];  ?>>
    </div><br>
  

  <button type="submit" class="btn btn-success" name="submit">Ubah</button>
  <div class="btn btn-light">
    <a href="dashboard.php" class="card-link">Dashboard</a>
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

} 
if (isset($_POST['submit'])) {
            $email = $_POST['email'];
    if (strlen($_POST['pass'])<=6) {
            $password = $_POST['pass'];
        }
    $query = mysqli_query($conn,"UPDATE user SET pass='$password',email = '$email' WHERE id='$id'");
    if ($query) {
    echo "BERHASIL";
    header("Location:profil.php");
    }
}

?>
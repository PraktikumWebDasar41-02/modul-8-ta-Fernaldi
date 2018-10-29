<?php  


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Data Baru</title>
  </head>
  <body>
    <form action=test.php method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama depan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama depan" name="namadep">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama belakang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama belakang" name="namabel">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" name="nim">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kelas" name="kelas">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Hobbi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Hobi" name="hobi">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-2">Genre film</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Horor">
        <label class="form-check-label" for="gridCheck1">
          Horor
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Anime">
        <label class="form-check-label" for="gridCheck1">
          Anime
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Action">
        <label class="form-check-label" for="gridCheck1">
          Action
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="genre[]" value="Drama">
        <label class="form-check-label" for="gridCheck1">
          Drama
        </label><br>

      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-2">Tempat Wisata</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="trav[]" value="Bali">
        <label class="form-check-label" for="gridCheck1">
          Bali
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="trav[]" value="Tanjung solor">
        <label class="form-check-label" for="gridCheck1">
          Tanjung Selor
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="trav[]" value="Jakarta">
        <label class="form-check-label" for="gridCheck1">
          Jakarta
        </label><br>
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="trav[]" value="Lombok">
        <label class="form-check-label" for="gridCheck1">
          Lombok
        </label><br>

      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Save</button>
    </div>
  </div>
  <div class="card-body">
    <a href="dashboard.php" class="card-link">dashboard</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

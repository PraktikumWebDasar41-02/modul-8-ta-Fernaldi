<?php 
include 'koneksi.php';
session_start();
$id= $_SESSION['id'];
$query = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
$query2 = mysqli_query($conn,"SELECT * FROM data WHERE id='$id'");
$cek2 = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard</title>
		<head>
			<center> 
			<body>
				
				<div class="card" style="width: 20rem;">
				<img class="card-img-top" src=<?php if(empty($cek2['foto'])){echo "Picture/kosong.jpg";}else{echo "Picture/".$cek2['foto'];}?> alt="Card image cap">
				    <div class="card-body">
				    <h4 class="card-title"><?php echo $cek2['name']; ?></h5>
				    <h5 class="card-subtitle mb-2 text-muted"><?php echo $cek2['email']; ?></h6>
				    <p class="card-text">Berikut adalah data diri anda</p>
				    <ul class="list-group list-group-flush">
					   	<li class="list-group-item"><a href="profil.php" class="card-link">Profil</a></li>
					    <li class="list-group-item"><a href="newdata.php" class="card-link">New data</a></li>
					    <li class="list-group-item"><a href="index.php" class="card-link">Log out</a></li>
				  </ul>
				  </div>
				</div>	

				
					<div class="container">
					<div class="row">
					<div class="col-md-12">
			        <h5>DATA DIRI</h5>
			        <div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                     <th>NIM</th>
                     <th>Kelas</th>
                     <th>Hobbi</th>
                     <th>Genre film</th>
                     <th>Tempat Wisata</th>
                      <th colspan="1">Aksi</th>
                      
                   </thead>
    <tbody>
    <?php while($show = mysqli_fetch_array($query2)){ $nm = $show['Nim'];?>
    <tr>
    
    <td><?php echo $show['nama_depan'];?></td>
    <td><?php echo $show['nama_belakang'];?></td>
    <td><?php echo $show['Nim'];?></td>
    <td><?php echo $show['kelas'];?></td>
    <td><?php echo $show['hobi'];?></td>
    <td><?php echo $show['genre'];?></td>
    <td><?php echo $show['tempat'];?></td>
    <td><a href=<?php echo "editdata.php?nim=".$nm;?> style="text-decoration-color: orange">edit</a>
    <td><a href=<?php echo "simpan.php?nim=".$nm;?>  style="text-decoration-color: red">delete</a>
    </tr>
    <?php } ?>

			</tbody>
		</table>
     	</body>	
     	</center>
		
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

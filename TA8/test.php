 <?php 
class oop
{
  
  private $username;
  private $password;
  private $email;
  private $query;
  private $conek;

  private $nade;
  private $nabe;
  private $niim;
  private $kls;
  private $hby;
  private $genr;
  private $trav;
  private $id;
  private $id2;

  function user1($username1,$password1,$repassword1,$email1)
  {
    
  include 'koneksi.php';
    
    if (!is_numeric($username1)) {
      $this->username = $username1;
    }
    if ($password1==$repassword1|| strlen($password1)<=6) {
      $this->password = $password1;
    }else{
      echo "Password anda tidak benar!";
    }
    $this->email = $email1;
    if (isset($this->username)&&isset($this->password)&&isset($this->email)) {
      $this->conek = $conn;
      $this->query = mysqli_query($this->conek,"INSERT INTO user(id, name, email, pass) VALUES ('','$this->username','$this->email','$this->password')");
      if (!$this->query) {
        die("GAGAL");
      }else{
        echo "Berhasil";
        header("Location:index.php");
      }
    }
  
  }

  function tambahnew($namadep,$namabel,$nim,$kelas,$hobi,$genre,$trav)
  {
    include 'koneksi.php';
    session_start();
    $this->id= $_SESSION['id'];
    if (strlen($nim)==10&&is_numeric($nim)) {
      $this->niim = $nim;
    }
    if (!is_numeric($namadep)) {
      $this->nade = $namadep;
    }
    if (!is_numeric($namabel)) {
      $this->nabe = $namabel;
    }
    $this->kls = $kelas;
    if (!is_numeric($hobi)) {
      $this->hby = $hobi;
    }
    $this->genr = implode(", ",$genre);
    $this->tws = implode(", ",$trav);
    if (isset($this->niim)&&isset($this->nade)&&isset($this->nabe)) {
      $this->conek = $conn;
      $this->query = mysqli_query($this->conek,"INSERT INTO data(nama_depan, nama_belakang, NIM, kelas, hobi, genre, tempat, id)
       VALUES ('$this->nade','$this->nabe','$this->niim','$this->kls','$this->hby','$this->genr','$this->tws','$this->id')");
      if (!$this->query) {
        die("GAGAL");
      }else{
        echo "Berhasil";
        header("Location:dashboard.php");
      }
    }
  }

  function hapus($d)
  {
    include 'koneksi.php';
    $this->id2 = $d;
    $this->conek = $conn;
      $this->query = mysqli_query($this->conek,"DELETE FROM data WHERE Nim ='$this->id2'");
      if (!$this->query) {
        die("GAGAL");
      }else{
        echo "Berhasil";
        header("Location:dashboard.php");
      }
  }
}
$view = new oop();
if (isset($_POST['submit'])) {
$view->user1($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['email']);
}
if (isset($_POST['submit'])) {
$view->tambahnew($_POST['namadep'],$_POST['namabel'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre'],$_POST['trav']);
}
if (isset($_GET['nim'])) {
$view->hapus($_GET['nim']);
}
 ?>
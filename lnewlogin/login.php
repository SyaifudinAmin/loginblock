<?php
session_start();

$user = $_POST["username"];
$pass = $_POST["password"];
//===================================
$dbuser = "admin";
$dbpass = "12345";

//===================================
if ($user == $dbuser && $pass == $dbpass) {
  echo '<h1> Selamat Login Sukses </h1>';
  unset($_SESSION['salah']);
} else {
  $nilai  = $_SESSION['salah']+1;
  if (isset($_SESSION['salah'])) {
    $_SESSION["salah"]++;
  } else {
    $_SESSION['salah'] = 1;
  }
  /*Script untuk menampilkan jumlah salah login*/
  echo "
  <script type=\"text/javascript\">
    var val = '$nilai';
    alert('Username dan Password tidak cocok.Percobaan ke-'+val);
    location = 'index.php';
  </script>
  ";
}
?>

<?php

// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$nis=$_POST['nis'];
$password=$_POST['password'];

 // CONNECT TO THE DATABASE
$DB_NAME = 'smkinfonusa';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

$query = "SELECT * FROM login WHERE id='$nis' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

if($result->num_rows > 0) {
echo "anda berhasil login.";

header('location:rumahsiswa.php');
}
else {
echo 'username/password yang anda masukkan salah. Silahkan ulang kembali';	
}

?>

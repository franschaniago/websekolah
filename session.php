<?php
include "ceklogin.php";

session_start();
if(!isset($_SESSION['nis'])){
	header('location:kontak.php');
}else{
	$nis=$_SESSION['nis']
};

$query=mysql_query("SELECT*FROM login WHERE nama='$nis'");
$hasil=mysql_fetch_array($query);

?>


<?php
echo "SELAMAT DATANG $nis";?>
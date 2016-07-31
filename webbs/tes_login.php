<?php

// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_POST['nis'];
$password=$_POST['pass'];

 // CONNECT TO THE DATABASE
include 'akses/konek_admin.php';

$query = "SELECT * FROM user WHERE nis='$username' and password='$password'";

	global $link;

	if($result=mysqli_query($link,$query)){
		if(mysqli_num_rows($result)!=0){
			header('location:rs_index.php');
		}else{
			echo "login gagal";
		}
}
?>

<form action="" method="post">
	nis
	<input type="text" name="nis"><br>
	pass
	<input type="password" name="pass"><br>
	<input type="submit" name="submit">
</form>
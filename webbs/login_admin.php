<?php
include 'akses/akses_admin.php';

if(isset($_POST['submit'])){
	$username 	= $_POST['user'];
	$password 	= $_POST['pass'];
	
	if(periksa_login($username,$password)){
		

		header('location:admin_index.php');
	}else{
		echo "<script>alert('Username atau Password anda salah silahkan periksa kembali')</script>";
	}
}

?>

<form action="" method="post">
	<table>
		<tr>
			<td colspan="2" class="judul" ><center>SILAHKAN LOGIN</center></td>
			<td></td>
		</tr>
		<tr>
			<td align="center">Username</td> 
			<td><input type="text" name="user" class="text" required></td>
		</tr>

		<tr>
			<td align="center">Password</td> 
			<td><input type="password" name="pass" class="text" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Login" class="login"></td>
		</tr>
	</table>
</form>

<style>

*{
	padding: 0; margin: 0; font-family: sans-serif;
}

body{
	background-color: #4a99d2;
}
table{
	background-color: #4a99d2;
	border:20px solid #4a99d2;
	margin: 5px auto;
	margin-top: 100px;
	color: white;
	line-height: 50px;
	width: 50%;
}
table td{
	border: 0px solid black;
}

.judul{
	font-size: 30px;
	border-bottom: 5px solid white;

}

.text{
	width: 85%;
	height: 50%;
}

.login{
	width: 85%;
	background-color: #1b4b6d;
	border:5px solid #1b4b6d;
	color: white;
}

.login:hover{
	background-color: #4a99d2;
}

</style>
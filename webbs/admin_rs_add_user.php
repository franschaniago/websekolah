<?php
include 'head_admin.php';



if(isset($_POST['submit'])){
	$nis 	=$_POST['nis'];
	$pass 	=$_POST['password'];
	$ph 	=md5($pass);


	if(tambahuser($nis,$ph)){
		echo "<script>alert('Data berhasil ditambahkan')</script>";
	}else{
		echo "<script>alert('Gagal manambahkan data')</script>";
	}

}



?>
<h3>Menambah Data Siswa</h3>

<form action="" method="post">
	<div class="artikel">
		<table>
			<tr>
			<td>Nis</td>
			<td><input type="number" name="nis"required class="text"></td>
			</tr>

			<tr>
			<td>Password</td>
			<td><input type="password" name="nama" required class="text"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah" class="tambah">&nbsp;<input type="reset" name="reset" class="batal" value="Batal"></td>
			</tr>
		</table>
	</div>
</form>


<?php include 'foot_admin.php'; ?>

<style type="text/css">
	table{
		line-height: 50px;
		width: 80%;
	}

	textarea{
		border-radius: 10px;
		border: 2px solid #23D668;
	}

	.text{
		border-radius: 10px;
		border: 2px solid #23D668;
		height: 30px;
		width: 300px;
	}

	.tambah{
	background-color: #23D668;
	padding: 5px;
	border: 0px;
	color: white;
	}

	.tambah a{
		padding: 10px;
	}

	.tambah:hover{
		background-color: #54E28B;
	}

	.batal{
		background-color: #EF4848;
		padding: 5px;
		border: 0px;
		color: white;
	}


	.batal a{
		padding: 10px;
	}

	.batal:hover{
		background-color: #EC6565;
	}
</style>
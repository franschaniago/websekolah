<?php
include 'head_admin.php';


$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilkartu_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$nama_awal	= $row['nama_lengkap'];
		$kelas_awal	= $row['kelas'];
		$nis_awal	= $row['nis'];
		$foto_awal	= $row['foto'];
	}
}


if(isset($_POST['submit'])){
	$nama_lengkap 	=$_POST['nama'];
	$kelas 	=$_POST['kelas'];
	$nis 	=$_POST['nis'];


	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/kartu_perpus/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" ){
			
			if(edit_datakartu($nama_lengkap,$kelas,$nis,$lokasi,$id)){
			echo "data berhasil";
			header('location:admin_kartu_perpus.php');
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asal, "img/kartu_perpus/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}



?>

<h3>Edit Data Kartu</h3>

<form action="" method="post" enctype="multipart/form-data" role="form">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="nama" class="text" value="<?= $nama_awal;?>"  required></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><input type="text" name="kelas" class="text" value="<?= $kelas_awal;?>" required></td>
		</tr>

		<tr>
			<td>Nis</td>
			<td><input type="number" name="nis" class="text" value="<?= $nis_awal;?>" required></td>
		</tr>

		<tr>
			<td>Foto</td>
			<td><img width="150" height="140" src="<?= $foto_awal;?>"><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit" class="tambah">&nbsp;<a class="hapus" href="admin_kartu_perpus.php">Batal</a></td>
		</tr>
	</table>
</form>



<?php include 'foot_admin.php';?>


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
	width: 100px;
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
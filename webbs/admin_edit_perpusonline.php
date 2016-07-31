<?php
include 'head_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilbuku_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$judul_awal	= $row['judul_buku'];
		$gambar_awal= $row['cover_buku'];
		$link_awal	= $row['link'];
	}
}


if (isset($_POST['submit'])) {
	$judul 	= $_POST['judul'];
	$link_download 	= $_POST['link'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/perpusonline/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			
			if(editdata_buku($judul,$lokasi,$link_download,$id)){
			header('location:admin_perpusonline.php');
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asal, "img/perpusonline/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}



?>

<h2>Edit data buku</h2><br>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="judul" name="judul" value="<?= $judul_awal;?>"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><img width="180" height="150" src="<?= $gambar_awal;?>"><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td>Link download</td>
			<td><input type="text" name="link" value="<?= $link_awal;?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan" class="tambah">&nbsp;<a class="hapus" href="admin_perpusonline.php">Batal</a></td>
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
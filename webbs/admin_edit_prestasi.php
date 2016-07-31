<?php
include 'head_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampil_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$judul_awal	= $row['judul'];
		$gambar_awal= $row['gambar'];
		$isi_awal	= $row['berita'];
	}
}


if(isset($_POST['submit'])){
	$judul 	=$_POST['judul'];
	$isi 	=$_POST['isi'];


	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" ){
			
			if(editdata($judul,$lokasi,$isi,$id)){
			header('location:admin_prestasi.php');
			}else{
				echo "Sepertinya ada kesalahan saat update data";
			}

		move_uploaded_file($asal, "img/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}




?>

<h3>Edit Data Artikel</h3>

<form action="" method="post" enctype="multipart/form-data">
	<div class="artikel">
		<table>
			<tr>
			<td>Judul Artikel</td>
			<td><input id="text" type="text" name="judul" value="<?= $judul_awal;?>" required></td>
			</tr> 

			<tr>
			<td>Gambar</td>
			<td><img width="150" height="100" src="<?= $gambar_awal;?>"><input type="file" name="gambar" required></td>
			</tr>

			<tr>
			<td>Isi Artikel</td>
			<td><textarea rows="10" cols="50" name="isi" required><?= $isi_awal;?></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input class="tambah" type="submit" name="submit" value="Edit">&nbsp;<a class="hapus" href="admin_prestasi.php">Batal</a></td>
			</tr>
		</table>
	</div>
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

	#text{
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
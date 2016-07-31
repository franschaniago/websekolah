<?php
include 'head_admin.php';


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
			
			if(tambahdata_buku($judul,$lokasi,$link_download)){
			echo "<script>alert('Data buku berhasil ditambahkan')</script>";
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
<h2>Tambah data buku</h2><br>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul Buku</td>
			<td><input type="judul" name="judul" class="text" required></td>
		</tr>

		<tr>
			<td>Cover Buku</td>
			<td><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td>Link download</td>
			<td><input type="text" name="link" class="text" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan" class="tambah">&nbsp;<a href="admin_perpusonline.php" class="hapus">Batal</a></td>
		</tr>
		</tr>
	</table>
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
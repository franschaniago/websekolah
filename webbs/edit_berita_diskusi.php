<?php
include 'head_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilberita_diskusi_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$judul_awal	= $row['judul_berita'];
		$foto_awal	= $row['foto_berita'];
		$isi_awal	= $row['isi_berita'];

	}
}

if(isset($_POST['submit'])){
	$judul_berita	=$_POST['judul'];
	$isi_berita		=$_POST['isi'];


	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/diskusi/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			
			if(edit_berita_diskusi($judul_berita,$lokasi,$isi_berita,$id)){
				header('location:admin_edit_berita_diskusi.php');
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asal, "img/diskusi/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";

}



?>
<h3>Mengedit Data Berita Diskusi</h3>

<form action="" method="post" enctype="multipart/form-data">
	<div class="artikel">
		<table>
			<tr>
				<td>Judul Berita</td>
				<td><input type="text" name="judul" class="text" value="<?php echo $judul_awal;?>"></td>
			</tr>

			<tr>
			<td>Foto Berita</td>
			<td><img width="100" height="100" src="<?php echo $foto_awal;?>"><input type="file" name="gambar"required></td>
			</tr>

			<tr>
			<td>Isi berita</td>
			<td><textarea rows="10" cols="50" name="isi"><?php echo $isi_awal;?></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update" class="tambah">&nbsp;<a class="batal" href="admin_edit_berita_diskusi.php">Batal</a></td>
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
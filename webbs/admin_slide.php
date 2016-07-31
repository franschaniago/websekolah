<?php
include 'head_admin.php';

if(isset($_POST['submit'])){
	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/slide/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			
			if(tambahdata_slide($lokasi)){
			echo "<script>alert('Data slide berhasil ditambahkan')</script>";
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asal, "img/slide/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}



?>



<h3>Tambah Foto Slide</h3>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Masukan Foto</td>
			<td><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Tambah" class="tambah"></td>
		</tr>
	</table>
</form>
<br>
<table>
	<tr bgcolor="#3481DC" align="center" style="color:white">
		<td>No</td>
		<td>Foto</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
$result=tampilslide();
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><img width="100" height="100" src="<?php echo $row['foto_slide'];?>"></td>
		<td><a class="hapus" href="admin_delete_slide.php?id=<?php echo $row['id_slide'];?>">Hapus</a></td>
	</tr>
	<?php $no++ ?>
	<?php } ?>
	</table>

<style type="text/css">
	table{
		width: 500px;
		line-height: 50px;
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
</style>


<?php include 'foot_admin.php'; ?>
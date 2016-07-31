<?php
include 'rs_head.php';


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
			
			if(tambahdatakartu($nama_lengkap,$kelas,$nis,$lokasi)){
			echo "<script>alert('Data anda berhasil dikirm silahkan menghubungi petugas perpustakaan untuk mencetak kartu perpus anda. Terimakasih & selamat membaca')</script>";
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


<?php include 'rs_menu.php';?>

<p style="line-height:30px" align="justify">Aplikasi pencetakan kartu perpus secara online, silahkan isi data diri anda dengan lengkap. data diri yang telah dikirim akan masuk ke database perpustakaan silahkan mengunjungi admin perpustakaan untuk mencetaknya. gunakan aplikasi ini dengan sangat bijak sebagai sarana mempermudah siswa siswi nya untuk meminjam buku di perpustakaan. Terimakasih</p>
<br>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><b><input readonly type="text" name="nama" class="text" value="<?php echo $_SESSION['nama'];?>"></b></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><b><input readonly type="text" name="kelas" class="text" value="<?php echo $_SESSION['kelas'];?>"></b></td>
		</tr>

		<tr>
			<td>Nis</td>
			<td><input  readonly type="text" name="nis" class="text" value="<?php echo $_SESSION['nis'];?>" readonl></td>
		</tr>

		<tr>
			<td>Foto</td>
			<td><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Daftar" class="tambah"></td>
		</tr>
	</table>
</form>

<?php
include 'rs_foot.php';
?>

<style type="text/css">
	table{
		width: 60%;
		height: 50%;
	}

	.text{
	border:0px;
	font-size: 15px;
	}

	.tambah{
	background-color: #1b4b6d;
	padding: 5px;
	border: 0px;
	color: white;
	width: 30%;
	}

	.tambah a{
		padding: 10px;
	}

	.tambah:hover{
		background-color: #4a99d2;
	}

	@media screen and(max-width: 1024px){

		.text{
			font-size: 8px;
			width: 10%;
		}

		table{
			width: 100%;
		}

	}
</style>

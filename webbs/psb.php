<?php 

include 'head.php';

if(isset($_POST['submit'])){
	$nama 	=$_POST['nama'];
	$nisn 	=$_POST['nisn'];
	$asal 	=$_POST['asal'];
	$email 	=$_POST['email'];


	$namagambar 	= $_FILES['gambar']['name'];
	$size 			= $_FILES['gambar']['size'];
	$error 			= $_FILES['gambar']['error'];
	$asalgambar		= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/ijazah/" . $namagambar;
	$format = pathinfo($namagambar, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			
			if(tambahdata_psb($nama,$nisn,$asal,$email,$lokasi)){
			echo "<script language='javascript'>
			alert('Terimakasih telah melakukan pendaftaran')
			</script>";
			header('location:psb.php');
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asalgambar, "img/ijazah/" . $namagambar);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}


?>


<center><h2>Pendaftaran Siswa Baru Online</h2></center><br>
<p>Bagi calon peserta didik baru (CPSB) silahkan melakukan pendaftaran terlebih dahulu dan melampirkan nilai ijazahnya sebagai pertimbangan bagi sekolah untuk menyeleksi para CPSB. jika sudah melakukan pendaftaran seminggu kemudian kami akan mengirimkan pemberitahuan verifikasi via email anda untuk mengikuti tes ujian masuk penerimaan siswa baru (PSB). maka dari itu harap isi form di bawah ini dengan benar. Terimakasih </p>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="nama" class="text" required></td>
		</tr>

		<tr>
			<td>Nomor Induk Siswa Nasional (NISN)</td>
			<td><input type="number" name="nisn" class="text" required></td>
		</tr>

		<tr>
			<td>Asal Sekolah</td>
			<td><input type="text" name="asal" class="text" required></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="text" required></td>
		</tr>

		<tr>
			<td>Upload Ijazah</td>
			<td><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" class="submit" value="Daftar"></td>
		</tr>
	</table>
</form>


<?php include "foot.php";?>

<style type="text/css">
	table{
		line-height: 60px;
		width: 50%;
	}

	.submit{
		width: 50%;
		height: 30px;
		border: 0px;
		border-radius: 5px;
		background-color: #1b4b6d;
		color: white;
		font-size: 15px;
	}

	.submit:hover{
		background-color: #4a99d2;
	}
</style>
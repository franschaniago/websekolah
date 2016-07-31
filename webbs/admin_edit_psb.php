<?php 

include 'head_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilpsb_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$nama_awal	= $row['nama_lengkap'];
		$nisn_awal	= $row['nisn'];
		$asal_awal	= $row['asal_sekolah'];
		$email_awal	= $row['email'];
		$ijazah_awal= $row['ijazah'];
	}
}


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
			
			if(editdata_psb($nama,$nisn,$asal,$email,$lokasi,$id)){
			echo "<script language='javascript'>
			alert('Terimakasih telah melakukan pendaftaran')
			</script>";
			header('location:admin_psb.php');
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
<h3>Edit Data PSB</h3>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="nama" class="text" value="<?= $nama_awal;?>" required></td>
		</tr>

		<tr>
			<td>Nomor Induk Siswa Nasional (NISN)</td>
			<td><input type="number" name="nisn" class="text" value="<?= $nisn_awal;?>" required></td>
		</tr>

		<tr>
			<td>Asal Sekolah</td>
			<td><input type="text" name="asal" class="text" value="<?= $asal_awal;?>" required></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="text" value="<?= $email_awal;?>" required></td>
		</tr>

		<tr>
			<td>Upload Ijazah</td>
			<td><img width="150" height="100" src="<?= $ijazah_awal;?>"><input type="file" name="gambar" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input class="tambah" type="submit" name="submit" value="Edit">&nbsp;<a class="hapus" href="admin_psb.php">Batal</a></td>
		</tr>
	</table>
</form>

<?php include 'foot_admin.php'; ?>

<style type="text/css">
	table{
		line-height: 50px;
		width: 70%;
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

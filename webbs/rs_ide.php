<?php 
include 'rs_head.php'; 

if(isset($_POST['submit'])){
	$nama_siswa 	=$_POST['nama'];
	$kelas 			=$_POST['kelas'];
	$email 			=$_POST['email'];
	$ket 			=$_POST['ket'];


	$nama 	= $_FILES['karya']['name'];
	$size 	= $_FILES['karya']['size'];
	$error 	= $_FILES['karya']['error'];
	$asal	= $_FILES['karya']['tmp_name'];
	
	$lokasi="karya/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "pdf" || $format === "PDF" ){
			
			if(tambahkarya($nama_siswa,$kelas,$email,$lokasi,$ket)){
			echo "<script>alert('Karya mu berhasil di kirim untuk di pertimbangkan, dalam waktu minimal seminggu kedepan silahkan cek email mu untuk melihat persetujuan')</script>";
			}else{
				echo " <div class='gagal'> Sepertinya ada kesalahan saat pengiriman </div>";
			}

		move_uploaded_file($asal, "karya/".$nama);
		}else{
			echo "
			<div class='gagal'>
			Maaf format filenya harus pdf </div> ";
		}

	
	}else echo "<div class='gagal'>Ada kesalahan saat upload</div>";
}



?>
<?php include 'rs_menu.php';?>

<p style="line-height:30px;">Jika kalian memiliki sebuah gagasan ide dan karya tentang IT atau dalam hal apapun yang sekiranya bisa di kembangkan dan bisa digunakan untuk membantu banyak masyarakat, yuk kirimkan proposal kalian ke pihak admin sekolah, jika sekiranya ide dan karya kalian bagus dan bermanfaat bersiaplah untuk di panggil pihak sekolah dan diberikan fasilitas pengembangan karya khusus oleh pihak sekolah kepada anda. Kirimkan proposal anda dalam bentuk PDF. Terimakasih</p>
<br><br>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama lengkap</td>
			<td><input readonly type="text" name="nama" class="read" value="<?= $_SESSION['nama'];?>"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><input readonly type="text" name="kelas" class="read" value="<?= $_SESSION['kelas'];?>"></td>
		</tr>

		<tr>
			<td>Email Anda</td>
			<td><input type="email" name="email" class="text" required ></td>
		</tr>

		<tr>
			<td>Upload Karya mu</td>
			<td><input type="file" name="karya" required></td>
		</tr>

		<tr>
			<td>keterangan karya</td>
			<td><textarea rows="10" cols="50" required  name="ket"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Kirim" class="tambah"></td>
		</tr>
	</table>
</form>

<?php 
include 'rs_foot.php'; ?>

<style type="text/css">
	table{
		width: 60%;
		height: 50%;
	}

	.text{
		border-radius: 10px;
		border: 2px solid #23D668;
		height: 30px;
		width: 300px;
	}

	textarea{
		border-radius: 10px;
		border: 2px solid #23D668;
	}

	.read{
		border:0px solid white;
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


	.gagal{
		color: red;
		font-size: 20;
	}

	@media screen and (max-width: 1024px){
		.text{
			width: 70%;
		}

		table{
			line-height: 30px;
			width: 100%;
		}

		textarea{
			width: 90%;
		}

		p{
			text-align: justify;
		}
	}
</style>
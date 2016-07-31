<?php 
include 'rs_head.php'; 

if(isset($_POST['submit'])){
	$nama	=$_POST['nama'];
	$kelas 	=$_POST['kelas'];
	$email 	=$_POST['email'];
	$ket 	=$_POST['ket'];

			
	if(tambahkritiksaran($nama,$kelas,$email,$ket)){
		echo "<script>alert('Terimakasih telah mengirimkan Kritik dan Sarannya Kepada pihak sekolah')</script>";
	}else{
		echo "<script>alert('Oops, Pengiriman gagal')</script>";
	}
}



?>

<?php include 'rs_menu.php';?>

<p style="line-height:30px">Kirimkan kritik & Saran anda kepada pihak sekolah sebagai langkah pengembangan sekolah agar lebih baik, harap disampaikan juga jika kalian mendapatkan perlakuan yang sangat tidak baik dari lingkungan sekolah atau melihat kejanggalan di lingkungan sekolah, silahkan anda bisa laporkan di fasilitas kritik & saran ini. Terimakasih</p><br>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama lengkap</td>
			<td><input readonly type="text" class="read" name="nama" value="<?= $_SESSION['nama'];?>"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><input readonly type="text" class="read" name="kelas" value="<?= $_SESSION['kelas'];?>"></td>
		</tr>

		<tr>
			<td>Email Anda</td>
			<td><input type="email" name="email" class="text" required ></td>
		</tr>

		<tr>
			<td>Tulis Kritik & Saran</td>
			<td><textarea rows="10" cols="50" required name="ket"></textarea></td>
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
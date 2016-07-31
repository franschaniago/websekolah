<?php
include 'akses/akses_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilkartu_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$nama_awal	= $row['nama_lengkap'];
		$kelas_awal	= $row['kelas'];
		$nis_awal	= $row['nis'];
		$foto_awal	= $row['foto'];
	}
}


?>

<div id="kartu">
	<div id="logo">
		<img src="img/tut.png" width="50" height="50">
	</div>

	<div id="ket">
			<center><h4>Kartu Perpustakaan SMK Informatika Nusantara</h4></center>
	</div>

	<div id="ket1">
		<p><?= $nama_awal;?></p> <br>
		<p><?= $kelas_awal;?></p> <br>
		<p><?= $nis_awal;?></p> <br>
	</div>
	<div id="foto">
		<img width="150" height="145" style="border-radius:5px" src="<?= $foto_awal;?>";?>
	</div>
	<div id="ket2"><h6>Kartu Perpustakaan ini Berlaku selama menjadi siswa</h6></div>
</div>
<br><br>

	<input id="cetak" type="submit" name="submit" value="Cetak" onclick="window.print()">


<style type="text/css">
	*{
		padding: 0; margin: 0; font-family: sans-serif; text-decoration: none;
	}

	@media print{
		#cetak{
			display: none;
		}
	}
	
	#kartu{
		border: 0px solid black;
		width: 500px;
		height: 250px;
		margin: 50px auto;
		background-color: #00BCD4;
		padding: 10px;
		border-radius: 10px;
	}

	#logo{
		background-image: url(img/tut.png);
		width: 50px;
		height: 50px;
		float: left;
		padding-left: 5px;
		padding-top: 5px;
	}

	#ket{
		padding-top: 5px;
	}

	#ket1{
		clear: both;
		float: left;
		padding: 20px;
	}

	#ket2{
		clear: both;
		text-align: center;
	}

	#foto{
		border: 0px solid black;
		width: 150px;
		height: 145px;
		margin: 10px;
		float: right;
	}

	#cetak{
		margin: 5px;
		width: 60px;
		height: 30px;
		background: #2CCE7D;
		border-radius: 5px;
		border: 0px;
		color: white;
	}

	#cetak:hover{
		background-color: #66E8A7;
	}

</style>
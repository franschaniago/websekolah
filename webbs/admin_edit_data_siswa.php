<?php

include 'head_admin.php';



$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilsiswa_per_id($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$nis_awal	= $row['nis'];
		$nama_awal	= $row['nama_siswa'];
		$tgl_awal	= $row['tgl_lahir'];
		$foto_awal	= $row['foto_siswa'];
		$ekskul_awal= $row['ekskul'];
		$alamat_awal= $row['alamat'];

	}
}

if(isset($_POST['submit'])){
	$nis 		=$_POST['nis'];
	$namasiswa 	=$_POST['nama'];
	$kelas 		=$_POST['kelas'];
	$tgl 		=$_POST['date'];
	$ekskul 	=$_POST['ekskul'];
	$alamat 	=$_POST['alamat'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/siswa/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG"){
			
			if(edit_datasiswa($nis,$namasiswa,$kelas,$tgl,$lokasi,$ekskul,$alamat,$id)){
			header('location:admin_data_siswa.php');
			}else{
				echo "Ada kesalahan saat upload foto";
			}

		move_uploaded_file($asal, "img/siswa/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";
}



?>
<h3>Edit Data Siswa</h3>

<form action="" method="post" enctype="multipart/form-data">
	<div class="artikel">
		<table>
			<tr>
			<td>Nomor Induk Siswa</td>
			<td><input type="number" name="nis" class="text" value="<?php echo $nis_awal;?>" required></td>
			</tr>

			<tr>
			<td>Nama Lengkap Siswa</td>
			<td><input type="text" name="nama" class="text" value="<?php echo $nama_awal;?>" required></td>
			</tr>

			<tr>
			<td>Kelas</td>
			<td><select name="kelas" required class="text">
					<option value="0" selected> </option>
						<?php
						$result=tampilkelas();
						while ($row=mysqli_fetch_assoc($result)) {
						echo "<option value=$row[id_kelas] selected>$row[kelas]</option>";
						}

						?>
				</select></td>
			</tr>

			<tr>
			<td>Tgl Lahir</td>
			<td><input type="date" name="date" class="text" value="<?php echo $tgl_awal;?>" required></td>
			</tr>

			<tr>
			<td>Foto</td>
			<td><img width="100" height="100" src="<?php echo $foto_awal;?>"><input type="file" name="gambar" required></td>
			</tr>

			<td>Ekstrakulikuler</td>
			<td><select name="ekskul" required class="text">
					<option value="basket">Basket</option>
					<option value="volly">Volly Ball</option>
					<option value="robotic">Robotic</option>
					<option value="badminton">Badminton</option>
					<option value="music">Music</option>
					<option value="silat">Silat</option>
				</select>
			</tr>

			<tr>
			<td>Alamat</td>
			<td><textarea rows="10" cols="50" name="alamat"><?php echo $alamat_awal;?></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Tambah" class="tambah">&nbsp;<a href="admin_data_siswa.php" class="batal">Batal</a></td>
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
	width: 100px;
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
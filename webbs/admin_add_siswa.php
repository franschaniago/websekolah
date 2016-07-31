<?php
include 'head_admin.php';
$result=tampilkelas();


if(isset($_POST['submit'])){
	$nis 		=$_POST['nis'];
	$namasiswa 	=$_POST['nama'];
	$kelas 		=$_POST['kelas'];
	$date 		=$_POST['date'];
	$ekskul 	=$_POST['ekskul'];
	$alamat 	=$_POST['alamat'];

	$nama 	= $_FILES['gambar']['name'];
	$size 	= $_FILES['gambar']['size'];
	$error 	= $_FILES['gambar']['error'];
	$asal	= $_FILES['gambar']['tmp_name'];
	
	$lokasi="img/siswa/" . $nama;
	$format = pathinfo($nama, PATHINFO_EXTENSION);

	if($error === 0){

		if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
			
			if(tambahsiswa($nis,$namasiswa,$kelas,$date,$ekskul,$alamat,$lokasi)){
			echo "<script>alert('Data siswa berhasil ditambahkan')</script>";
			}else{
				echo "Sepertinya ada kesalahan saat menambah data";
			}

		move_uploaded_file($asal, "img/siswa/".$nama);
		}else{
			echo "Maaf format filenya harus jpg/png ";
		}

	
	}else "Ada kesalahan saat upload";

}



?>
<h3>Menambah Data Siswa</h3>

<form action="" method="post" enctype="multipart/form-data">
	<div class="artikel">
		<table>
			<tr>
			<td>Nomor Induk Siswa</td>
			<td><input type="number" name="nis"required class="text"></td>
			</tr>

			<tr>
			<td>Nama Lengkap Siswa</td>
			<td><input type="text" name="nama" required class="text"></td>
			</tr>

			<tr>
			<td>Kelas</td>
			<td><select name="kelas" required class="text">
					<option value="0" selected> </option>
						<?php
						
						while ($row=mysqli_fetch_assoc($result)) {
						echo "<option value=$row[id_kelas] selected>$row[kelas]</option>";
						}

						?>
				</select></td>
			</tr>

			<tr>
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
			<td>Tgl Lahir</td>
			<td><input type="date" name="date" required class="text"></td>
			</tr>

			<tr>
			<td>Foto</td>
			<td><input type="file" name="gambar" required></td>
			</tr>

			<tr>
			<td>Alamat</td>
			<td><textarea rows="10" cols="50" name="alamat"></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input class="edit" type="submit" name="submit" value="Tambah" class="tambah">&nbsp;<input class="hapus" type="reset" name="reset" class="batal" value="Batal"></td>
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

</style>
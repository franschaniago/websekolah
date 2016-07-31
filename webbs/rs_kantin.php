<?php
include 'rs_head.php';
include 'akses/rs_akses.php';

if(isset($_POST['submit'])){
	$nama 		=$_POST['nama'];
	$kelas 		=$_POST['kelas'];
	$makanan 	=$_POST['makanan'];
	$ket 		=$_POST['ket'];

	if(tambahpemesan($nama,$kelas,$makanan,$ket)){
		echo "<script>alert('Pesanan anda telah dikirim silahkan tunggu')</script>";
	}else{
		echo "Pesanan gagal terkirim";
	}
}


?>

<legend>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</legend>
<br>

<form method="post" action="">
	<table>
		<tr>
			<td>Nama Pemesan</td>
			<td><input type="text" name="nama" id="text"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td><select name="kelas" disabled>
				<option value="0"></option>
					<?php
					$result=tampilkelas();
					while ($row=mysqli_fetch_assoc($result)) {
					echo "<option value=$row[id_kelas] selected>$row[kelas]</option>";
					}

					?>
			</select></td>
		</tr>


		<tr>
			<td>Pilih Pesanan</td>
			<td><select name="makanan" required>
					<option value=0 selected> </option>
						<?php
						$result=tampilmenu();
						while ($row=mysqli_fetch_assoc($result)) {
						echo "<option value=$row[id_menu] selected>$row[nama_makanan]</option>";
						}

						?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td><textarea cols="40" rows="10" name="ket"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input class="tambah" type="submit" name="submit" value="Pesan"></td>
		</tr>
	</table>
</form>

<?php
include 'rs_foot.php'; ?>

<style type="text/css">
	table{
		width: 40%;
		height: 50%;
	}

	.tambah{
	background-color: #23D668;
	padding: 5px;
	border: 0px;
	color: white;
	width: 30%;
	}

	.tambah a{
		padding: 10px;
	}

	.tambah:hover{
	background-color: #54E28B;
	}
</style>
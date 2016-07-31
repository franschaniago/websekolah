<?php 
include 'rs_head.php';



 ?>
<?php include 'rs_menu.php';?>

<center><h3>Profil Pribadi</h3></center>

<center><img class="foto" width="200" height="200" src="<?php echo $_SESSION['foto'];?>"></center>

<form>
	<table id="tabprofil">
		<tr>
			<td><b>Nis</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['nis'];?></td>
		</tr>

		<tr>
			<td><b>Nama Lengkap</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['nama'];?></td>
		</tr>

		<tr>
			<td><b>Kelas</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['kelas'];?></td>
		</tr>

		<tr>
			<td><b>Tanggal Lahir</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['tgl'];?></td>
		</tr>

		<tr>
			<td><b>Ekstrakulikuler</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['ekskul'];?></td>
		</tr>

		<tr>
			<td><b>Alamat</b></td>
			<td>:</td>
			<td><?php echo $_SESSION['alamat'];?></td>
		</tr>		
	</table>
</form>

<?php include 'rs_foot.php';?>

<style>
	table{
		line-height: 50px;
		width: 75%;
		border: 0px solid black;
	}

	.foto{
		border:5px solid black;
		border-radius: 10px;
	}

</style>
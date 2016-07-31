<?php 
include 'head_admin.php';

$id = $_GET['id'];

if(isset($_GET['id'])){
	$artikel=tampilpengumuman($id);
	while ($row=mysqli_fetch_assoc($artikel)) {
		$isi_awal	= $row['isi_pengumuman'];
	}
}

if(isset($_POST['submit'])){
	$isi=$_POST['isi'];

	if(editpengumuman($isi,$id)){
		header('location:admin_pengumuman.php');
	}else{
		echo "<script>alert('Pengumuman gagal diperbaharui')</script>";
	}
}

?>

<form action="" method="post">
	<table>
		<tr>
			Tulis Pengumuman
			<td><textarea cols="90" rows="30" name="isi"><?= $isi_awal ;?></textarea></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Update" class="tambah"></td>
		</tr>
	</table>
</form>

<?php include 'foot_admin.php';?>

<style type="text/css">
	form{
		padding: 10px;
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

</style>
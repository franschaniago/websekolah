<?php
include 'head_admin.php';
$result=tampilkarya();


?>
<h3>Data Pengirim Ide & Karya </h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center">
		<td>No</td>
		<td>Nama Pengirim</td>
		<td>Kelas</td>
		<td>Email</td>
		<td>Karya</td>
		<td>Keterangan</td>
		<td>Waktu</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['nama_pengirim'];?></td>
		<td><?php echo $row['kelas_pengirim'];?></td>
		<td><?php echo $row['email_pengirim'];?></td>
		<td><a href="<?php echo $row['karya_pengirim'];?>">Lihat Karya</a></td>
		<td><?php echo $row['keterangan'];?></td>
		<td><?php echo $row['waktu'];?></td>
		<td><a class="hapus" href="admin_delete_karya.php?id=<?php echo $row['id_karya'];?>">Hapus</a></td>
	</tr>
	<?php $no++ ?>
	<?php } ?>
	</table>

</form>

<?php include 'foot_admin.php';?>

<style type="text/css">
	*{
		padding: 0; margin: 0; font-family: sans-serif; text-decoration: none; list-style: none;
	}

	table{
		width: 100%;
		border: 1px solid black;
		line-height: 30px;
	}


</style>
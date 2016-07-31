<?php
include 'head_admin.php';
$result=tampilkritiksaran();


?>
<h3>Data Pengirim </h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center">
		<td>No</td>
		<td>Nama Pengirim</td>
		<td>Kelas</td>
		<td>Email</td>
		<td>Krtik & Saran</td>
		<td>Waktu</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['nama_pengirim_ks'];?></td>
		<td><?php echo $row['kelas_pengirim_ks'];?></td>
		<td><?php echo $row['email_pengirim_ks'];?></td>
		<td><?php echo $row['kritik_saran'];?></td>
		<td><?php echo $row['waktu'];?></td>
		<td><a class="hapus" href="admin_delete_kritiksaran.php?id=<?php echo $row['id_ks'];?>">Hapus</a></td>
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
<?php
include 'head_admin.php';
$result=tampilpsb();

?>
<h3>Data Pendaftar PSB </h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center">
		<td>No</td>
		<td>Nama Pendaftar</td>
		<td>NISN</td>
		<td>Asal Sekolah</td>
		<td>Email</td>
		<td>Ijazah</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['nama_lengkap'];?></td>
		<td><?php echo $row['nisn'];?></td>
		<td><?php echo $row['asal_sekolah'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><a href="<?php echo $row['ijazah'];?>">Download Gambar</a></td>
		<td><a class="edit" href="admin_edit_psb.php?id=<?php echo $row['id_psb'];?>">Edit</a> | <a class="hapus" href="admin_delete_psb.php?id=<?php echo $row['id_psb'];?>">Hapus</a></td>
	</tr>
	<?php $no++ ?>
	<?php } ?>
	</table>

</form>
<br>
<a class="print" href="" onclick="window.print()">Print Laporan</a>
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

	@media print{
		#nav,#menu,.edit,.hapus,.print{
			display: none;
		}

		#konten{
			width: 100%;
		}
	}

	.print{
		background-color: #E67538;
		border:5px solid #E67538;
		color: white;
	}


</style>
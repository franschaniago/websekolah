<?php
include 'head_admin.php';
$result=tampilbukuperpus();


?>
<h3>Data Buku </h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center">
		<td>No</td>
		<td>Judul Buku</td>
		<td>Cover Buku</td>
		<td>Link Download</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['judul_buku'];?></td>
		<td><a href="<?php echo $row['cover_buku'];?>">Download Gambar</a></td>
		<td><?php echo $row['link'];?></td>
		<td><a class="edit" href="admin_edit_perpusonline.php?id=<?php echo $row['id_po'];?>">Edit</a> | <a class="hapus" href="admin_delete_perpusonline.php?id=<?php echo $row['id_po'];?>">Hapus</a></td>
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
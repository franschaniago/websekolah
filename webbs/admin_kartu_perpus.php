<?php
include 'head_admin.php';
$result=tampilkartuperpus();

/**/

?>
<h3>Data Pendaftar Kartu Perpus </h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center">
		<td>No</td>
		<td>Nama Lengkap</td>
		<td>Kelas</td>
		<td>Nis</td>
		<td>Foto</td>
		<td>Cetak</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['nama_lengkap'];?></td>
		<td><?php echo $row['kelas'];?></td>
		<td><?php echo $row['nis'];?></td>
		<td><a href="<?php echo $row['foto'];?>">Download Gambar</a></td>
		<td><a href="rs_cetak_kartuperpus.php?id=<?php echo $row['id_kartu_perpus'];?>">Lihat</a></td>
		<td><a class="edit" href="admin_edit_kartuperpus.php?id=<?php echo $row['id_kartu_perpus'];?>">Edit</a> | <a class="hapus" href="admin_delete_kartuperpus.php?id=<?php echo $row['id_kartu_perpus'];?>">Hapus</a></td>
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
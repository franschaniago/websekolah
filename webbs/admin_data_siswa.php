<?php 
include 'head_admin.php'; 

$result=tampilsiswa();



?>


<h3>Data Siswa - Siswi</h3>
<form>
	<table>
	<tr bgcolor="#3481DC" align="center" style="color:white">
		<td>No</td>
		<td>Nis</td>
		<td>Nama Lengkap</td>
		<td>Kelas</td>
		<td>Tgl Lahir</td>
		<td>Foto</td>
		<td>Ekskul</td>
		<td width="30%">Alamat</td>
		<td>Akses</td>
	</tr>

<?php
$no=1;
while ($row=mysqli_fetch_assoc($result)) { ?>
	<tr align="center">
		<td><?php echo $no;?></td>
		<td><?php echo $row['nis'];?></td>
		<td><?php echo $row['nama_siswa'];?></td>
		<td><?php echo $row['kelas_siswa'];?></td>
		<td><?php echo $row['tgl_lahir'];?></td>
		<td><a href="<?php echo $row['foto_siswa'];?>">Lihat Gambar</a></td>
		<td><?php echo $row['ekskul'];?></td>
		<td><?php echo $row['alamat'];?></td>
		<td><a class="edit" href="admin_edit_data_siswa.php?id=<?php echo $row['nis'];?>">Edit</a> | 
		<a class="hapus" href="admin_delete_siswa.php?id=<?php echo $row['nis'];?>">Hapus</a></td>
	</tr>
	<?php $no++ ?>
	<?php } ?>
	</table>

</form><br>
<a class="print" href="" onclick="window.print()">Print Laporan</a>


<?php include 'foot_admin.php'; ?>

<style type="text/css">
	table{
		width: 100%;
		line-height: 20px;
	}

	table td{
		border-bottom: 1px solid black;
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
<?php
include 'akses/akses.php';
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
		<td><img src="<?php echo $row['ijazah'];?>"></td>
		<td><a href="">Edit</a> | <a href="">Hapus</a></td>
	</tr>
	<?php $no++ ?>
	<?php } ?>
	</table>

</form>


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
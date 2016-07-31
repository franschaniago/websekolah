<?php
include 'head_admin.php';
$result=tampilpengumuman();

?>



<form action="" method="post">
	<h2>Pengumuman</h2>
	<br>
		<?php 
		while ($row=mysqli_fetch_assoc($result)) { ?>
		<p class="isi"><?php echo $row['isi_pengumuman'];?></p>
		
		<br>

		<a class="tambah" href="admin_edit_pengumuman.php?id=<?php echo $row['id_pengumuman'];?>">Update</a>
		<?php } ?>
</form>

<?php include 'foot_admin.php'; ?>

<style type="text/css">
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

	.isi{
		line-height: 30px;
	}
</style>
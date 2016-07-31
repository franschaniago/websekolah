<?php
include 'head_admin.php';
$result=tampildata();




?>


<?php
while ($row=mysqli_fetch_assoc($result)) { ?>

<form action="" method="post" style="border:1px solid black; margin-top:5px;">
<br>

	<h3><?= $row['judul'];?></h3><br>

	<p style="padding:2px; float:left;"><img width="100" height="100" src="<?= $row['gambar'];?>"></p><br>

	<p><?= $row['berita'];?></p><br><br>

	<div class="tombol">
	<b class="edit"><a href="admin_edit_prestasi.php?id=<?= $row['id_berita'];?>">Edit</a></b> <b class="hapus"><a href="admin_delete_prestasi.php?id=<?= $row['id_berita'];?>">Hapus</a></b>
	</div>
<br>
</form>
<br><br>
<?php } ?>


<div id="clear"/>
<?php include 'foot_admin.php';?>

<style type="text/css">

#clear{
	clear: both;
}
</style>




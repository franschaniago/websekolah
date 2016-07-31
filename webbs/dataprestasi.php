<?php

include 'akses/akses_admin.php';
$result=tampildata();
while ($row=mysqli_fetch_assoc($result)) { ?>
<link rel="stylesheet" type="text/css" href="style_admin.css">
<form action="" method="post">
<br>


	<p style="padding:2px; float:left;"><img width="100" height="100" src="<?= $row['gambar'];?>"></p><br>

	<p><?= $row['berita'];?></p><br><br>

	<div class="tombol">
	<b class="edit"><a href="admin_edit_prestasi.php?id=<?= $row['id_berita'];?>">Edit</a></b> <b class="hapus"><a href="admin_delete_prestasi.php?id=<?= $row['id_berita'];?>">Hapus</a></b>


</form>
<br><br>
<?php } ?>


<style type="text/css">
	

.edit{
	background-color: #23D668;
	padding: 5px;

}

.edit a{
	padding: 10px;
	color: white;
}

.edit:hover{
	background-color: #54E28B;
}

.hapus{
	background-color: #EF4848;
	padding: 5px;

}


.hapus a{
	padding: 10px;
	color: white;
}

.hapus:hover{
	background-color: #EC6565;
}





</style>

<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_kritiksaran($_GET['id'])){
		header('location:admin_kritiksaran.php');
	}else echo "gagal menghapus data";
}

?>
<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_slide($_GET['id'])){
		header('location:admin_slide.php');
	}else echo "gagal menghapus data";
}

?>
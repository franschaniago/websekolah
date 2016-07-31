<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_data($_GET['id'])){
		header('location:admin_prestasi.php');
	}else echo "gagal menghapus data";
}

?>
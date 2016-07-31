<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_data_kartu($_GET['id'])){
		header('location:admin_kartu_perpus.php');
	}else echo "gagal menghapus data";
}

?>
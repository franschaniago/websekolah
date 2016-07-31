<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_data_psb($_GET['id'])){
		header('location:admin_psb.php');
	}else echo "gagal menghapus data";
}

?>
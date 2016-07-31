<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_data_siswa($_GET['id'])){
		header('location:admin_data_siswa.php');
	}else echo "gagal menghapus data";
}

?>
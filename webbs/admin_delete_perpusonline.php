<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_data_buku($_GET['id'])){
		header('location:admin_perpusonline.php');
	}else echo "gagal menghapus data";
}

?>
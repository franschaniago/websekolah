<?php

include 'akses/akses_admin.php';

if(isset($_GET['id'])){
	if(hapus_karya($_GET['id'])){
		header('location:admin_karya.php');
	}else echo "gagal menghapus data";
}

?>
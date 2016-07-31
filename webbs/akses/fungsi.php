<?php


function tambahdata_psb($nama,$nisn,$asal,$email,$lokasi){
	$query="INSERT INTO psb(nama_lengkap,nisn,asal_Sekolah,email,ijazah) VALUES ('$nama','$nisn','$asal','$email','$lokasi')";
	return run($query);
}

function run($query){
	global $link;

	if(mysqli_query($link,$query)) return true;
	else return false;
}


?>
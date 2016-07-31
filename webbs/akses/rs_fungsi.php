<?php

function tambahdatakartu($nama_lengkap,$kelas,$nis,$lokasi){
	$query="INSERT INTO kartu_perpus(nama_lengkap,kelas,nis,foto) VALUES ('$nama_lengkap','$kelas','$nis','$lokasi')";
	return run($query);
}

function tambahpemesan($nama,$kelas,$makanan,$ket){
	$query="INSERT INTO kantin(nama_pemesan,kelas,makanan,ket) VALUES ($nama','$kelas','$makanan','$ket')";
	return run($query);
}

function tambahkomen($nama,$komen){
	$query="INSERT INTO diskusi(nama_komentar,isi_komentar) VALUES ('$nama','$komen')";
	return run($query);
}

function tambahkarya($nama_siswa,$kelas,$email,$lokasi,$ket){
	$query="INSERT INTO karya(nama_pengirim, kelas_pengirim, email_pengirim, karya_pengirim, keterangan) VALUES ('$nama_siswa','$kelas','$email','$lokasi','$ket')";
	return run($query);
}

function tambahkritiksaran($nama,$kelas,$email,$ket){
	$query="INSERT INTO kritiksaran(nama_pengirim_ks, kelas_pengirim_ks, email_pengirim_ks, kritik_saran) VALUES ('$nama','$kelas','$email','$ket')";
	return run($query);
}

function tampilberita_diskusi(){
	global $link;
	$query="SELECT * FROM berita_diskusi";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilpengumuman(){
	global $link;
	$query="SELECT * FROM pengumuman";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilmenu(){
	global $link;
	$query="SELECT * FROM menu";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilkelas(){
	global $link;
	$query="SELECT * FROM kelas";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}


function tampildiskusi(){
	global $link;
	$query="SELECT * FROM diskusi ORDER BY id_diskusi DESC";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilbukuperpus(){
	global $link;
	$query="SELECT * FROM perpus_online";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}


function run($query){
	global $link;

	if(mysqli_query($link,$query)) return true;
	else return false;
}

?>
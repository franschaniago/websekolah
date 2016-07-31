<?php

function periksa_login($username,$password){
	global $link;
	$sql 	= "SELECT * FROM login_hal_admin WHERE username_hal_admin = '$username' AND pass_hal_admin = '$password'";
	$query 	= mysqli_query($link,$sql);
	$cek=mysqli_fetch_array($query);

	$_SESSION['nama']=$cek['nama_lengkap_user'];
	$_SESSION['level']=$cek['level_hal_admin'];
	
	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function artikel_prestasi(){
	global $link;
	$perpage = 3;

	$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
	$start =($page > 1) ? ($page * $perpage) - $perpage:0;

	$query="SELECT * FROM prestasi ORDER BY id_berita DESC limit $start, $perpage ";
	if($result=mysqli_query($link, $query) or die("Gagal menampilkan data")){
	return $result;
	}

}

function all_prestasi(){
	global $link;

	$query = "SELECT * from prestasi";
	if($result=mysqli_query($link, $query) or die("Gagal menampilkan data")){
	return $result;
	}
}

function tambahdata_psb($nama,$nisn,$asal,$email,$lokasi){
	$query="INSERT INTO psb(nama_lengkap,nisn,asal_Sekolah,email,ijazah) VALUES ('$nama','$nisn','$asal','$email','$lokasi')";
	return run($query);
}

function tambahdata_prestasi($judul,$lokasi,$isi){
	$query="INSERT INTO prestasi(judul,gambar,berita) VALUES ('$judul','$lokasi','$isi')";
	return run($query);
}
function tambah_berita_diskusi($judul_berita,$lokasi,$isi_berita){
	$query="INSERT INTO berita_diskusi(judul_berita,foto_berita,isi_berita) VALUES ('$judul_berita','$lokasi','$isi_berita')";
	return run($query);	
}
function tambahpengumuman($isi){
	$query="INSERT INTO pengumuman(isi_pengumuman) VALUES ('$isi')";
	return run($query);
}

function tambahsiswa($nis,$namasiswa,$kelas,$date,$ekskul,$alamat,$lokasi){
	$query="INSERT INTO siswa(nis,nama_siswa,kelas_siswa,tgl_lahir,foto_siswa,ekskul,alamat) VALUES ('$nis','$namasiswa','$kelas','$date','$lokasi','$ekskul','$alamat')";
	return run($query);
}

function tambahuser($nis,$ph){
	$query="INSERT INTO user(nis,password,nama_lengkap) VALUES ('$nis','$nama','$kelas')";
	return run($query);
}

function tambahdata_buku($judul,$lokasi,$link_download){
	$query="INSERT INTO perpus_online(judul_buku,cover_buku,link) VALUES ('$judul','$lokasi','$link_download')";
	return run($query);
}

function tambahdata_slide($lokasi){
	$query="INSERT INTO slide(foto_slide) VALUES ('$lokasi')";
	return run($query);
}

function tampilberita_diskusi(){
	global $link;
	$query="SELECT * FROM berita_diskusi";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampildata(){
	global $link;
	$query="SELECT * FROM prestasi";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilbukuperpus(){
	global $link;
	$query="SELECT * FROM perpus_online";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilslide(){
	global $link;
	$query="SELECT * FROM slide";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampil_per_id($id){
	global $link;
	$query="SELECT * FROM prestasi WHERE id_berita=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilkritiksaran(){
	global $link;
	$query="SELECT * FROM kritiksaran";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilpsb_per_id($id){
	global $link;
	$query="SELECT * FROM psb WHERE id_psb=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilberita_diskusi_per_id($id){
	global $link;
	$query="SELECT * FROM berita_diskusi WHERE id_berita=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;	
}

function tampilkartuperpus(){
	global $link;
	$query="SELECT * FROM kartu_perpus";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilkartu_per_id($id){
	global $link;
	$query="SELECT * FROM kartu_perpus WHERE id_kartu_perpus=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilkarya(){
	global $link;
	$query="SELECT * FROM karya";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilsiswa_per_id($id){
	global $link;
	$query="SELECT * FROM siswa WHERE nis=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilbuku_per_id($id){
	global $link;
	$query="SELECT * FROM perpus_online WHERE id_po=$id";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilkelas(){
	global $link;
	$query="SELECT * FROM kelas";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilsiswa(){
	global $link;
	$query="SELECT * FROM siswa";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function tampilpengumuman(){
	global $link;
	$query="SELECT * FROM pengumuman";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function editdata($judul,$lokasi,$isi,$id){
	$query="UPDATE prestasi SET judul='$judul', gambar='$lokasi', berita='$isi' WHERE id_berita=$id";
	return run($query);
}

function edit_berita_diskusi($judul_berita,$lokasi,$isi_berita,$id){
	$query="UPDATE berita_diskusi SET judul_berita='$judul_berita', foto_berita='$lokasi', isi_berita='$isi_berita' WHERE id_berita=$id";
	return run($query);	
}

function editdata_psb($nama,$nisn,$asal,$email,$lokasi,$id){
	$query="UPDATE psb SET nama_lengkap='$nama', nisn='$nisn', asal_sekolah='$asal', email='$email', ijazah='$lokasi' WHERE id_psb=$id";
	return run($query);
}

function edit_datakartu($nama_lengkap,$kelas,$nis,$lokasi,$id){
	$query="UPDATE kartu_perpus SET nama_lengkap='$nama_lengkap', kelas='$kelas', nis='$nis', foto='$lokasi' WHERE id_kartu_perpus=$id";
	return run($query);
}

function edit_datasiswa($nis,$namasiswa,$kelas,$tgl,$lokasi,$ekskul,$alamat,$id){
	$query="UPDATE siswa SET nis='$nis', nama_siswa='$namasiswa', kelas_siswa='$kelas', tgl_lahir='$tgl', foto_siswa='$lokasi', ekskul='$ekskul', alamat='$alamat' WHERE nis=$id";
	return run($query);
}

function editpengumuman($isi,$id){
	$query="UPDATE pengumuman SET isi_pengumuman='$isi' WHERE id_pengumuman=$id";
	return run($query);
}

function editdata_buku($judul,$lokasi,$link_download,$id){
	$query="UPDATE perpus_online SET judul_buku='$judul', cover_buku='$lokasi', link='$link_download' WHERE id_po=$id";
	return run($query);	
}

function hapus_data_kartu($id){
	$query="DELETE FROM kartu_perpus WHERE id_kartu_perpus=$id";
	return run($query);
}

function hapus_data($id){
	$query="DELETE FROM prestasi WHERE id_berita=$id";
	return run($query);
}

function hapus_data_buku($id){
	$query="DELETE FROM perpus_online WHERE id_po=$id";
	return run($query);
}

function hapus_data_psb($id){
	$query="DELETE FROM psb WHERE id_psb=$id";
	return run($query);
}

function hapus_data_siswa($id){
	$query="DELETE FROM siswa WHERE nis=$id";
	return run($query);
}

function hapus_karya($id){
	$query="DELETE FROM karya WHERE id_karya=$id";
	return run($query);
}

function hapus_kritiksaran($id){
	$query="DELETE FROM kritiksaran WHERE id_ks=$id";
	return run($query);
}

function hapus_slide($id){
	$query="DELETE FROM slide WHERE id_slide=$id";
	return run($query);
}

function tampilpsb(){
	global $link;
	$query="SELECT * FROM psb";
	$result=mysqli_query($link,$query) or die('gagal menampilkan data');
	return $result;
}

function ceklogin($nis , $pass){
        global $link;
       
        $sql  = "SELECT * FROM siswa WHERE nis = '$nis' AND tgl_lahir = '$pass' ";
		$query 	= mysqli_query($link,$sql);
		$cek=mysqli_fetch_array($query);
		$_SESSION['nis'] 		     = $cek['nis'];	
		$_SESSION['nama']		     = $cek['nama_siswa'];	
		$_SESSION['kelas']	     	 = $cek['kelas_siswa'];
		$_SESSION['tgl']	     	 = $cek['tgl_lahir'];
		$_SESSION['foto']	     	 = $cek['foto_siswa'];
		$_SESSION['ekskul']	     	 = $cek['ekskul'];
		$_SESSION['alamat']	     	 = $cek['alamat'];
		$_SESSION['level']	     	 = $cek['level'];
		if(mysqli_num_rows($query)>0){
			return true;
		}else{
			return false;
		}
}

function run($query){
	global $link;

	if(mysqli_query($link,$query)) return true;
	else return false;
}
?>
<?php 
include 'akses/akses_admin.php';

$login=true;

if($_SESSION['level']=='admin' || $_SESSION['level']=='perpus'){
	if($_SESSION['level']=='admin'){
	$login=false; 
	}

$result=tampildata();
$jumlah=mysqli_num_rows($result);

$result2=tampilsiswa();
$jumlahsiswa=mysqli_num_rows($result2);

$result3=tampilpsb();
$jumlahpsb=mysqli_num_rows($result3);

$result4=tampilkartuperpus();
$jumlahkartu=mysqli_num_rows($result4);

$result5=tampilkritiksaran();		
$jumlahkritiksaran=mysqli_num_rows($result5);

$result6=tampilkarya();
$jumlahkarya=mysqli_num_rows($result6);

$result7=tampilbukuperpus();
$jumlahbuku=mysqli_num_rows($result7);

$result8=tampilslide();
$jumlahslide=mysqli_num_rows($result8);


?>

<link rel="stylesheet" type="text/css" href="style_admin.css">

<div id="wrap">
	<div id="nav">
		<ul>
			<li class="judul_admin">Halaman Admin Smk Informatika Nusantara</li>
			<li class="logout"><a href="logout_admin.php">Logout</a></li>
		</ul>
	</div>

	<div id="isi">

		<div id="menu">
			<H3 class="judul" align="center">Menu</H3>

			<ul>
			<?php if($login==false){ ?>
				<li><a href="">Siswa-Siswi <a id="jumlah"><?php echo $jumlahsiswa ;?></a></a>
					<ul>
						<li><a href="admin_data_siswa.php">Data Siswa-Siswi</a></li>
						<li><a href="admin_add_siswa.php">Tambah Data Baru</a></li>
					</ul>
				</li>

				<li><a href="">Ide & Karya <a id="jumlah"><?php echo $jumlahkarya ;?></a></a>
					<ul>
						<li><a href="admin_karya.php">Data Masuk</a></li>
					</ul>
				</li>

				<li><a href="">Kritik & Saran <a id="jumlah"><?php echo $jumlahkritiksaran ;?></a></a>
					<ul>
						<li><a href="admin_kritiksaran.php">Data Masuk</a></li>
					</ul>
				</li>

				<li><a href="admin_prestasi.php">Prestasi <a id="jumlah"><?php echo $jumlah ;?></a></a>
					<ul>
						<li><a href="admin_prestasi.php" >Artikel</a></li>
						<li><a href="admin_add_prestasi.php">Tambah Artikel</a></li>
					</ul>
				</li>

				<li><a href="">Psb Online <a id="jumlah"><?php echo $jumlahpsb ;?></a></a>
					<ul>
						<li><a href="admin_psb.php">Data Pendaftar</a></li>
					</ul>
				</li>
				<?php } ?>

				<li><a href="">Kartu Perpustakaan <a id="jumlah"><?php echo $jumlahkartu ;?></a></a>
					<ul>
						<li><a href="admin_kartu_perpus.php">Data Pemilik Kartu</a></li>
					</ul>
				</li>

				<li><a href="">Perpustakaan Online <a id="jumlah"><?php echo $jumlahbuku ;?></a></a>
					<ul>
						<li><a href="admin_perpusonline.php">Data Buku</a></li>
						<li><a href="admin_add_data_buku_perpus.php">Tambah Data Buku</a></li>
					</ul>
				</li>

				<?php if($login==false){ ?>
	
				<li><a href="admin_pengumuman.php">Pengumuman</a></li>

				<li><a href="">Slide Foto <a id="jumlah"><?php echo $jumlahslide ;?></a></a>
					<ul>
						<li><a href="admin_slide.php">Tambah Foto Slide</a></li>
					</ul>
				</li>

				<li><a href="">Berita Diskusi </a>
					<ul>
						<li><a href="admin_edit_berita_diskusi.php">Buat Berita Diskusi</a></li>
					</ul>
				</li>
				
				<?php } ?>
			</ul>
		</div>

		<div id="konten"> 




<style type="text/css">
	#jumlah{
		background-color: #3481DC; 
		border:3px solid #3481DC;
	}

	.judul_admin{
		font-size: 25;
		float: left;
		padding: 5px;
	}

	.logout{
		float: right;
		font-size: 25;
		padding: 5px;
	}
</style>

<?php }else{
	header('location:login_admin.php');
} ?>
	


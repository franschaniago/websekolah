<?php 
include 'rs_head.php'; 

if($_SESSION['level']=='siswa'){	
?>
		
			<a href="rs_profil.php"><div class="kol1" id="dua">
				<p align="center" style="padding:10px; color:black; font-size:15;">Profil Anda</p>
			</div></a>

			<a href="rs_add_kartu_perpus.php"><div class="kol1" id="satu">
				<p align="center" style="padding:10px; color:black; font-size:15;">Buat Kartu Perpus mu disini</p>
			</div></a>

			<a href="rs_perpusonline.php"><div class="kol1" id="tiga">
				<p align="center" style="padding:10px; color:black; font-size:15;">Perpus Online</p>
			</div></a>

			<a href="rs_diskusi.php"><div class="kol2" id="empat">
				<p align="center" style="padding:10px; color:black; font-size:15;">Forum Diskusi Siswa</p>
			</div></a>

			<a href="rs_ide.php"><div class="kol2" id="lima">
				<p align="center" style="padding:10px; color:black; font-size:15;">Kirim Ide Kreasi Mu</p>
			</div></a>

			<a href="rs_kritik_saran.php"><div class="kol2" id="enam">
				<p align="center" style="padding:10px; color:black; font-size:15;">Kritik & Saran Sekolah</p>
			</div></a>

<?php 
include 'rs_foot.php'; ?>

<?php }else{
	header('location:index.php');
} ?>

<style>

.isi{
	line-height: 30px;
	font-size: 15px;
}
</style>
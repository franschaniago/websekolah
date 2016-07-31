<?php 
include 'rs_head.php';
$result5=tampildiskusi();		
$jumlahkomentar=mysqli_num_rows($result5);

$result=tampildiskusi();
$result2=tampilberita_diskusi();

if(isset($_POST['submit'])){
	$nama 	=$_POST['nama'];	
	$komen 	=$_POST['komen'];


	if(tambahkomen($nama,$komen)){
		header('location:rs_diskusi.php');
	}else{
		echo "gagal komentar";
	}

}

 ?>
<?php include 'rs_menu.php';?>


<?php while ($row=mysqli_fetch_assoc($result2)) { ?>
	
	<table>
		<tr>
			<td align="center"><h3><?php echo $row['judul_berita'];?></h3></td>
		</tr>

		<tr>
			<td align="center"><img width="200" height="200" src="<?php echo $row['foto_berita'];?>"></td>
		</tr>

		<tr>
			<td><?php echo $row['isi_berita'];?></td>
		</tr>

		<tr>
			<td style="font-size:13px;"><i>Di Posting oleh Admin pada <?php echo $row['tgl_berita'];?></i></td>
		</tr>
	</table>
	
<?php } ?>
<br><br>

<div id="container">
<div id="tulis">	
	<form method="post" action="">
		<input readonly class="user" type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"><br>
		<textarea rows="10" cols="80" name="komen" class="jawab" required placeholder="Tulis komentar anda....."></textarea><br><br>
		<input class="komen" type="submit" name="submit" value="Komentar">
	</form>
</div>
</div>
<div id="total">Total komentar : <?php echo $jumlahkomentar;?></div>

<?php while ($row=mysqli_fetch_assoc($result)) { ?>

<div id="diskusi">
	<div id="komentar">
		<h4><?php echo $row['nama_komentar'];?></h4><br>
		<p class="isi"><?php echo $row['isi_komentar'];?></p><br>
		<p class="jam"><?php echo $row['jam_komentar'];?></p>
	</div>
</div>

<?php } ?>



<style type="text/css">
	textarea{
		width: 400px;
		height: 100px;
	}

	#diskusi{
		width: 65%;
		background-color: #fff;
		border: 3px solid #82CBF4;
		border-radius: 5px;
		height: auto;
		margin: 5px;
	}

	#komentar{
		padding: 10px;
	}

	#tulis{
		padding: 10px;
	}

	.jam{
		font-size: 12px;
	}

	.user{
		border:0px;
		background-color: white;
		font-size: 20px;
	}

	.komen{
	background-color: #1b4b6d;
	padding: 5px;
	border: 0px;
	color: white;
	width: 10%;
	}

	.komen:hover{
		background-color: #4a99d2;
	}

	.jawab{
		border:2px solid #54D680;
		border-radius: 10px;
	}

	#total{
		background-color: green;
		color: white;
		width: 13%;
		margin-left: 10px;
	}

	@media screen and (max-width: 1024px){
		.komen{
			width: 100%;
		}

		#diskusi{
			width: 90%;
		}

		#total{
			width: 50%;
		}
	}


</style>

<?php include 'rs_foot.php';?>
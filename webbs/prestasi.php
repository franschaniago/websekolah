<?php 

include "head.php";

$perpage=3;
$result= artikel_prestasi();

$result2=all_prestasi();
$total = mysqli_num_rows($result2);

$pagees= ceil($total/$perpage);

?>

<?php while ($row=mysqli_fetch_assoc($result)) { ?>


<form action="" method="post">
<br>

	<h3><?= $row['judul'];?></h3><br>

	<p style="padding:2px; float:left;"><img width="150" height="150" src="<?= $row['gambar'];?>"></p><br>

	<p style="line-height:30px;"><?= $row['berita'];?></p><br>

</form>
<br><br><br><br>	

<?php } ?>


<div class="halaman">
Halaman
	<?php for($i=1; $i<=$pagees; $i++){ ?>

		<a href="?halaman=<?php echo $i ?>"> <?php echo $i ?></a>

	<?php } ?>
</div>

<?php include "foot.php";?>

<style>

.halaman{
	text-align: center;
	font-size: 20;
}

.halaman a{
	color: white;
	border: 1px solid blue;
	text-decoration: none;
	background-color: blue
}

.halaman a:hover{
	background-color: green;
	border-color: green;
}
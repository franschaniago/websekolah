<link rel="stylesheet" type="text/css" href="style.css">
<?php 
include 'rs_head.php'; 

$result=tampilbukuperpus();

?>


<?php include 'rs_menu.php'; ?>


<?php
while ($row=mysqli_fetch_assoc($result)) { ?>
<div class="col-4">
	<center>
	<b><?php echo $row['judul_buku'];?></b><br><br>
	<img width="180" height="150" src="<?php echo $row['cover_buku'];?>"><br><br>
	<a id="link" href="<?= $row['link'];?>">Download PDF</a>
	</center>
</div>
<?php } ?>



<style type="text/css">
	.col-4{
		width: 23%;
		margin: 1%;
		float: left;
		height: 220px;
		color: black;
	}

	#link{
		background-color: #2CB01E;
		color: white;
		border:6px solid #2CB01E;
		border-radius: 5px;
	}

	#link:hover{
		background-color: #65B75C;
		border-color: #65B75C;
	}

@media screen and (max-width: 1024px){
	.col-4{
		width: 100%;
	}
}
</style>











































<?php 
include 'rs_foot.php'; 
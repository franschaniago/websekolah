<?php
include 'akses/rs_akses.php';
$result=tampilpengumuman();


?>
<script src="js/jquery-1.11.3.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
 
<style> 
#panel,#flip
{
padding:5px;
text-align:center;
background-color:#1b4b6d;
border:solid 0px black;
color: white;
}
#panel
{
padding:50px;
display:none;
}

#flip{
	font-size: 30px;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="rs_style.css">

<div id="wrap">
<div id="atas">
<center>
	<img src="img/rumah.png" width="200" height="200">	<br>
	<p style="color:white; font-size:80px;">Rumah Siswa</p></center>

</div>

	<div id="nav">
	<ul>
		<li style="color:white"><?php echo $_SESSION['nama'];?></b></li>
		<li><a href="rs_index.php">Home</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>

	<div id="flip" style="align:center">Pengumuman</div>
		<div id="panel">
			<?php 
			while ($row=mysqli_fetch_assoc($result)) { ?>
				<p><?php echo $row['isi_pengumuman'];?></p><br>

			<?php } ?>
		</div>

	<div id="body">
	
		<div id="isi">
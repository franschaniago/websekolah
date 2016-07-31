<?php 
include 'head_admin.php';



$result2=tampilberita_diskusi();



while ($row=mysqli_fetch_assoc($result2)) { ?>
	
	<table>
		<tr>
			<td align="center"><h2><?php echo $row['judul_berita'];?></h2></td>
		</tr>

		<tr>
			<td align="center"><img width="200" height="200" src="<?php echo $row['foto_berita'];?>"></td>
		</tr>

		<tr>
			<td><?php echo $row['isi_berita'];?></td>
		</tr>

		<tr>
			<td><a href="edit_berita_diskusi.php?id=<?php echo $row['id_berita'];?>">Update</a></td>
		</tr>
	</table>
	
<?php } ?>
<br><br>

<?php include 'foot_admin.php';
?>


<style>
table{
	line-height: 30px;
}
	table tr td a{
		background-color: #23D668;
		border:5px solid #23D668;
		color: white; 
	}

	table tr td a:hover{
		background-color: #54E28B;
		border-color: #54E28B;
	}


</style>
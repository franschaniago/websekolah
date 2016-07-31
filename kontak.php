<!DOCTYPE html>
<html>
<?php include "header.php";?>
	<div class="isimenu">
		<div class="isi">
		<style type="text/css">
		#tombol{
			background-color: #B9C9E2;
			border-radius: 5px;
			width: 70px;
			height: 30px;
			font: arial;
			font-size: 20px;
		}
		#tombol:hover{
			background-color:#5C8FBF 
		}
		</style>
			<h3>Kontak Kami Via email</h3><br>
			<form action="" method="post" style="width:30%">
				
					<legend align="center">Isi Pertanyaan</legend><br>
						Nama*<br>
						<input type="text" name="text" required><br>
						Email*<br>
						<input type="email" name="email" required><br>
						Tanya*<br>
						<textarea cols="80" rows="10"></textarea><br><br> 
						<input id="tombol" type="submit" name="submit" value="kirim">
				
			</form><br><br>
			* Wajib di isi

		</div>
		<div class="menu">
			<?php include "menu.php";?>
		</div>
	</div>
	<?php include "footer.php";?>
</div>
</body>
</html>
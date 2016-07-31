<?php
include 'akses/akses_admin.php';


if(isset($_POST['submit'])){
	$nis 		  =$_POST['nis'];
	$pass 		=$_POST['pass'];


	if(ceklogin($nis,$pass)){
		header('location:rs_index.php');
	}else{
		echo "<script>alert('Login gagal, Periksa kembali Nis atau Password anda')</script>";
		}
}


?>


  <script src="jquery-1.11.3.min.js"></script>

  <script src="jquery.slides.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
  

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>


<div id="wrap">
<div id="atas">
  <table style="width:50%">
  	<tr>
  		<td><img style="float:left" src="img/tut.png" width="50" height="50"></td>
  		<td><p style="font-size:50px; color:#82CBF4;">Smkinfonusa.sch.id</p></td>
  	</tr>
  </table>
</div>

  <div id="nav">
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="jurusan.php">Jurusan</a></li>
      <li><a href="ekskul.php">Ekstrakulikuler</a></li>
      <li><a href="prestasi.php">Prestasi</a></li>
      <li><a href="psb.php">Psb Online</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>
  </div>
	<div id="slides">
      <?php
      $result=tampilslide();
      while ($row=mysqli_fetch_assoc($result)) { ?>
      <img src="<?php echo $row['foto_slide'];?>">
      <?php } ?>
	</div>

	  <script>
    $(function() {
      $('#slides').slidesjs({
        play: {
          active: true,
          auto: true,
          interval: 6000,
          swap: true
        }
      });
    });
  </script>


</body>
</html>


	<div id="body">
		<div id="isi"> 
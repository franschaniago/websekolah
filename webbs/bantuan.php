function ceklogin($nis , $pass){
	global $link;
	
 	$query	= "SELECT * FROM user WHERE nis = ? AND password = ? ";
    	$stmt 	= mysqli_prepare($link , $query); 
	mysqli_stmt_bind_param($stmt , 'ss' , $link , $nis , $pass);
	
	if(!mysqli_stmt_execute($stmt)){
		return false;
	}else{
		if(mysqli_num_rows($stmt) <= 0){
			return false;
		}else{
			return mysqli_fetch_assoc($stmt);
		}
	} 
}
 
 
if(isset($_POST['submit'])){
        $nis            =$_POST['nis'];
        $pass           =$_POST['pass'];
 
 		if($login = ceklogin($nis , $pass)){
			$_SESSION['nis'] 	= $login['nis'];
			$_SESSION['password']   = $login['password'];
			$_SESSION['nama'] 	= $login['nama_lengkap'];
			header('location:rs_index.php');
		}else{
			echo "<script>alert('Login gagal')</script>";
		}
}
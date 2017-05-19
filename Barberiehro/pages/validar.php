
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['user'];
	$pass=$_POST['password'];


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasena']){
			$_SESSION['id_login']=$f['id_login'];
			$_SESSION['user']=$f['usuario'];
			$_SESSION['rol']=$f['rol'];

			header("Location: ../citas1.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../index.html'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.html'</script>";	

	}

?>
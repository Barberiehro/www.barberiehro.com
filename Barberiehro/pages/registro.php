<?php

	$type=$_POST['tipo1'];
	$cost=$_POST['costo1'];
	$dess= $_POST['descripcion1'];
//	$usuario=$_POST['user'];
//	$pass= $_POST['pass'];
//	$rpass=$_POST['rpass'];
//	$mpass=$_POST['mpass'];


	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
//	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE usuario='$usuario'");
//	$check_mail=mysqli_num_rows($checkemail);
//		if($pass==$rpass){
//			if($check_mail>0){
//				echo ' <script language="javascript">alert("Atencion, ya existe el usuario, verifique sus datos");</script> ';
//			}else{
				
	
    	//		date_default_timezone_set("America/Mexico_City");
		//		$passmd5=md5($pass);
		//		$fecha=date("d/m/Y");
		//		$hora=date("H:m:s A");
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

				$query ="SELECT MAX(id_servicio)+ 1 as id_servicio FROM servicios";
				$id=mysqli_query($mysqli,$query);
				$nid =0;
				while ($objet = mysqli_fetch_object($id)) {
					$nid = $objet->id_servicio;
				}

				mysqli_query($mysqli,"INSERT INTO servicios VALUES('$nid','$type','$cost')");

				mysqli_query($mysqli,"INSERT INTO tipos VALUES('$dess','$nid')");

				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';

				header('Location: ../index.html');

				










				
		//	}
			
//		}else{
//			echo 'Las contraseñas son incorrectas';
//		}

?>
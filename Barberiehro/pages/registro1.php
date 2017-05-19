<?php

	$name=$_POST['name'];
	$apellido=$_POST['apellido'];
	$phone= $_POST['tel'];
	$email= $_POST['correo'];

	$usuario=$_POST['user'];
	$pass= $_POST['pass'];
	
	$rpass=$_POST['rpass'];
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

				$query ="SELECT MAX(id_cliente)+ 1 as id_cliente FROM cliente";
				$id=mysqli_query($mysqli,$query);
				$nid =0;
				while ($objet = mysqli_fetch_object($id)) {
					$nid = $objet->id_cliente;
				}

			
//				$query1 ="SELECT MAX(id_)+ 1 as id_login FROM login";
//				$id1=mysqli_query($mysqli,$query1);
//				$nid1 =0;
//				while ($objet1 = mysqli_fetch_object($id1)) {
//					$nid1 = $objet1->id_login;
//				}

				mysqli_query($mysqli,"INSERT INTO cliente VALUES('$nid','$name','$apellido', '$phone','$email','$nid')");

				mysqli_query($mysqli,"INSERT INTO login VALUES('$nid','$usuario','$pass','2')");

				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';

				header('Location: ../index.html');

						
	//	}else{
	//		echo 'Las contraseñas son incorrectas';
	//	}
?>
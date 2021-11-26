<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];

	require("conexion.php");
	$ola = $_GET['name'];
	$checkemail=mysqli_query($mysqli,"insert into trip(6, '$ola', 'n1', '12:30' )VALUES(id_user, n_asiento, peli)'");	
	$check_mail=mysqli_num_rows($checkemail);
	if($pass){
		if($check_mail>0){
			echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
		}else{
			
			mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$mail','','2')");

			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
			
		}
		
	}else{
		echo 'Ya no hay voletos para esta pelicula';
	}
?>



<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php"> 
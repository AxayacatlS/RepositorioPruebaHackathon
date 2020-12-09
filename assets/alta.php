<?php

	$nombre=$_POST['nombreres'];
	$mail=$_POST['correores'];
	$pass= $_POST['passwordres'];
	$rpass=$_POST['passwordres'];
	$ap=$_POST['apellidopres'];
	$am=$_POST['apellidomres'];
    $colonia=$_POST['direccionres'];
	
	$message_adduser='';
	require("conexion.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($conn,"SELECT * FROM usuario WHERE correo='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			
			if($check_mail>0){
                echo 'Correo ya existente';
				header("Location: ../");	
			}else{
                $sqli="INSERT INTO usuario (correo, nombre, app, apm, direccion, contrasenia) VALUES ('$mail','$nombre','$ap','$am','$colonia','$pass')";
                if(mysqli_query($conn,$sqli))
                {
                    echo 'Agregado correctamente ya puede ingresar';
					header("Location: ../login.php");
                }
                else{
					header("Location: ../");
                }
			}
			
		}else{
            echo 'Las contraseñas no coinciden';
			header("Location: ../");
		}

	
?>
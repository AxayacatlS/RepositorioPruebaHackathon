<?php
	session_start();
	require 'conexion.php';
	$usuario=$_POST["loginpas"];
	$pass=$_POST["passwordpas"];
	$sql=mysqli_query($conn,"SELECT * FROM usuario WHERE correo='$usuario'");
	if($f=mysqli_fetch_assoc($sql))
	{
		if($pass==$f['contrasenia'])
		{
			$_SESSION['id']=$f['id_usuario'];
			$_SESSION['user']=$f['correo'];
			header("Location: ../inicio.php");
		}
		else
		{

			echo "<script>location.href='../index.php'</script>";
		}
	}
	else
	{
		echo "<script>location.href='../index.php'</script>";	
	}

?>
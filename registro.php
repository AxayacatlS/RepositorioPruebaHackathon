<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro Conecta tu aprendizaje</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all">
</head>
<body>

<!--HEADER-->
<header>

<!--FIN HEADER-->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="inactive underlineHover"> Ingresar </h2></a>
    <h2 class="active">Registrarse </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
    </div>

    <!-- Login Form -->
    <form action="assets/alta.php" method="POST">
      <h2 > Correo electronico: </h2>
      <input type="text" id="correores" class="fadeIn second" name="correores" placeholder="Ingresar correo electronico">
      <h2 > Nombre: </h2>
      <input type="text" id="nombreres" class="fadeIn second" name="nombreres" placeholder="Ingresar nombre">
      <h2 > Apellido Paterno: </h2>
      <input type="text" id="apellidopres" class="fadeIn second" name="apellidopres" placeholder="Ingresar Apellido Paterno">
      <h2 > Apellido Materno: </h2>
      <input type="text" id="apellidomres" class="fadeIn second" name="apellidomres" placeholder="Ingresar Apellido Materno">
      <h2 > Direccion: </h2>
      <input type="text" id="direccionres" class="fadeIn second" name="direccionres" placeholder="Ingresar Direccion">
      <h2 > Contraseña </h2>
      <input type="text" id="passwordres" class="fadeIn third" name="passwordres" placeholder="Ingresar contraseña">
      <input type="submit" class="fadeIn fourth" value="Registrarse">
    </form>

    <!-- Remind Passowrd -->
    
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Regresar al inicio</a>
    </div>
    
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ingresar a Conecta tu aprendizaje</title>
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
    <h2 class="active"> Ingresar </h2>
    <a href="registro.php"><h2 class="inactive underlineHover" >Registrarse </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
    </div>

    <!-- Login Form -->
    <form action="assets/logueo.php" method="POST">
      <h2 > Correo electronico: </h2>
      <input type="text" id="loginpas" class="fadeIn second" name="loginpas" placeholder="Ingresar correo electronico">
      <h2 > Contraseña </h2>
      <input type="text" id="passwordpas" class="fadeIn third" name="passwordpas" placeholder="Ingresar contraseña">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

    <!-- Remind Passowrd -->
    
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Regresar al inicio</a>
    </div>
    
  </div>
</div>
</body>
</html>
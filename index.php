<!DOCTYPE html>
<html lang="en">
<head>
<title>Prueba</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.bg, .box2{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <nav>
          <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="programssn.php">Cursos</a></li>
            <li><a href="" data-toggle="modal" data-target="#modalLoginForm">Ingresar</a></li>
            <!--<li><a href="teachers.html">Teachers</a></li>
            <li><a href="admissions.html">Admissions</a></li>
            <li class="end"><a href="contacts.html">Contacts</a></li>-->
          </ul>
        </nav>
        <ul id="icon">
          <!--NAVEGACION DE REDES SOCIALES-->
          <!--<li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
          <li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>-->
        </ul>
      </div>
      <div class="wrapper">
        <h1><a href="index.php" ><img src="images/logo2.png"></a></h1>
      </div>
      <div id="slogan"> La educacion<span>debe estar al alcance de todos</span> </div>
      <ul class="banners">
          <!--
        <li><a href="#"><img src="images/banner1.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/banner2.jpg" alt=""></a></li>
        <li><a href="#"><img src="images/banner3.jpg" alt=""></a></li>
        -->
      </ul>
    </header>
    <!-- / header -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
        <!--radio-->
      <div class="wrapper" id="mi-radio">
        <div class="pad1 pad_top1">
        <h2>Sintonice la estacion de radio</h2>
            <!--

        -->
        </div>
      </div>
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Bienvenido</h2>
              <p class="font2">Los cursos</p>
              <p><strong>de esta plataforma son totalmente gratuitos y siempre a la disposicion, si usted no puede ingresar a la plataforma busquenos en la radio.</p>

            </div>
            <a href="programssn.php" class="button"><span><span>Desea saber mas</span></span></a>
            <div class="pad_left1">
              <h2>Le interesa llevar un control de sus cursos</h2>
            </div>
            <div class="wrapper">
              <!--<figure class="left marg_right1"><img src="images/page1_img4.jpg" alt=""></figure>-->
              <p class="pad_bot1 pad_top2"><strong>Puede registrase en nuestro plataforma para llevar mejor control de lo que esta estudiando.</strong></p>

            </div>
            <div class="pad_top2"> <a href="" class="button" data-toggle="modal" data-target="#modalLoginForm"><span><span>Registrese</span></span></a> </div>
          </article>
          <article class="col2 pad_left2">
            <div class="pad_left1">
              <h2>Cursos</h2>
            </div>
            <ul class="list1">
              <li><a href="#">Lectura</a></li>
              <li><a href="#">Historia</a></li>
              <li><a href="#">Matematicas</a></li>
              <li><a href="#">Ciencias</a></li>
              <li><a href="#">Etica</a></li>
              <li><a href="#">Computacion</a></li>
            </ul>
            <!--
            <div class="pad_left1">
              <h2>Latest News</h2>
            </div>
            <div class="wrapper"> <span class="date">27</span>
              <p class="pad_top2"><a href="#">April, 2011</a><br>
                Sed utirspiciatis unde omnis iste natus error sit...</p>
            </div>
            <div class="wrapper"> <span class="date">25</span>
              <p class="pad_top2"><a href="#">April, 2011</a><br>
                Voluptatem accusan dolore mque laudantium...</p>
            </div>
            <div class="pad_top2"> <a href="#" class="button"><span><span>Read More</span></span></a> </div>
            -->
          </article>
        </div>
      </div>
    </section>
    <!-- content -->
    <!-- footer -->
    <footer>
      <div class="wrapper">
        <div class="pad1">
          <div class="pad_left1">
              
            <div class="wrapper">
              <article class="col_1">
                <h3>Nos interesa su opinion</h3>
                <a href="#" class="button"><span><span><strong>Subscribe</strong></span></span></a>
              </article>
            </div>

            <div class="wrapper">
              <article class="call"> <span class="call1">Contactenos: </span><span class="call2">555-55-555-55</span> </article>

            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->
  </div>
</div>

<!--LOGIN MODAL-->

<!--
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ingrese sus datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	  </div>
	  <form action="assets/loginuser.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
		  <label data-error="wrong" data-success="right" for="defaultForm-email">Correo electronico:</label>
          <input type="email" id="email-modallogin" name="email-modallogin" class="form-control validate" required>
        </div>
        <div class="md-form mb-4">
		  <label data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña:</label>
          <input type="password" id="password-modallogin" name="password-modallogin" class="form-control validate" required>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
		<button class="btn btn-primary btn-outline with-arrow btn-sm" id="boton-modallogin" >Ingresar</button>
		<label>¿No tiene una cuenta?, Cree una <a data-toggle="modal" data-target="#modalRegisterForm">aqui</a></label>
	  </div>
	</form>
    </div>
  </div>
</div>
-->
<script type="text/javascript">Cufon.now();</script>
</body>
</html>
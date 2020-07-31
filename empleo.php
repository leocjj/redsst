<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PAGINAS CRITICAS -->
		<?php include 'head.php'; ?>
	</head>
	
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header   -->
				<?php include 'header.php'; ?>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-12 col-12-medium">
								<h3>Ofertas de empleo para profesionales en SST.</h3>
								Busca un empleo en SST, ingresa o actualiza ofertas de empleo para encontrar al profesional que necesitas y se parte de Red SST.
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="empleo_buscar.php" class="image featured"><img src="images/empleo_buscar.jpg" alt="Buscar Empleo" /></a>
										<div class="inner">
											<header>
												<h2><a href="empleo_buscar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Buscar<br/>Ofertas de Empleo</a></h2>
												<a href="empleo_buscar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Banco de ofertas de empleo</a>
											</header>
											<a href="empleo_buscar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Encuentra el empleo en SST que estabas buscando.
											</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="empleo_ingresar.php" class="image featured"><img src="images/empleo_ingresar.jpg" alt="Ingresar Empleo" /></a>
										<div class="inner">
											<header>
												<h2><a href="empleo_ingresar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Ingresar<br/>Ofertas de Empleo</a></h2>
												<a href="empleo_ingresar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Banco de ofertas de empleo</a>
											</header>
											<a href="empleo_ingresar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Ingresa tu oferta de empleo <b>en solo 3 pasos</b> y se parte de Red SST.
											</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="empleo_actualizar.php" class="image featured"><img src="images/empleo_actualizar.jpg" alt="Actualizar Empleo" /></a>
										<div class="inner">
											<header>
												<h2><a href="empleo_actualizar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Actualizar<br/>Ofertas de Empleo</a></h2>
												<a href="empleo_actualizar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Banco de ofertas de empleo</a>
											</header>
											<a href="empleo_actualizar.php" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Actualiza tu oferta de empleo, de forma r&aacute;pida y sencilla.
											</a>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
					
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h2>Temas de inter&eacute;s</h2>
												<?php include 'temas_interes.php'; ?>
										</section>
									</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>Acerca de Red SST</h2>
											<?php include 'temas_acercade.php'; ?>
										</section>
									</div>

							</div>
						</div>
						<br/><br/><br/>

						<div class="row gtr-200">
							<?php include 'formulario_contacto.php'; ?>
						</div>
						
					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts FUNCIONAN BIEN SI VAN AL FINAL ANTES DE /BODY -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACION DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINAMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
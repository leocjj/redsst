<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head X-Frame-Options: SAMEORIGIN>  <!-- SOLO EN LAS PÃGINAS CRÃTICAS -->
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
							<div class="col-7 col-12-medium">
								<h3>&iexcl;Ingresa a Red SST!<br></h3>
								<p>Profesionales, empleos, eventos, productos y servicios en SST</p>
							</div>
							<div class="col-5 col-12-medium">
							
									<form method="post" id="formulario_suscribirse" action="" class='contacto'  autocomplete="off">
								            <div >
													<input type='email' name='correo_suscribirse' maxlength="55" placeholder=" Correo electr&oacute;nico" class="email"/>
								            </div>
								            <div >	
								            		<br/><input type='submit' value='Inscribirme' class="special" />
								            </div>			
								            <div Style="color:red;" id="respuesta_suscribirse">  </div>		<!-- debe ser con ID, no funciona con name  -->
								            
								            <!--<br/><br/>
								            <div Style="color:green;"> <h2>Nuevo !! </h2></div>
								            <h3><a href="eventos.php">Ingresa un evento SST</a>&nbsp;&nbsp;&nbsp; o&nbsp;&nbsp;&nbsp;
								            <a href="agenda.php">Busca un evento SST</a></h3>-->
									</form>							
							
								<!-- CÃƒâ€œDIGO ORIGINAL DEL FORMATO  <ul>
									<li><a href="#" class="button large icon fa-arrow-circle-right">
									Inscr&iacute;bete ya!</a></li>
									<li><a href="#" class="button alt large icon fa-question-circle">
									Informaci&oacute;n</a></li>
								</ul>-->
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
										<a href="hdv.php" class="image featured"><img src="images/profesionales.jpg" alt="Profesionales" /></a>
										<div class="inner">
											<header>
												<h2><a href="hdv.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Profesionales</a></h2>
												<a href="hdv.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Banco de hojas de vida</a>
											</header>
											<a href="hdv.php" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Ingresa, actualiza y busca hojas de vida de profesionales en SST.
											</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="empleo.php" class="image featured"><img src="images/empleo.jpg" alt="Eventos" /></a>
										<div class="inner">
											<header>
												<h2><a href="empleo.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Empleo</a></h2>
												<a href="empleo.php" class="image featured" style="text-decoration:none;color:black;text-align:center">Banco de empleo especializado</a>
											</header>
											<a href="empleo.php" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Busca empleo en SST, ingresa o actualiza una oferta de empleo.
											</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="" class="image featured"><img src="images/productos.jpg" alt="Productos y servicios" /></a>
										<div class="inner">
											<header>
												<h2><a href="" class="image featured" style="text-decoration:none;color:black;text-align:center">Productos y Servicios</a></h2>
												<a href="" class="image featured" style="text-decoration:none;color:black;text-align:center">(En desarrollo)</a>
											</header>
											<a href="" class="image featured" style="text-decoration:none;color:black;text-align:center">
												Directorio de empresas que ofrecen productos y servicios en SST.
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
							<div class="col-4 col-12-medium imp-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="last">
											<h2>Tablero de Red SST</h2>
											<div style="  text-align:justify ">
												El gran tablero de SST est&aacute; abierto, si quieres tener un lugar en el, cont&aacute;ctanos ahora mismo!!!<br/><br/>
												Nuestro tablero tiene 2.300 ubicaciones en alquiler de 30x30 pixeles cada una (imagen de 1920x1080 pixeles)
												y estar&aacute; siempre en nuestra p&aacute;gina principal.<br/><br/>
												Has visible tu p&aacute;gina web adquiriendo hasta 8 ubicaciones en las cuales un link llevar&aacute; directamente al visitante a tu p&aacute;gina.<br/>
											</div>		
										</section>
									</div>
							</div>
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<div id="content">
										<section class="widget thumbnails">											
											<div style="  text-align:justify ">
													Da clic en la imagen para abrir el tablero.
													<div class="col-6"><a href="plaza2.php" class="image fit" target="_blank"><img src="images/plazaRedSST3.png" style="border:1px blue dashed"  alt="Plaza Red SST" /></a></div>
											</div>
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
		<script src="assets/js/funciones.js"></script>		<!-- FUNCIONES PARA VERIFICACIÃ“N DE FORMULARIOS Y CORREOS -->
		<script type="text/javascript" 	src="assets/js/dinamica.js"></script>		<!-- ARCHIVO PROPIO, DIRIGE CONEXIONES AJAX PARA EJECUTAR ARCHIVOS PHP DINÃMICAMENTE. -->
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
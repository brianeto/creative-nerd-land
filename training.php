<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Training | Creative Nerd</title>
	<meta name="description" content="" />

	<!-- Schema.org markup for Google+ --> 
	<meta itemprop="name" content="Creative Nerd">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary">
	<!-- <meta name="twitter:site" content="@usuario"> -->
	<meta name="twitter:title" content="Creative Nerd">
	<meta name="twitter:description" content="">
	<!-- <meta name="twitter:creator" content="@usuario"> -->
	<meta name="twitter:image" content="">

	<!-- Open Graph data -->
	<meta property="og:title" content="Creative Nerd" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Creative Nerd" />
	<meta name="author" content="Geniorama">

<?php 
	$path  = ""; 
	$pathM = "scroll_to";
	$idPagina = "training";
	include('head.php');
?>
<div id="home"></div>
<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
	<img class="d-block w-100" src="<?php echo $path; ?>image/bg-training.jpeg">
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner training">
			Training
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

<section id="seccion_servicios" class="seccion_padding">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center training">
			SERVICIOS DE <span>CAPACITACIÓN</span>
		</h2>

		<!--CONTENEDORES SERVICIOS-->
		<div class="row contenedor_detalles_servicios">
			<div class="col-12 digital item-services able" id="digital">
				<div class="row align-items-center">
					<div class="col-12  col-lg-6">
						<img class="img_detalle_servicios digital" src="<?php echo $path; ?>image/teacher.jpg">
					</div>
					<div class="col-12 col-lg-6">
						<p class="tag_descripcion_detalle_servicio training">
							El conocimiento adquirido en cada una de nuestras áreas de interes ayuda a que muchas personas
							se interesen y es por ello que creamos una unidad en la cual podamos ofrecer capacitaciones de
							cada uno de los servicios que ofrecemos.
						</p>
						<a href="contact.php" class="hover_training">
							<div class="col-12 col-lg-6 right training">
								<div class="barra-izq training">

								</div>
								<h3 class="tag_titulo_detalle_servicio training">
									CAPACÍTATE CON <br> NOSOTROS
								</h3>
								<div class="container-icon-place training-icon">
									<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
								</div>
							</div>
						</a>
					</div>
				</div>	
			</div>
			

			<div class="col-12 training item-services" id="training">
				<div class="row align-items-center">
					<div class="col-12  col-lg-6">
						<img class="img_detalle_servicios digital" src="<?php echo $path; ?>image/mockup-training.png">
					</div>

					<div class="col-12 col-lg-6">
						<h3 class="tag_titulo_detalle_servicio">
							Creative Nerd <span class="training">Training</span>
						</h3>
						<p class="tag_descripcion_detalle_servicio">
							El conocimiento adquirido en cada una de nuestras áreas de interés ayuda a que muchas personas se interesen y es por ello que creamos una unidad en la cual podamos ofrecer capacitaciones de cada uno de los servicios que ofrecemos.
						</p>
						<!-- ITEMS DETALLE DE SERVICIO
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
						-->
						<div class="div_botones_detalle_servicio">
							<a class="btn tag_enlace_servicios" href="" role="button">Ver más</a>
							<a class="btn tag_enlace_servicios_2" href="" role="button">Cotizar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
	include('footer.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Digital Agency | Creative Nerd</title>
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
	$idPagina = "digital"; 
	include('head.php');
?>
	
	<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
		<img class="d-block w-100" src="<?php echo $path; ?>image/bg-digital.png">
			<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner">
				Digital <span>Agency</span>
			</h1>
		</img>
		<div class="div_diagonal div_diagonal_white"></div>
	</section>
	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				DISEÑO <span>WEB</span>
			</h2>
			<div class="row div_contenedor_detalles_servicios">

				<div class="row align-items-center digital">
					<div class="col-md-8 digital">
						<div class="carrusel first">
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-12 col-lg-6 right">
					<div class="barra-izq">

					</div>
					<h3 class="tag_titulo_detalle_servicio digital">
						COTIZA TU <br> PROYECTO
					</h3>
					<div container-icon-plance>
						<i class="fab fa-telegram-plane fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut opacity bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#exampleModal">
						<img class="img-fluid" src="image/launch.svg" alt="">
						<h5 class="grid-icon text">Páginas web</h5>
					</div>
					<div class="grid-icon col-2 btn">
						<img class="img-fluid" src="image/pagelanding.svg" alt="">
						<h5 class="grid-icon text">Landing Pages</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/smartphone-comercio.svg" alt="">
						<h5 class="grid-icon text big">Comercio<br>Electrónico</h5> 
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/support-administracion.svg" alt="">
						<h5 class="grid-icon text big">Soporte y administración<br>de sitios web</h5>
					</div>
				</div>
			</div>
	</section>
	<!-- Modal Paginas web -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Paginas Web</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio earum,
						aliquam exercitationem eaque saepe unde dolores reiciendis dolorem ullam aspernatur fugiat cumque,
						quas dolore impedit? Ad dolore veritatis sit tenetur.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Landing Pages -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Landing Pages</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio earum,
						aliquam exercitationem eaque saepe unde dolores reiciendis dolorem ullam aspernatur fugiat cumque,
						quas dolore impedit? Ad dolore veritatis sit tenetur.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				DESARROLLO DE <span>APPS</span>
			</h2>
			<div class="row div_contenedor_detalles_servicios">
				<div class="row align-items-center digital">
					<div class="col-md-8 digital">
						<div class="carrusel second">
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 right">
					<div class="barra-izq">

					</div>
					<h3 class="tag_titulo_detalle_servicio digital">
						COTIZA TU <br> PROYECTO
					</h3>
					<i class="fab fa-telegram-plane fa-3x"></i>
				</div>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/app-development.svg" alt="">
						<h5 class="grid-icon text">Desarrollo App Móvil</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/smartphone-diseño.svg" alt="">
						<h5 class="grid-icon text">Diseño de Apps</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/app-play.svg" alt="">
						<h5 class="grid-icon text">Implementación en<br>Tiendas Oficiales</h5>
					</div>
				</div>
			</div>
	</section>
	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				DISEÑO <span>GRÁFICO</span>
			</h2>
			<div class="row contenedor_slider">
				<div class="row align-items-center digital">
					<div class="col-md-8 digital">
						<div class="carrusel third">
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 right">
					<div class="barra-izq">

					</div>
					<h3 class="tag_titulo_detalle_servicio digital">
						COTIZA TU <br> <span class="digital">PROYECTO</span>
					</h3>
					<i class="fab fa-telegram-plane fa-3x"></i>
				</div>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/branding.png" alt="">
						<h5 class="grid-icon text">Branding</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/banner.png" alt="">
						<h5 class="grid-icon text">Piezas Publicitarias</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/campaign.png" alt="">
						<h5 class="grid-icon text">Diseño de Campañas</h5>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/app-development.svg" alt="">
						<h5 class="grid-icon text">Suministros de Publicidad</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/printer.png" alt="">
						<h5 class="grid-icon text">Medios Impresos</h5>
					</div>
				</div>	
			</div>
	</section>
	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				MARKETING <span>DIGITAL</span>
			</h2>
			<div class="row contenedor_slider">
				<div class="row align-items-center digital">
					<div class="col-md-8 digital">
						<div class="carrusel fourth">
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 right">
					<div class="barra-izq">

					</div>
					<h3 class="tag_titulo_detalle_servicio digital">
						COTIZA TU <br> <span class="digital">PROYECTO</span>
					</h3>
					<i class="fab fa-telegram-plane fa-3x"></i>
				</div>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/pie-chart.svg" alt="">
						<h5 class="grid-icon text">Marketing Digital</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/facebook.svg" alt="">
						<h5 class="grid-icon text">Social Media</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/mail.svg" alt="">
						<h5 class="grid-icon text">Mail Marketing</h5>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/adwords.svg" alt="">
						<h5 class="grid-icon text">Publicidad en<br>Google Adwords</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/search.svg" alt="">
						<h5 class="grid-icon text">Posicionamiento en<br>Buscadores</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/startup.svg" alt="">
						<h5 class="grid-icon text">Administración de Campañas<br>Digitales (Ads)</h5>
					</div>
				</div>	
			</div>
	</section>
	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				DISEÑO <span>INDUSTRIAL</span>
			</h2>
			<div class="row contenedor_slider">
				<div class="row align-items-center digital">
					<div class="col-md-8 digital">
						<div class="carrusel fifth">
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mux1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 right">
					<div class="barra-izq">

					</div>
					<h3 class="tag_titulo_detalle_servicio digital">
						COTIZA TU <br> <span class="digital">PROYECTO</span>
					</h3>
					<i class="fab fa-telegram-plane fa-3x"></i>
				</div>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/flour.svg" alt="">
						<h5 class="grid-icon text">Desarrollo de Productos</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid" src="image/donation.svg" alt="">
						<h5 class="grid-icon text">Diseñado de empaques</h5>
					</div>
					<div class="grid-icon col-2">
						<img class="img-fluid"src="image/lamp.svg" alt="">
						<h5 class="grid-icon text">Ambientación</h5>
					</div>
				</div>
			</div>
	</section>
	<section id="seccion_contacto" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				CONTÁCTANOS
			</h2>
			<p class="tag_subtitulo_secciones tag_titulo_secciones_black text-center">
				¿Estás listo para iniciar tu proyecto?<br>
				<span>Cuéntanos de él</span>
			</p>
			<div class="row">
				<div class="col-12 col-lg-6 align-self-center">
					<form class="text-center" id="form_contacto" method="post" action="javascript:enviarContacto();">
						<div class="form-row">
							<div class="col-12 col-lg-6 text-left">
								<label for="txt_nombre" class="tag_indicador_form">Nombre</label>
								<input type="text" class="form-control form-control-mine" id="txt_nombre">
							</div>
							<div class="col-12 col-lg-6 text-left">
								<label for="txt_email" class="tag_indicador_form">Email</label>
								<input type="email" class="form-control form-control-mine" id="txt_email">
							</div>
						</div>
						<div class="form-row">
							<div class="col-12 text-left">
								<label for="txt_mensaje" class="tag_indicador_form">Mensaje</label>
								<textarea class="form-control form-control-mine" id="txt_mensaje"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-form-mine" id="btn_enviar">ENVIAR</button>
					</form>
				</div>
				<div class="col-12 col-lg-6 align-self-end">
					<img class="img_persona_contacto" src="<?php echo $path; ?>image/contact.png">
				</div>			
			</div>		
		</div>		
	</section>
<?php 
	include('footer.php');
?>
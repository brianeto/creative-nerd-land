<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Printing | Creative Nerd</title>
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
	$idPagina = "printing";
	include('head.php');
?>

<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
	<img class="d-block w-100" src="<?php echo $path; ?>image/bg-printing.jpeg">
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner printing">
			Printing
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

<section id="seccion_servicios" class="seccion_padding">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center printing">
			SERVICIOS DE <span>IMPRESIÓN</span>
		</h2>

		<!--CONTENEDORES SERVICIOS-->
		<div class="row contenedor_detalles_servicios promocional">
			<div class="col-12 digital item-services able" id="digital">
				<div class="row align-items-center">
					<div class="col-12  col-lg-6">
						<img class="img_detalle_servicios promocional" src="<?php echo $path; ?>image/mockup-digital-agency.png">
					</div>
					<div class="col-12 col-lg-6">
						<p class="tag_descripcion_detalle_servicio">
							Mediante Alianzas Estratégicas tercerizamos el proceso de Impresión el cual incluye todo lo
							referente a material publicitario.
						</p>
						<div class="col-12 col-lg-6 right training">
							<div class="barra-izq printing">

							</div>
							<h3 class="tag_titulo_detalle_servicio digital">
								COTIZA TUS <br> IMPRESOS
							</h3>
							<i class="fab fa-telegram-plane fa-3x printing"></i>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-green">
		<div id="div_contenedor_iconos">
			<div class="row justify-content-center text-center">
				<div class="grid-icon col-2">
					<img class="img-fluid" src="image/printing-01.png" alt="">
					<h5 class="grid-icon text">Páginas web</h5>
				</div>
				<div class="grid-icon col-2">
					<img class="img-fluid" src="image/printing-01.png" alt="">
					<h5 class="grid-icon text">Landing Pages</h5>
				</div>
				<div class="grid-icon col-2">
					<img class="img-fluid" src="image/printing-01.png" alt="">
					<h5 class="grid-icon text big">Comercio<br>Electrónico</h5> 
				</div>
				<div class="grid-icon col-2">
					<img class="img-fluid" src="image/printing-01.png" alt="">
					<h5 class="grid-icon text big">Comercio<br>Electrónico</h5> 
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
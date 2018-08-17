<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Promocional | Creative Nerd</title>
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
	$idPagina = "promocional";
	include('head.php');
?>
<div id="home"></div>
<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
	<img class="d-block w-100" src="<?php echo $path; ?>image/bg-promocional.jpeg">
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner promocional">
			Promocional
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

<section id="seccion_servicios" class="seccion_padding promocional">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center promocional">
			MATERIAL <span>PROMOCIONAL</span>
		</h2>

		<!--CONTENEDORES SERVICIOS-->
		<div class="row contenedor_detalles_servicios promocional">
			<div class="col-12 digital item-services able" id="digital">
				<div class="row align-items-center">
					<div class="col-12  col-lg-6">
						<img class="img_detalle_servicios promocional" src="<?php echo $path; ?>image/promocional.png">
					</div>
					<div class="col-12 col-lg-6 promocional">
						<p class="tag_descripcion_detalle_servicio promocional">
							Material promocional para las empresas que desean promocionar sus productos o servicios a través
							del uso de elementos publicitarios que lleven la marca de su compañia entregándolo a clientes 
							internos y clientes externos en eventos, ferias, etc...
						</p>
						<a href="#seccion_contacto">
							<div class="col-12 col-lg-6 right promocional">
								<div class="barra-izq promocional">

								</div>
								<h3 class="tag_titulo_detalle_servicio promocional">
									COTIZA TUS <br> PROMOCIONALES
								</h3>
								<div class="container-icon-place promocional-icon">
									<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
								</div>
							</div>
						</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-blue">
		<div id="div_contenedor_iconos">
			<div class="row justify-content-center text-center">
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#materialesAltaCalidadModal">
					<img class="img-fluid" src="image/quality.png" alt="">
					<h5 class="grid-icon -icon text">Materiales de<br>Alta Calidad</h5>
				</div>
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#preciosCompetitivosModal">
					<img class="img-fluid" src="image/price-tag.png" alt="">
					<h5 class="grid-icon -icon text">Precios Competitivos</h5>
				</div>
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#respuestaInmediataModal">
					<img class="img-fluid" src="image/running-man.png" alt="">
					<h5 class="grid-icon -icon text">Respuesta Inmediata</h5> 
				</div>
			</div>
		</div>
</section>
<!-- Modal Materiales de Alta Calidad -->
<div class="modal fade" id="materialesAltaCalidadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Materiales de Alta Calidad</h5>
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
<!-- Modal Precios Competitivos -->
<div class="modal fade" id="preciosCompetitivosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Precios Competitivos</h5>
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
<!-- Modal Respuesta Inmediata -->
<div class="modal fade" id="respuestaInmediataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Respuesta Inmediata</h5>
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
			<div class="col-12 col-lg-6 align-self-end man">
				<img class="img_persona_contacto" src="<?php echo $path; ?>image/contact.png">
			</div>			
		</div>		
	</div>		
</section>
<?php 
	include('footer.php');
?>
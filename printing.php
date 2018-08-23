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
<div id="home"></div>
<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
	<img class="d-block w-100" src="<?php echo $path; ?>image/bg-printing.jpeg">
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner printing">
			Printing
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

<section id="seccion_servicios" class="seccion_padding printing">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center printing">
			SERVICIOS DE <span>IMPRESIÓN</span>
		</h2>

		<!--CONTENEDORES SERVICIOS-->
		<div class="row contenedor_detalles_servicios printing">
			<div class="col-12 digital item-services able" id="digital">
				<div class="row align-items-center">
					<div class="col-12  col-lg-6">
						<img class="img_detalle_servicios printing" src="<?php echo $path; ?>image/mockup-card.png">
					</div>
					<div class="col-12 col-lg-6">
						<p class="tag_descripcion_detalle_servicio printing">
							Mediante Alianzas Estratégicas tercerizamos el proceso de Impresión el cual incluye todo lo
							referente a material publicitario.
						</p>
						<a href="#seccion_contacto">
							<div class="col-12 col-lg-6 right printing">
								<div class="barra-izq printing">

								</div>
								<h3 class="tag_titulo_detalle_servicio digital printing">
									COTIZA TUS <br> IMPRESOS
								</h3>
								<div class="container-icon-place printing-icon">
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
<section id="seccion_diseño_web_iconos" class="seccion_padding bg-imagen opacity opacity-green">
		<div id="div_contenedor_iconos">
			<div class="row justify-content-center text-center">
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#tarjetasPresentacionModal">
					<img class="img-fluid" src="image/id-card.png" alt="">
					<h5 class="grid-icon -icon text">Tarjetas de<br>Presentación</h5>
				</div>
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#impresionDigitalModal">
					<img class="img-fluid" src="image/printer.png" alt="">
					<h5 class="grid-icon -icon text">Impresión Digital</h5>
				</div>
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#publicidadImpresaModal">
					<img class="img-fluid" src="image/menu.png" alt="">
					<h5 class="grid-icon -icon text">Publicidad Impresa</h5> 
				</div>
				<div class="grid-icon -icon col-2 btn" data-toggle="modal" data-target="#bolsasEmpaquesModal">
					<img class="img-fluid" src="image/shopping-bag.png" alt="">
					<h5 class="grid-icon -icon text">Bolsas y Empaques</h5> 
				</div>
			</div>
		</div>
</section>
<!-- Modal Tarjetas de Presentación -->
<div class="modal fade" id="tarjetasPresentacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tarjetas de Presentación</h5>
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
<!-- Modal Impresión Digital -->
<div class="modal fade" id="impresionDigitalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Impresión Digital</h5>
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
<!-- Modal Publicidad Impresa -->
<div class="modal fade" id="publicidadImpresaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Publicidad Impresa</h5>
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
<!-- Modal Bolsas y Empaques -->
<div class="modal fade" id="bolsasEmpaquesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bolsas y Empaques</h5>
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
<?php 
	include('footer.php');
?>
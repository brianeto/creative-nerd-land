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
	<div id="home"></div>
	<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut opacity">
		<img class="d-block w-100" src="<?php echo $path; ?>image/bg-digital.png">
			<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner digital-agency">
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
								<img src="image/mockup-web3.jpg" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mockup-web.jpg" alt="" class="img-fluid">
							</div>
							<div class="item-carrusel">
								<img src="image/mockup-web2.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut opacity bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#paginasWebModal">
						<img class="img-fluid" src="image/launch.svg" alt="">
						<h5 class="grid-icon text">Páginas web</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#landingPagesModal">
						<img class="img-fluid" src="image/pagelanding.svg" alt="">
						<h5 class="grid-icon text">Landing Pages</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#comercioElectronicoModal">
						<img class="img-fluid" src="image/smartphone-comercio.svg" alt="">
						<h5 class="grid-icon text">Comercio <br> Electrónico</h5> 
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#soporteAdministracionModal">
						<img class="img-fluid" src="image/support-administracion.svg" alt="">
						<h5 class="grid-icon text">Soporte <br>y administración de <br>sitios web</h5>
					</div>
				</div>
			</div>
	</section>
	<!-- Modal Paginas web -->
	<div class="modal fade" id="paginasWebModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Paginas Web</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Atrévete a diseñar una página web llena de creatividad, innovación, fácil acceso y con un diseño que tus
					clientes amarán. Una página web no solo es la vitrina para mostrar tus productos y servicios al mundo; es
					el primer paso para la generación de ventas en tu negocio o empresa.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Landing Pages -->
	<div class="modal fade" id="landingPagesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Landing Pages</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Por medio del diseño de una Página de Aterrizaje podrás potencializar los objetivos de tu campaña creativa.
					Diseña y desarrolla una página donde tus clientes podrán insertar sus datos y llevarse la información que
					realmente ellos necesitan. ¡Aumenta el número de Leads de tu negocio! 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Comercio Electronico -->
	<div class="modal fade" id="comercioElectronicoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Comercio Electronico</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					¿Tienes productos y deseas venderlos a través de internet? Crea tu Página Web E-Commerce (Comercio Electrónico).
					Somos especialistas en el diseño y desarrollo de páginas que permitirán que tengas los resultados que siempre has
					deseado, haciendo crecer tu negocio y brindándole a tus clientes una vitrina digital creativa, llena de herramientas
					que pontencializara el número de conversiones que al final se traducen en ventas para tu negocio.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Soporte y Administración -->
	<div class="modal fade" id="soporteAdministracionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Soporte y Administración de sitios web</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					¿Tienes un problema con tu sitio web? ¿El ingeniero que te apoyaba ahora no quiere responder por su desarrollo? No te preocupes,
					te ayudamos a recuperar la información, realizar los cambios que necesites o aplicar nuevas tecnologías a tu página web. 
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
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#desarrolloAppModal">
						<img class="img-fluid" src="image/app-development.svg" alt="">
						<h5 class="grid-icon text">Desarrollo App Móvil</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#diseñoAppsModal">
						<img class="img-fluid" src="image/smartphone-diseño.svg" alt="">
						<h5 class="grid-icon text">Diseño de Apps</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#tiendasOficialesModal">
						<img class="img-fluid" src="image/app-play.svg" alt="">
						<h5 class="grid-icon text">Implementación en<br>Tiendas Oficiales</h5>
					</div>
				</div>
			</div>
	</section>
	<!-- Modal Desarrollo App Movil -->
	<div class="modal fade" id="desarrolloAppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Desarrollo App Móvil</h5>
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
	<!-- Modal Diseño de Apps -->
	<div class="modal fade" id="diseñoAppsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Diseño de Apps</h5>
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
	<!-- Modal Implementación en Tiendas Oficiales -->
	<div class="modal fade" id="tiendasOficialesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Implementación de Tiendas Oficiales</h5>
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
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#brandingModal">
						<img class="img-fluid" src="image/branding.png" alt="">
						<h5 class="grid-icon text">Branding</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#piezasPublicitariasModal">
						<img class="img-fluid" src="image/banner.png" alt="">
						<h5 class="grid-icon text">Piezas Publicitarias</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#diseñoCampañasModal">
						<img class="img-fluid" src="image/campaign.png" alt="">
						<h5 class="grid-icon text">Diseño de Campañas</h5>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#suministrosPublicidadModal">
						<img class="img-fluid" src="image/app-development.svg" alt="">
						<h5 class="grid-icon text">Suministros de <br>Publicidad</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#mediosImpresosModal">
						<img class="img-fluid" src="image/printer.png" alt="">
						<h5 class="grid-icon text">Medios Impresos</h5>
					</div>
				</div>	
			</div>
	</section>

	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				DISEÑO <span>MULTIMEDIA</span> Y FOTOGRAFÍA
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
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#brandingModal">
						<img class="img-fluid" src="image/branding.png" alt="">
						<h5 class="grid-icon text">Branding</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#piezasPublicitariasModal">
						<img class="img-fluid" src="image/banner.png" alt="">
						<h5 class="grid-icon text">Piezas Publicitarias</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#diseñoCampañasModal">
						<img class="img-fluid" src="image/campaign.png" alt="">
						<h5 class="grid-icon text">Diseño de Campañas</h5>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#suministrosPublicidadModal">
						<img class="img-fluid" src="image/app-development.svg" alt="">
						<h5 class="grid-icon text">Suministros de <br>Publicidad</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#mediosImpresosModal">
						<img class="img-fluid" src="image/printer.png" alt="">
						<h5 class="grid-icon text">Medios Impresos</h5>
					</div>
				</div>	
			</div>
	</section>
	<!-- Modal Branding -->
	<div class="modal fade" id="brandingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Branding</h5>
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
	<!-- Modal Piezas Publicitarias -->
	<div class="modal fade" id="piezasPublicitariasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Piezas Publicitarias</h5>
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
	<!-- Modal Diseño de Campañas -->
	<div class="modal fade" id="diseñoCampañasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Diseño de Campañas</h5>
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
	<!-- Modal Suministros de Publicidad -->
	<div class="modal fade" id="suministrosPublicidadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Suministros de Publicidad</h5>
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
	<!-- Modal Medios Impresos -->
	<div class="modal fade" id="mediosImpresosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Medios Impresos</h5>
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
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity opacity-red">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#marketingDigitalModal">
						<img class="img-fluid" src="image/pie-chart.svg" alt="">
						<h5 class="grid-icon text">Marketing Digital</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#socialMediaModal">
						<img class="img-fluid" src="image/facebook.svg" alt="">
						<h5 class="grid-icon text">Social Media</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#mailMarketingModal">
						<img class="img-fluid" src="image/mail.svg" alt="">
						<h5 class="grid-icon text">Mail Marketing</h5>
					</div>
				</div>
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#googleAdwordsModal">
						<img class="img-fluid" src="image/adwords.svg" alt="">
						<h5 class="grid-icon text">Publicidad en<br>Google Adwords</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#posicionamientoBuscadoresModal">
						<img class="img-fluid" src="image/search.svg" alt="">
						<h5 class="grid-icon text">Posicionamiento en<br>Buscadores</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#administracionCampañasModal">
						<img class="img-fluid" src="image/startup.svg" alt="">
						<h5 class="grid-icon text">Administración de<br>Campañas Digitales<br>(Ads)</h5>
					</div>
				</div>	
			</div>
	</section>
	<!-- Modal Marketing Digital -->
	<div class="modal fade" id="marketingDigitalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Marketing Digital</h5>
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
	<!-- Modal Social Media -->
	<div class="modal fade" id="socialMediaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Social Media</h5>
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
	<!-- Modal Mail Marketing -->
	<div class="modal fade" id="mailMarketingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Mail Marketing</h5>
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
	<!-- Modal Publicidad en Google Adwords -->
	<div class="modal fade" id="googleAdwordsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Publicidad en Google Adwords</h5>
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
	<!-- Modal Posicionamiento en Buscadores -->
	<div class="modal fade" id="posicionamientoBuscadoresModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Posicionamiento en Buscadores</h5>
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
	<!-- Modal Administración de Campañas Digitales (Ads) -->
	<div class="modal fade" id="administracionCampañasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Administración de Campañas Digitales (Ads)</h5>
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
				<a href="#seccion_contacto" class="digital_href">
					<div class="col-12 col-lg-6 right digital">
						<div class="barra-izq">

						</div>
						<h3 class="tag_titulo_detalle_servicio digital">
							COTIZA TU <br> <span class="digital">PROYECTO</span>
						</h3>
						<div class="container-icon-place digital-icon">
							<img class="paper-plane" src="image/paper-plane-white.svg" alt="">
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section id="seccion_diseño_web_iconos" class="seccion_padding diagonal_cut bg-imagen opacity">
			<div id="div_contenedor_iconos">
				<div class="row justify-content-center text-center">
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#desarrolloProductosModal">
						<img class="img-fluid" src="image/flour.svg" alt="">
						<h5 class="grid-icon text">Desarrollo de<br>Productos</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#diseñadoEmpaquesModal">
						<img class="img-fluid" src="image/donation.svg" alt="">
						<h5 class="grid-icon text">Diseñado de<br>Empaques</h5>
					</div>
					<div class="grid-icon col-2 btn" data-toggle="modal" data-target="#ambientacionModal">
						<img class="img-fluid"src="image/lamp.svg" alt="">
						<h5 class="grid-icon text">Ambientación</h5>
					</div>
				</div>
			</div>
	</section>
	<!-- Modal Desarrollo de Productos -->
	<div class="modal fade" id="desarrolloProductosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Desarrollo de Productos</h5>
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
	<!-- Modal Diseñado de Empaques -->
	<div class="modal fade" id="diseñadoEmpaquesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Diseñado de Empaques</h5>
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
	<!-- Modal Ambientación -->
	<div class="modal fade" id="ambientacionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ambientación</h5>
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
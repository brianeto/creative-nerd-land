<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Creative Nerd</title>
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
	$idPagina = "index";
	include('head.php');
?>
	<div id="home"></div>
	<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut">
		<img class="d-block w-100" src="<?php echo $path; ?>image/index-bg-img.jpeg">
		<div class="div_diagonal div_diagonal_white"></div>
	</section>

	<section id="seccion_servicios" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				NUESTROS <span>SERVICIOS</span>
			</h2>
			<div class="row justify-content-center text-center contenedor_botones">
				<div class="col-12 col-md-3 digital active btn-services" data-category="digital">
					<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
					<h3>Digital Agency</h3>
					<hr class="rayita">
				</div>				
				<div class="col-12 col-md-3 promocional btn-services" data-category="promocional">
					<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
					<h3>Promocional</h3>
					<hr class="rayita">
				</div>
				<div class="col-12 col-md-3 printing btn-services" data-category="printing">
					<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
					<h3>Printing</h3>
					<hr class="rayita">
				</div>
				<div class="col-12 col-md-3 training btn-services" data-category="training">
					<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
					<h3>Training</h3>
					<hr class="rayita">
				</div>
			</div>

			<ul class="nav nav-pills servicios">
				<a class="nav-link col-12 col-md-3 digital active btn-services servicios" data-category="digital">
				<div class="boton">
					<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				</a>
				<a class="nav-link col-12 col-md-3 training btn-services servicios" data-category="training">
					<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
				</a>
				<a class="nav-link col-12 col-md-3 promocional btn-services servicios" data-category="promocional">
				<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
				</a>
				<a class="nav-link col-12 col-md-3 printing btn-services servicios" data-category="printing">
				<div class="boton">
						<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
					</div>
				</a>
			</ul>

			<!--CONTENEDORES SERVICIOS-->
			<div class="row contenedor_detalles_servicios">
				<div class="col-12 digital item-services able" id="digital">
					<div class="row">
						<div class="col-12  col-lg-6">
							<img class="img_detalle_servicios digital" src="<?php echo $path; ?>image/mockup-digital-agency.png">
						</div>
						<div class="col-12 col-lg-6">
							<h3 class="tag_titulo_detalle_servicio">
								Creative Nerd <span class="digital">Digital Agency</span>
							</h3>
							<p class="tag_descripcion_detalle_servicio">
								Somos una empresa que nace con el fin de solucionar las necesidades de los empresarios de promocionar
								sus marcas y de darle un valor agregado a sus empresas que les permita alcanzar sus objetivos corporativos
								mediante el uso de las nuevas tecnologías, las ideas creativas y la innovación.
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#diseño_web_digital">Diseño web</a>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#desarrollo_apps_digital">Desarrollo de apps</a>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#diseño_grafico_digital">Diseño gráfico</a>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#diseño_multimedia_digital">Diseño multimedia y fotografía</a>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#marketing_digital_digital">Marketing digital</a>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><a href="digital-agency.php#diseño_industrial_digital">Diseño industrial</a>
							</p>
							<div class="div_botones_detalle_servicio">
								<a class="btn tag_enlace_servicios" href="digital-agency.php" role="button">Ver más</a>
								<a class="btn tag_enlace_servicios_2" href="contact.php" role="button">Cotizar</a>
							</div>
						</div>
					</div>	
				</div>
				

				<div class="col-12 training item-services" id="training">
					<div class="row">
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
							<div class="div_botones_detalle_servicio">
								<a class="btn tag_enlace_servicios" href="training.php" role="button">Ver más</a>
								<a class="btn tag_enlace_servicios_2" href="contact.php" role="button">Cotizar</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 promocional item-services " id="promocional">
					<div class="row">
						<div class="col-12  col-lg-6">
							<img class="img_detalle_servicios digital" src="<?php echo $path; ?>image/promocional.png">
						</div>
						<div class="col-12 col-lg-6 promocional disabled">
							<h3 class="tag_titulo_detalle_servicio">
								Creative Nerd <span class="promocional">Promocional</span>
							</h3>
							<p class="tag_descripcion_detalle_servicio">
								Material promocional para las empresas que desean promocionar sus productos o servicios a través del uso de elementos publicitarios que lleven la marca de su compañía entregándolo a clientes interno y cliente externo en eventos, ferias, etc..
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Materiales de Alta Calidad</strong>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Precios Competitivos</strong>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Respuesta Inmediata</strong>
							</p>
							<div class="div_botones_detalle_servicio">
								<a class="btn tag_enlace_servicios" href="promocional.php" role="button">Ver más</a>
								<a class="btn tag_enlace_servicios_2" href="contact.php" role="button">Cotizar</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-12 printing item-services" id="printing">
					<div class="row">
						<div class="col-12  col-lg-6">
							<img class="img_detalle_servicios digital" src="<?php echo $path; ?>image/mockup-printing.png">
						</div>

						<div class="col-12 col-lg-6 printing">
							<h3 class="tag_titulo_detalle_servicio">
								Creative Nerd <span class="printing">Printing</span>
							</h3>
							<p class="tag_descripcion_detalle_servicio">
								Somos una marca que nace con el fin de solucionar las necesidades de los empresarios de promocionar 
								sus productos y de darle un valor agregado a sus empresas que les permita alcanzar sus objetivos 
								corporativos mediante el uso de las nuevas tecnologías, las ideas creativas y la innovación.
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Tarjetas de Presentación</strong>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Impresión Digital</strong>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Publicidad Impresa</strong>
							</p>
							<p class="tag_caracteristicas_detalle_servicio">
								<i class="fas fa-check"></i><strong>Bolsas y Empaques</strong>
							</p>
							<div class="div_botones_detalle_servicio">
								<a class="btn tag_enlace_servicios" href="printing.php" role="button">Ver más</a>
								<a class="btn tag_enlace_servicios_2" href="contact.php" role="button">Cotizar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="seccion_quienes_somos" class="diagonal_cut">
		<div class="container">
			<div class="row justify-content-between align-items-center quienes_somos">
				<div class="col-12 col-lg-6 align-self-center">
					<h2 class="tag_titulo_secciones tag_titulo_secciones_white">
						¿QUIÉNES <b>SOMOS?</b>
					</h2>
					<p class="tag_texto_quienes_somos">
					Somos una compañía construida por emprendedores para emprendedores y para aquellos que desean perseguir
					sus sueños construyendo con bases solidas su participación empresarial.
					<br>
					Nuestra compañía se divide en 4 modelos de negocio clave inicialmente con la construcción de una agencia
					digital que permita a emprendedores y empresarios a alcanzar sus objetivos mediante el uso de las
					herramientas digitales y potencializar sus ideas de negocios. Luego continuamos con la construcción de
					una marca que brindara soluciones para una opción promocional innovadora para el mercado empresarial y la
					creación de una marca que solucionara las necesidades de materiales impresos para el sector empresarial.<br>
					Por último, dando una perspectiva mucho mas amplia se realizo una marca con el fin de capacitar a nuestros
					clientes y colaboradores en los temas que nuestra empresa ofrece brindando así también una oportunidad de
					crecimiento y mejoramiento en la calidad de vida de nuestros StakeHolders.

					</p>				
				</div>
				<div class="col-12 col-lg-5">
					<div class="row">
						<div class="col col-lg-4 text-center">
							<div class="div_circulo_contadores">
								<p class="tag_numero_contadores">25</p>
							</div>
							<p class="tag_nombre_contadores">Clientes felices</p>
						</div>
						<div class="col col-lg-4 text-center">
							<div class="div_circulo_contadores">
								<p class="tag_numero_contadores">50</p>
							</div>
							<p class="tag_nombre_contadores">Proyectos realizados</p>
						</div>
						<div class="col col-lg-4 text-center">
							<div class="div_circulo_contadores">
								<p class="tag_numero_contadores">5</p>
							</div>
							<p class="tag_nombre_contadores">Años de experiencia</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--<section id="seccion_equipo" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				NUESTRO <span>EQUIPO</span>
			</h2>
			
			<div class="row">
				<div class="owl-carousel owl-team col-xs-12">
					<div class="item">
						<img src="image/equipo/Johan.jpg" alt="">
						<div class="caption equipo">
							<h2>Johan Ángel</h2>
							<h3>Director General</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/johanangel.1319" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/in/johanangel/" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									<a href="mailto:gerencia@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/Angelica1.jpg" alt="">
						<div class="caption equipo">
							<h2>Angélica Pineda</h2>
							<h3>Directora de Proyectos</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/agelik0023" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/in/angélica-pineda-rodr%C3%ADguez-70855898/" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									<a href="mailto:angelica.pineda@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/Camila.jpg" alt="">
						<div class="caption equipo">
							<h2>Camila Medina</h2>
							<h3>Community Manager- Líder de Proyecto</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/MariaCamila.16" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/in/maria-camila-urrea-medina-763141114/" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									<a href="mailto:camila.medina@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/Camilo.jpg" alt="">
						<div class="caption equipo">
							<h2>Camilo Rojas</h2>
							<h3>Desarrollador Aplicaciones</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/camilo.rojas.86" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/in/camilorojas1986/" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									<a href="mailto:camilo.rojas@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/Pedro.jpg" alt="">
						<div class="caption equipo">
							<h2>Pedro Cruz</h2>
							<h3>Desarrollador Back End</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="mailto:pedro.cruz@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/man.jpg" alt="">
						<div class="caption equipo">
							<h2>Angello Donato</h2>
							<h3>Planner Digital</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/johanangel.1319" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.linkedin.com/in/johanangel/" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
									<a href="mailto:angello.donato@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="image/equipo/Liseth2.jpg" alt="">
						<div class="caption equipo">
							<h2>Liseth Rivero</h2>
							<h3>Líder de Proyecto</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/liseth.rivero.5" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="mailto:liseth.rivero@agenciaelnerd.com" class="nav-link"><i class="fas fa-envelope"></i></a>
								</nav>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="image/equipo/luis-pino.jpg" alt="">
						<div class="caption equipo">
							<h2>Luis Pino</h2>
							<h3>Publicista y diseñador</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.facebook.com/yhoney" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.pinterest.es/luispino" class="nav-link" target="_blank"><i class="fab fa-pinterest-p"></i></a>
									<a href="https://www.linkedin.com/in/luispino" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								</nav>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="image/equipo/laura-deantonio1.jpg" alt="">
						<div class="caption equipo">
							<h2>Laura Deantonio</h2>
							<h3>Líder de Diseño</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.instagram.com/amalia.rar/" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
								</nav>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>-->

	<section id="seccion_portafolio" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				NUESTROS <span>CLIENTES</span>
			</h2>
		
			<div class="container">
				<div class="grid item-services-portafolio able-portafolio" id="digital-portafolio">
					<div class="grid-item large item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/mockups/starken.png" alt="">
						<a class="caption portafolio" href="image/mockups/starken.png" data-lightbox="portafolio21" data-title="Landing Page">
							<h2>Starken <br>Vegan Protein</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
					</div>
					<div class="grid-item x-small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/mockups/lotus.png" alt="">
						<a class="caption portafolio" href="image/mockups/lotus.png" data-lightbox="portafolio22" data-title="Landing Page">
							<h2>Lotus <br>Web Cam Model</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
					</div>
					<div class="grid-item small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/mockups/alianza.png" alt="">
						<a class="caption portafolio" href="image/mockups/alianza.png" data-lightbox="portafolio23" data-title="Landing Page">
							<h2>Alianza SST</h2>
							<hr class="line-bottom">
                            <h3>Diseño web / Landing page</h3>
						</a>
					</div>
					<div class="grid-item medium item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/mockups/carpas.png" alt="">
						<a class="caption portafolio" href="image/mockups/carpas.png" data-lightbox="portafolio24" data-title="Landing Page">
							<h2>Carpas <br>e Ingenieria</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
					</div>
					<div class="grid-item small item-portafolio able" data-category-portafolio="digital-portafolio">
						<img src="image/mockups/ghy.png" alt="">
						<a class="caption portafolio" href="image/mockups/ghy.png" data-lightbox="portafolio25" data-title="Landing Page">
							<h2>GHY Siso</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
					</div>
				</div>
				<div class="grid item-services-portafolio" id="training-portafolio">
					<div class="grid-item large item-portafolio" data-category-portafolio="training-portafolio">
						<img src="image/portafolio/landing-starken.jpg" alt="">
						<div class="caption portafolio">
							<h2>Starken <br>Vegan Protein</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://starkenvegano.com" target="_blank" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item x-small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/landing-starken.jpg" alt="">
						<div class="caption portafolio">
							<h2>Starken <br>Vegan Protein</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://starkenvegano.com" target="_blank" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/landing-starken.jpg" alt="">
						<div class="caption portafolio">
							<h2>Página web</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item medium item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/landing-starken.jpg" alt="">
						<div class="caption portafolio">
							<h2>Landing Page</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing Page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio able" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/landing-starken.jpg" alt="">
						<div class="caption portafolio">
							<h2>Titulo</h2>
							<hr class="line-bottom">
							<h3>categoria</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="·" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="grid item-services-portafolio" id="promocional-portafolio">
					<div class="grid-item large item-portafolio" data-category-portafolio="promocional-portafolio">
						<img src="image/portafolio/lotus-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Landing Page</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item x-small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/lotus-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Página web</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/lotus-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Página web</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item medium item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/lotus-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Landing Page</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing Page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio able" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/lotus-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Titulo</h2>
							<hr class="line-bottom">
							<h3>categoria</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="grid item-services-portafolio" id="printing-portafolio">
					<div class="grid-item large item-portafolio" data-category-portafolio="printing-portafolio">
						<img src="image/portafolio/GHY-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Landing Page</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item x-small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/GHY-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Página web</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/GHY-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Página web</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item medium item-portafolio" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/GHY-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Landing Page</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing Page</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
					<div class="grid-item small item-portafolio able" data-category-portafolio="digital-portafolio">
						<img src="image/portafolio/GHY-web.jpg" alt="">
						<div class="caption portafolio">
							<h2>Titulo</h2>
							<hr class="line-bottom">
							<h3>categoria</h3>
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="#" class="plus portafolio"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<a class="btn tag_enlace_servicios portafolio-button" href="portafolio.php" role="button">Ver todos los Clientes</a>
			</div>
		</div>	
	</section>

	<section id="seccion_testimonios" class="seccion_padding diagonal_cut">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_white text-center">
				LO QUE DICEN NUESTROS CLIENTES
			</h2>
			<div id="div_contenedor_testimonios">
				<div class="div_item_testimonios">
					<div class="owl-carousel owl-testimonials">
						<div class="row item">
							<div class="col-12 col-lg-4 text-center">
								<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonios/cristian.jpg">
							</div>
							<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-center div_contenido_testimonios">
								<p class="tag_nombre_testimonio">Cristian Gonzalez</p>
								<p class="tag_asunto_testimonio">Publicista Independiente- Digital Agency</p>
								<p class="tag_texto_testimonio">
									<i class="fas fa-quote-left"></i>
									Me pareció muy profesional el trabajo... Realmente me siento muy a gusto y creo que fue una gran decisión haberles entregado el proyecto. Muchas gracias.
									<i class="fas fa-quote-right"></i>
								</p>
							</div>
						</div>
						<div class="row item">
							<div class="col-12 col-lg-4 text-center">
								<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonios/mireyafb.jpg">
							</div>
							<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-center div_contenido_testimonios">
								<p class="tag_nombre_testimonio">Mireya Pinilla</p>
								<p class="tag_asunto_testimonio">Presidenta Mireya Pinilla Interior Design</p>
								<p class="tag_texto_testimonio">
									<i class="fas fa-quote-left"></i>
									Llegamos a CreativeNerd debido a que muchos ingenieros prometieron hacernos una página web, sin embargo, ninguno de ellos lograba terminarla hasta que CreativeNerd nos apoyo y en poco tiempo nos apoyaron a programar la página web de la manera adecuada. Son un equipo de trabajo joven, comprometido, autentico y profesional. Asesoran nuestra compañía en el manejo de las redes sociales y nos ayudan a incrementar nuestro flujo de clientes.
									<i class="fas fa-quote-right"></i>
								</p>
							</div>
						</div>
						<div class="row item">
							<div class="col-12 col-lg-4 text-center">
								<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonios/Diego.jpeg">
							</div>
							<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-center div_contenido_testimonios">
								<p class="tag_nombre_testimonio">Diego Desensse</p>
								<p class="tag_asunto_testimonio">Gerente Hurbu Colombia</p>
								<p class="tag_texto_testimonio">
									<i class="fas fa-quote-left"></i>
									Soy un empresario mexicano residente en Colombia desde hace varios años. Decidí crear una empresa con el fin de beneficiar a muchas personas a hacer su vida mas fácil mediante el uso de una plataforma móvil. Con CreativeNerd cuento en este momento para llevar el desarrollo de mi proyecto de app móvil adelante.
									<i class="fas fa-quote-right"></i>
								</p>
							</div>
						</div>
						<div class="row item">
							<div class="col-12 col-lg-4 text-center">
								<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonios/Marlon.jpeg">
							</div>
							<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-center div_contenido_testimonios">
								<p class="tag_nombre_testimonio">Marlon Rodríguez</p>
								<p class="tag_asunto_testimonio">Gerente Men Magazine</p>
								<p class="tag_texto_testimonio">
									<i class="fas fa-quote-left"></i>
									Después de varias decepciones con ingenieros y diseñadores llegue a conocer a CreativeNerd la empresa que me ayudo con los ajustes web que mi página necesitaba, quedo como quería verla y me asesoran en el diseño de mis piezas para redes sociales. Son personas muy amables y muy profesionales.
									<i class="fas fa-quote-right"></i>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<section id="seccion_clientes">
		<div class="container">
			<div class="row">
				<div class="owl-carousel owl-clientes col-md-12">
					<div class="item clientes" style="width:250px"><img src="image/clientes/hurbu.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-alianza-sst.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-Bioclass.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-carpas-e- ingenieria.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-clavel-y-la-rosa.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-coop-futura.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-inversionin.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-jimenes-higuita.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-del mar a tu casa.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-fish box.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-gsc moda.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-men magazine gay.png" class="brand_grey"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-mireya pinilla.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-one style.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-Starken.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-uib seguros.png"></div>
					<div class="item clientes" style="width:250px"><img src="image/clientes/cliente-vanima.png" class="brand_grey"></div>
				</div>
			</div>	
		</div>	
	</section>
	<section id="seccion_contacto" class="seccion_padding">
		<div class="container">
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
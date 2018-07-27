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

<section id="seccion_banner_index" class="position_relative seccion_banner_index diagonal_cut">
	<img class="d-block w-100" src="<?php echo $path; ?>image/portada-home.png">
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
			<div class="col-12 col-md-3 training btn-services" data-category="training">
				<div class="boton">
					<img class="img-fluid" src="<?php echo $path; ?>image/logo-blanco-2.png">
				</div>
				<h3>Training</h3>
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
		</div>

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
							Somos una marca que nace con el fin de solucionar las necesidades de los empresarios de promocionar 
							sus productos y de darle un valor agregado a sus empresas que les permita alcanzar sus objetivos 
							corporativos mediante el uso de las nuevas tecnologías, las ideas creativas y la innovación.
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Desarrollo web</a>
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Desarrollo de apps</a>
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Diseño gráfico</a>
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Diseño multimedia</a>
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Social media</a>
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i><a href="#">Diseño industrial</a>
						</p>
						<div class="div_botones_detalle_servicio">
							<a class="btn tag_enlace_servicios" href="" role="button">Ver más</a>
							<a class="btn tag_enlace_servicios_2" href="" role="button">Cotizar</a>
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
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
						<div class="div_botones_detalle_servicio">
							<a class="btn tag_enlace_servicios" href="" role="button">Ver más</a>
							<a class="btn tag_enlace_servicios_2" href="" role="button">Cotizar</a>
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
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
						<p class="tag_caracteristicas_detalle_servicio">
							<i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</p>
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

<section id="seccion_quienes_somos" class="diagonal_cut">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-5 align-self-center">
				<h2 class="tag_titulo_secciones tag_titulo_secciones_white">
					¿QUIÉNES <b>SOMOS?</b>
				</h2>
				<p class="tag_texto_quienes_somos">
					Somos una marca que nace con el fin de solucionar las necesidades de los empresarios 
					de promocionar sus productos y de darle un valor agregado a sus empresas que les 
					permita alcanzar sus objetivos corporativos mediante el uso de las nuevas tecnologías, 
					las ideas creativas y la innovación.
				</p>				
			</div>
			<div class="col-12 col-lg-6">
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

<section id="seccion_equipo" class="seccion_padding">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			NUESTRO <span>EQUIPO</span>
		</h2>
		
		<div class="row">
			<div class="owl-carousel owl-team col-xs-12">
				<div class="item">
					<img src="image/team-1.png" alt="">
					<div class="caption">
						<h2>nombre</h2>
						<h3>cargo</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
								<a href="#" class="nav-link"><i class="fas fa-envelope"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="image/team-2.png" alt="">
					<div class="caption">
						<h2>nombre</h2>
						<h3>cargo</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
								<a href="#" class="nav-link"><i class="fas fa-envelope"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="image/team-3.png" alt="">
					<div class="caption">
						<h2>nombre</h2>
						<h3>cargo</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
								<a href="#" class="nav-link"><i class="fas fa-envelope"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="image/team-1.png" alt="">
					<div class="caption">
						<h2>nombre</h2>
						<h3>cargo</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
								<a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
								<a href="#" class="nav-link"><i class="fas fa-envelope"></i></a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="seccion_portafolio" class="seccion_padding">
	<div class="container">
		<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
			NUESTRO <span>PORTAFOLIO</span>
		</h2>
		<ul class="nav nav-pills justify-content-center category">
		  <li class="nav-item">
		    <a class="nav-link active" href="#">Active</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Link</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#">Link</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link disabled" href="#">Disabled</a>
		  </li>
		</ul>
			
		<div class="container">
			<div class="grid">
				<div class="grid-item large">
					<img src="image/mockup-1.png" alt="">
					<div class="caption">
						<h2>Titulo</h2>
						<h3>categoria</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fas fa-plus-circle"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="grid-item x-small">
					<img src="image/mockup-3.png" alt="">
					<div class="caption">
						<h2>Titulo</h2>
						<h3>categoria</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fas fa-plus-circle"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="grid-item small">
					<img src="image/mockup-4.png" alt="">
					<div class="caption">
						<h2>Titulo</h2>
						<h3>categoria</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fas fa-plus-circle"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="grid-item medium">
					<img src="image/mockup-2.png" alt="">
					<div class="caption">
						<h2>Titulo</h2>
						<h3>categoria</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fas fa-plus-circle"></i></a>
							</nav>
						</div>
					</div>
				</div>
				<div class="grid-item small">
					<img src="image/mockup-6.png" alt="">
					<div class="caption">
						<h2>Titulo</h2>
						<h3>categoria</h3>
						<hr class="line-bottom">
						<div class="links">
							<nav class="nav justify-content-center">
								<a href="#" class="nav-link"><i class="fas fa-plus-circle"></i></a>
							</nav>
						</div>
					</div>
				</div>
			</div>
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
						<div class="col-12 col-lg-4 text-center align-self-end">
							<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonio.jpeg">
						</div>
						<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-start div_contenido_testimonios">
							<p class="tag_nombre_testimonio">Luna Rose</p>
							<p class="tag_asunto_testimonio">Web Developer Experience</p>
							<p class="tag_texto_testimonio">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
					<div class="row item">
						<div class="col-12 col-lg-4 text-center align-self-end">
							<img class="img_persona_testimonio" src="<?php echo $path; ?>image/testimonio.jpeg">
						</div>
						<div class="col-md-12 col-12 col-lg-7 offset-lg-1 align-self-start div_contenido_testimonios">
							<p class="tag_nombre_testimonio">Luna Rose</p>
							<p class="tag_asunto_testimonio">Web Developer Experience</p>
							<p class="tag_texto_testimonio">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
				<div class="item"><img src="image/clientes/marca-ejemplo.png"></div>
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
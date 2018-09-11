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
	<img class="d-block w-100" src="<?php echo $path; ?>image/portfolio-bg.jpeg">
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner portafolio clientes">
			CLIENTES
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

	<section id="seccion_portafolio" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				NUESTROS <span>CLIENTES</span>
			</h2>


			<ul class="nav nav-pills justify-content-center category portafolio">
                <li class="nav-item active">
					<a class="todo digital active nav-link btn -portafolio" data-category-button="todo">Todo</a>
				</li>
				<li class="nav-item active">
					<a class="digital nav-link btn-portafolio" data-category-button="digital">Digital Agency</a>
				</li>
			</ul>

			<ul class="nav nav-pills justify-content-center category portafolio">
				<!-- Sub categorias Digital-->
				<li class="nav-item sub-category-digital sub-category-wrapper">
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="web-design">Diseño Web</a>
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="app">Desarrollo de Apps</a>
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="graphic-design">Diseño Gráfico</a>
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="marketing">Marketing Digital</a>
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="multimedia">Diseño Multimedia & Fotografía</a>
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency" data-subcategory-button="industrial">Diseño Industrial</a>
				</li>
				<li class="nav-item">
					<a class="training nav-link btn-portafolio" data-category-button="training">Training</a>
				</li>
				<li class="nav-item">
					<a class="promocional nav-link btn-portafolio" data-category-button="promocional">Promocional</a>
				</li>
				<li class="nav-item">
					<a class="printing nav-link btn-portafolio" data-category-button="printing">Printing</a>
				</li>
			</ul>
			<!-- contenido -->			
			<div class="container">
                <div class="row" id="portafolio-general">
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency" data-subcategory-item="web-design">
						<img src="image/portafolio/alianza-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/alianza-web.jpg" data-lightbox="portafolio1" data-title="Landing Page">
							<h2>Alianza SST</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Soporte Web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/landing-starken.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/landing-starken.jpg" data-lightbox="portafolio2" data-title="Landing Page">
							<h2>Starken <br>Vegan Protein</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/lotus-web.jpg" alt="" class="img-fluid">
                        <a class="caption portafolio" href="image/portafolio/lotus-web.jpg" data-lightbox="portafolio3" data-title="Landing Page">
							<h2>Lotus <br>Web Cam Model</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/carpas-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/carpas-web.jpg" data-lightbox="portafolio4" data-title="Landing Page">
							<h2>Carpas <br>e Ingenieria</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/GHY-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/GHY-web.jpg" data-lightbox="portafolio4" data-title="Landing Page">
							<h2>GHY Siso</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/Redemancy-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/Redemancy-web.jpg" data-lightbox="portafolio5" data-title="Landing Page">
							<h2>Redemancy <br> Photo Studios</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/vr3-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/vr3-web.jpg" data-lightbox="portafolio6" data-title="Landing Page">
							<h2>Vr3</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/sur-alturas-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/sur-alturas-web.jpg" data-lightbox="portafolio7" data-title="Landing Page">
							<h2>Sur Alturas</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/jhr-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/jhr-web.jpg" data-lightbox="portafolio8" data-title="Landing Page">
							<h2>JHR Abogados</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="graphic-design">
                        <img src="image/portafolio/bioclass-letrero.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/bioclass-letrero.jpg" data-lightbox="portafolio9" data-title="Bioclass Spa">
							<h2>Bioclass Spa Letrero</h2>
							<hr class="line-bottom">
							<h3>Diseño Gráfico</h3>
						</a>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="graphic-design">
						<img src="image/portafolio/pendon-bioclass.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/pendon-bioclass.jpg"  data-lightbox="portafolio10" data-title="Pendon">
							<h2>Pendón</h2>
							<hr class="line-bottom">
							<h3>Diseño Gráfico</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/gsc-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/gsc-web.jpg" data-lightbox="portafolio11" data-title="Landing Page">
							<h2>GSC Moda</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
						<img src="image/portafolio/gsc-web-venezuela.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/gsc-web-venezuela.jpg" data-lightbox="portafolio12" data-title="Landing Page">
							<h2>GSC Moda <br> Venezuela</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="marketing">
						<img src="image/portafolio/post-redes-gsc-general.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/post-redes-gsc-general.jpg" data-lightbox="portafolio13" data-title="GSC Post Redes">
							<h2>GSC Post <br>Redes</h2>
							<hr class="line-bottom">
							<h3>Marketing Digital / Social Media</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="marketing">
                        <img src="image/portafolio/el-clavel-instagram.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/el-clavel-instagram.jpg" data-lightbox="portafolio14" data-title="GSC Post Redes">
							<h2>El Clavel y La Rosa</h2>
							<hr class="line-bottom">
							<h3>Marketing Digital / Social Media</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
                        <img src="image/portafolio/coopfutura-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/coopfutura-web.jpg" data-lightbox="portafolio15" data-title="GSC Post Redes">
							<h2>Coopfutura</h2>
							<hr class="line-bottom">
							<h3>Diseño web / Landing page</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="graphic-design">
                        <img src="image/portafolio/UIB-presentacion.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/UIB-presentacion.jpg" data-lightbox="portafolio16" data-title="Coopfutura">
							<h2>UIB Seguros</h2>
							<hr class="line-bottom">
							<h3>Diseño Gráfico</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
						<img src="image/portafolio/vanima-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/vanima-web.jpg" data-lightbox="portafolio17" data-title="Coopfutura">
							<h2>Vanima Tours</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design"> 
                        <img src="image/portafolio/men-magazine-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/men-magazine-web.jpg" data-lightbox="portafolio18" data-title="Coopfutura">
							<h2>Men<br> Magazine Gay</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="web-design">
						<img src="image/portafolio/mireya-web.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/mireya-web.jpg" data-lightbox="portafolio19" data-title="Coopfutura">
							<h2>Mireya Pinilla<br>Interior Design</h2>
							<hr class="line-bottom">
							<h3>Diseño web</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="app">
						<img src="image/portafolio/hurbu-app.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/hurbu-app.jpg" data-lightbox="portafolio20" data-title="Coopfutura">
							<h2>Hurbu</h2>
							<hr class="line-bottom">
							<h3>App Móvil</h3>
						</a>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency" data-subcategory-item="graphic-design">
						<img src="image/portafolio/logo-onestyle.jpg" alt="" class="img-fluid">
						<a class="caption portafolio" href="image/portafolio/logo-onestyle.jpg" data-lightbox="portafolio21" data-title="OneStyle">
							<h2>OneStyle</h2>
							<hr class="line-bottom">
							<h3>Diseño Gráfico</h3>
						</a>
                    </div>
                </div>
			</div>
		</div>	
	</section>
<?php 
	include('footer.php');
?>
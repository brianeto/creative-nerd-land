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
		<h1 class="tag_titulo_secciones tag_titulo_secciones_black text-center titulo-banner portafolio">
			PORTAFOLIO
		</h1>
	</img>
	<div class="div_diagonal div_diagonal_white"></div>
</section>

	<section id="seccion_portafolio" class="seccion_padding">
		<div class="container">
			<h2 class="tag_titulo_secciones tag_titulo_secciones_black text-center">
				NUESTRO <span>PORTAFOLIO</span>
			</h2>
			<ul class="nav nav-pills justify-content-center category portafolio">
                <li class="nav-item active">
					<a class="todo digital active nav-link btn-portafolio" data-category-button="todo">Todo</a>
				</li>
				<li class="nav-item active">
					<a class="digital nav-link btn-portafolio" data-category-button="digital-agency">Digital Agency</a>
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
			<div class="container">
                <div class="row" id="portafolio-general">
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency">
                        <img src="image/portafolio/alianza-web.jpg" alt="" class="img-fluid">
                            <div class="caption portafolio">
                                <h2>Alianza SST</h2>
                                <h3>Diseño web / Landing page</h3>
                                <hr class="line-bottom">
                                <div class="links">
                                    <nav class="nav justify-content-center">
                                        <!--<a  href="image/portafolio/alianza-web.jpg" data-lightbox="portafolio1" data-title="Landing Page" class="nav-link"><i class="fas fa-plus-circle"></i></a>-->
										<a  href="https://alianzasst.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
									</nav>
                                </div>
                            </div>
                        </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency">
                        <img src="image/portafolio/landing-starken.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Starken <br>Vegan Protein</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://starkenvegano.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency">
                        <img src="image/portafolio/lotus-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Lotus <br>Web Cam Model</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://modelos-webcam.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency">
                        <img src="image/portafolio/carpas-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Carpas <br>e Ingenieria</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.carpascolombia.com/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general digital-agency" data-category-item="digital-agency">
                        <img src="image/portafolio/GHY-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>GHY Siso</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://ghysiso.com/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/Redemancy-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Redemancy <br> Photo Studios</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://redamancyphotostudios.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/vr3-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Vr3</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://vr3.com.co/" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/sur-alturas-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Sur Alturas</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://suralturas.com.co/" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/jhr-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>JH Abogados</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://jhrcorp.co/" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/bioclass-letrero.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Bioclass Spa</h2>
							<h3>Marketing Digital / Post Social Media</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/bioclass-letrero.jpg" data-lightbox="portafolio3" data-title="Bioclass Spa" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/pendon-bioclass.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Pendon</h2>
							<h3>Diseño Grafico</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/pendon-bioclass.jpg"  data-lightbox="portafolio4" data-title="Pendon" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/gsc-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>GSC Moda</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://gscmoda.com.co/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/gsc-web-venezuela.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>GSC Moda <br> Venezuela</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://gscmoda.com/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/post-redes-gsc-general.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>GSC Post <br>Redes</h2>
							<h3>Marketing Digital / Social Media</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/post-redes-gsc-general.jpg" data-lightbox="portafolio5" data-title="GSC Post Redes" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/el-clavel-instagram.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>El Clavel y La Rosa</h2>
							<h3>Marketing Digital / Social Media</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://www.instagram.com/elclavelylarosa/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/coopfutura-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Coopfutura</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/coopfutura-web.jpg" data-lightbox="portafolio6" data-title="Coopfutura" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/UIB-presentacion.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>UIB Seguros</h2>
							<h3>Diseño Grafico</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/UIB-presentacion.jpg" data-lightbox="portafolio6" data-title="Coopfutura" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/vanima-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Vanima Tours</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://vanimatours.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/men-magazine-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Men<br> Magazine Gay</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="https://menmagazinegay.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/mireya-web.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Mireya Pinilla<br>Interior Design</h2>
							<h3>Diseño web / Landing page</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://www.mireyapinilla.com/" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/hurbu-app.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>Hurbu</h2>
							<h3>App Movil</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="http://www.hurbu.com" target="_blank" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-4 item-portafolio-general training" data-category-item="digital-agency">
                        <img src="image/portafolio/logo-onestyle.jpg" alt="" class="img-fluid">
                        <div class="caption portafolio">
							<h2>OneStyle</h2>
							<h3>Diseño Grafico</h3>
							<hr class="line-bottom">
							<div class="links">
								<nav class="nav justify-content-center">
									<a href="image/portafolio/logo-onestyle.jpg" data-lightbox="portafolio7" data-title="OneStyle" class="nav-link"><i class="fas fa-plus-circle"></i></a>
								</nav>
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
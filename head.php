	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shorycut icon" href="<?php echo $path; ?>image/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/fontawesome-all.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/animations.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $path; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $path; ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $path; ?>css/jquery.modal.css">
	<link rel="stylesheet" href="<?php echo $path; ?>css/lightbox.min.css">

</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="row justify-content-between align-items-center height">
				<a class="navbar-brand fondo_img_brand_navbar bg_blanco" href="index.php">
					<img class="img_brand_navbar" src="<?php echo $path; ?>image/logo.png">
				</a>
				<div class="btn_toggle col-3 d-md-none">
					<i class="fas fa-bars img-fluid"></i>
				</div>
				<div class="col-12 col-md-10">
					<ul class="nav justify-content-center">
						<li class="nav-item"><a href="index.php" class="tag_enlace_menu nav-link">HOME</a></li>
						<li class="nav-item link_dropdown">
							<div class="item_dropdown dropdown">
								<a href="index.php#seccion_servicios" class="tag_enlace_menu nav-link">SERVICIOS</a>
									<div class="div_img seccion_de_servicios">
								<i class="fas fa-angle-down img-fluid"></i>
								</div>
							</div>
							<ul class="nav flex-column content_dropdown">
									<li class="dropdown-item digital" href="digital-agency.php">
										<a href="digital-agency.php"><img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1"></a>
										<a href="digital-agency.php"><span class="drop-right">Digital Agency</span></a>
									</li>							
									<li class="dropdown-item promocional" href="promocional.php">
										<a href="promocional.php"><img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid"></a>
										<a href="promocional.php"><span class="drop-right">Promocional</span></a>
									</li>															
									<li class="dropdown-item printing" href="printing.php">
										<a href="printing.php"><img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid"></a>
										<a href="printing.php"><span class="drop-right">Printing</span></a>	
									</li>
									<li class="dropdown-item training" href="training.php">
										<a href="training.php"><img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid"></a>
										<a href="training.php"><span class="drop-right">Training</span></a>	
									</li>
							</ul>
						</li>
						<li class="nav-item"><a href="index.php#seccion_quienes_somos" class="tag_enlace_menu nav-link">¿QUIÉNES SOMOS?</a></li>
						<li class="nav-item"><a href="portafolio.php" class="tag_enlace_menu nav-link">CLIENTES</a></li>
						<li class="nav-item"><a href="#" class="tag_enlace_menu nav-link">BLOG</a></li>
						<li class="nav-item"><a href="contact.php" class="tag_enlace_menu nav-link">CONTACTO</a></li>
					</ul>	
				</div>
			</nav>
		</div>
</header>
	<div class="back-to-top">
		<a href="#home"><i class="fas fa-angle-up"></i></a>
	</div>
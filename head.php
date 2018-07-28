	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shorycut icon" href="<?php echo $path; ?>image/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/fontawesome-all.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/animations.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/style.css">
</head>
<body>
	<input type="hidden" value="<?php echo $path; ?>" id="txt_path">
	<header class="header">			
		<div class="container-fluid div_menu_principal">	
			<nav class="navbar navbar-expand-lg container nav_menu_principal">
				<a class="navbar-brand fondo_img_brand_navbar bg_blanco" href="index.php">
					<img class="img_brand_navbar" src="<?php echo $path; ?>image/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>			
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="tag_enlace_menu" href="index.php">HOME</a>
						</li>
						<div class="dropdown">
							<a class="dropdown-toggle tag_enlace_menu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span>SERVICIOS</span>	
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							
									<a class="dropdown-item digital" href="digital-agency.php">
										<img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1">
										<span class="drop-right">Digital Agency</span>	
									</a>
								
							
									<a class="dropdown-item training" href="training.php">
										<img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid">
										<span class="drop-right">Training</span>	
									</a>
								
							
									<a class="dropdown-item promocional" href="promocional.php">
										<img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid">
										<span class="drop-right">Promocional</span>	
									</a>
								
							
									<a class="dropdown-item printing" href="printing.php">
										<img src="image/logo-blanco-2.png" alt="img" class="drop-left col-lg-3 col-sm-1 img-fluid">
										<span class="drop-right">Printing</span>	
									</a>
								
							</div>
						</div>
						<li class="nav-item">
							<a class="tag_enlace_menu" href="#">¿QUIÉNES SOMOS?</a>
						</li>
						<li class="nav-item">
							<a class="tag_enlace_menu" href="#">PORTAFOLIO</a>
						</li>
						<li class="nav-item">
							<a class="tag_enlace_menu" href="#">BLOG</a>
						</li>
						<li class="nav-item">
							<a class="tag_enlace_menu" href="#">CONTACTO</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>	
	</header>

	<div class="back-to-top">
		<a href="#"><i class="fas fa-angle-up"></i></a>
	</div>
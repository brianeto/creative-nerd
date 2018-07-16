	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shorycut icon" href="<?php echo $path; ?>image/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/fontawesome-all.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/animations.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>scss/style.scss">
</head>
<body>
	<input type="hidden" value="<?php echo $path; ?>" id="txt_path">
	<header>			
		<div class="container-fluid div_menu_principal">	
			<nav class="navbar navbar-expand-lg container nav_menu_principal">
				<a class="navbar-brand fondo_img_brand_navbar bg_blanco" href="/">
					<img class="img_brand_navbar" src="<?php echo $path; ?>image/logo.png">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>			
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="tag_enlace_menu" href="/">HOME</a>
						</li>
						<div class="dropdown">
							<a class="dropdown-toggle tag_enlace_menu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								SERVICIOS
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<li>
								<a class="dropdown-item" href="#">Digital Agency
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">Training</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">Promocional</a>
							</li>
							<li>
								<a class="dropdown-item" href="#">Printing</a>
							</li>
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
<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="MReyhanJ">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/tiny-slider.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/aos.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/glightbox.min.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/style.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/nav.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/flatpickr.min.css">
	<link rel="stylesheet" href="<?= THEMES_SITE ?>/css/custom.css">

	<script src="<?= THEMES_SITE ?>/js/bootstrap.bundle.min.js"></script>
	<script src="<?= THEMES_SITE ?>/js/jquery-2.2.4.min.js"></script>
	<title>PT. Prima Sistem Terpadu - <?= $title; ?></title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= THEMES_SITE ?>/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= THEMES_SITE ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= THEMES_SITE ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= THEMES_SITE ?>/images/favicon/site.webmanifest">
	<meta name="theme-color" content="#ffffff">

</head>
<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-8 col-md-4">
							<a href="<?= base_url() ?>" class="logo m-0 float-start">PT. PRIMA SISTEM TERPADU</span></a>
						</div>
						<div class="col-2 col-md-6 text-center">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="<?= base_url() ?>">Home</a></li>
								<li class="has-children">
									<a href="solutions.html">Multi Menu</a>
									<ul class="dropdown">
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="<?= base_url() ?>pagelist">Page List</a></li>
								<li><a href="<?= base_url() ?>contact">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<a href="#" class="call-us d-flex align-items-center">
								<span class="icon-phone"></span>
								<span>+62 21 4204626</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- CONTENT BODY -->	
    <?php echo $contents; ?>
	<!-- CONTENT BODY End -->

	<div class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>Jl. Sumur Batu 6 No.3, RT.14/RW.5, Cempaka Baru, 
						Kemayoran, Central Jakarta City, Jakarta 10640</address>
						<ul class="list-unstyled links">
							<li><a href="tel://+6221-4204-626">+62 21 4204626</a></li>
							<li><a href="tel://+6221-5091-9968">+62 21 50919968</a></li>
						</ul>
					</div> 
				</div> 
				<div class="col-lg-4">
					<div class="widget">
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Content</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div> 
				</div> 
				<div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Page List</a></li>
						</ul>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-youtube"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							
						</ul>
					</div> 
				</div> 
			</div>
		</div> 
	</div> 

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= THEMES_SITE ?>/js/tiny-slider.js"></script>
	<script src="<?= THEMES_SITE ?>/js/flatpickr.min.js"></script>
	<script src="<?= THEMES_SITE ?>/js/aos.js"></script>
	<script src="<?= THEMES_SITE ?>/js/glightbox.min.js"></script>
	<script src="<?= THEMES_SITE ?>/js/navbar.js"></script>
	<script src="<?= THEMES_SITE ?>/js/counter.js"></script>
	<script src="<?= THEMES_SITE ?>/js/custom.js"></script>

</body>
</html>
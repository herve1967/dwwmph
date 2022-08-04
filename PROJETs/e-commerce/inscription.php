<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/styles.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 03 28 29 30 31</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> projet@email.com</a></li>
						<li><a href="https://www.google.com/maps/place/Dunkerque/data=!4m2!3m1!1s0x47dc8b6dd9ff20b9:0x40af13e81646da0?sa=X&ved=2ahUKEwjEuJCt3af5AhUG5hoKHS3fAccQ8gF6BAgJEAE"><i class="fa fa-map-marker"></i> 59140 Dunkerque</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="inscription.html"><i class="fa fa-user-o"></i> Inscription</a></li>
						<li><a href="connexion.html"><i class="fa fa-user-o"></i> Connexion</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="../projet-site-biblio/img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Choisis</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
										<option value="1">Category 03</option>
										<option value="1">Category 04</option>
										<option value="1">Category 05</option>
										<option value="1">Category 06</option>
									</select>
									<input class="input" placeholder="Recherche ici">
									<button class="search-btn">Recherche</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="blank.html">
										<i class="fa fa-heart-o"></i>
										<span>Favoris</span>
										<div class="qty">0</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Panier</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="../projet-site-biblio/img/product1.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">titre du livre</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>980.00 €</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="../projet-site-biblio/img/product2.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">titre du livre</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>980.00 €</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Objet(s) selectionner</small>
											<h5>TOTAL DU PANIER : 2940.00 €</h5>
										</div>
										<div class="cart-btns">
											<a href="checkout.html">Voir le panier</a>
											<a href="checkout.html">Valider  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.html">Accueil</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<!-- <div id="breadcrumb" class="section"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<!-- <div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Inscription</h3>
						<ul class="breadcrumb-tree">
							<form action="inscription.php" method="post">
								Nom D'utilisateur : <input type="text"> 
								Mot De Passe : <input type="text">
								<input type="submit">
							</form>
						</ul>
					</div>
				</div> -->
				<!-- /row -->
			<!-- </div> -->
			<!-- /container -->
		<!-- </div> -->
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<form action="inscription.php" method="post">
						Nom : <input type="text"> <br> <br>
						Prenom : <input type="text"> <br> <br>
						Email : <input type="text"> <br> <br>
						Nom D'utilisateur : <input type="text"> <br> <br> 
						Mot De Passe : <input type="text"> <br> <br>
						<input type="submit">
					</form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Inscris toi pour recevoir les <strong>NOUVELLES</strong></p>
							<form>
								<input class="input" type="email" placeholder="Entre Ton Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Valider</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">A Propos De Nous</h3>
								<p>Voici notres projet</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>59140 Dunkerque</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>03 28 29 30 31</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>projet@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Offre Du Moments</a></li>
									<li><a href="#">Livres Neufs</a></li>
									<li><a href="#">Livres D'occasions</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informations</h3>
								<ul class="footer-links">
									<li><a href="#">A Propos</a></li>
									<li><a href="#">Contactez Nous</a></li>
									<li><a href="#">Police Privé</a></li>
									<li><a href="#">Retour De Produit</a></li>
									<li><a href="#">Conditions D'utilisation</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Services</h3>
								<ul class="footer-links">
									<li><a href="#">Mon Compte</a></li>
									<li><a href="#">Mon Panier</a></li>
									<li><a href="#">Favoris</a></li>
									<li><a href="#">Suivre Mon Colis</a></li>
									<li><a href="#">Aide</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Droit Reservé | Le template a était fait par Dany, Hervé, Davy, Kévin <a href="https://colorlib.com" target="_blank"></a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

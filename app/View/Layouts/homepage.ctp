<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Acceuil | Wutalma</title>
		<meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="fonts/fontello/css/fontello.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="plugins/fullpage/jquery.fullpage.min.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="plugins/hover/hover-min.css" rel="stylesheet">		
		
		<!-- The Project core CSS file -->
		<link href="css/style.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="css/skins/vivid_red.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header  full-page">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
				<!-- header start -->
				<!-- ================ --> 
				<header class="header  clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-xs-6 ">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
										<a href="#"><img id="logo_img" src="img/logo_chepap.png" alt="The Project" width="100px"></a>
									</div>
									<!--div class="site-slogan" style="color: #bbbbbb;">
										Par Chenille Papillon
									</div>-->
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-6 col-xs-6">
					
								<div class="row">
									<!-- header-right start -->
									<!-- ================ -->
									<?php if($this->Session->read('Auth.User')): ?>
									<div class="col-md-6">
										<?php echo $this->Html->link(__('<i class="fa fa-users pr-10"></i> MON PROFIL'), array('controller' => 'users','action' => 'view', $this->Session->read('Auth.User.id'), $this->Session->read('Auth.User.role') => true), array('escape' => false, 'class' => 'btn btn-default-transparent btn-xl btn-hvr hvr-shutter-in-vertical','target' => 'blank')); ?>
									</div>
									<div class="col-md-6">
										<?php echo $this->Html->link(__('<i class="fa fa-lock pr-10"></i> DECONNEXION'), array('controller' => 'users', 'action' => 'logout', $this->Session->read('Auth.User.role') => false), array('escape' => false, 'class' => 'btn btn-default-transparent btn-xl btn-hvr hvr-shutter-in-vertical','target' => 'blank')); ?>
									</div>
									
									<?php else: ?>
									<div class="col-md-6">
										<?php echo $this->Html->link(__('<i class="fa fa-users pr-10"></i> INSCRIPTION'), array('controller' => 'users', 'action' => 'register','admin' => false), array('escape' => false, 'class' => 'btn btn-default-transparent btn-xl btn-hvr hvr-shutter-in-vertical','target' => 'blank')); ?>
									</div>
									<div class="col-md-6">
										<?php echo $this->Html->link(__('<i class="fa fa-lock pr-10"></i> CONNEXION'), array('controller' => 'users', 'action' => 'login', 'admin' => false), array('escape' => false, 'class' => 'btn btn-default-transparent btn-xl btn-hvr hvr-shutter-in-vertical','target' => 'blank')); ?>
									</div>
								<?php endif ?>
								</div>
									
									<!-- header-right end -->
					
							</div>
						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->

			<div class="fullpage-site">

				<!-- section start -->
				<!-- ================ -->
				<section id="section-1" class="section dark-translucent-bg" style="background-image: url(img/chepapaffiche2.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h1 class="title large">Bienvenue sur <span class="text-default">la plateforme Wutalma</span></h1>
								<div class="separator-2"></div>
								<p class="large text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
								
							</div>
						</div>
					</div>
				</section>
				<!-- section end -->

				<!-- section start -->
				<!-- ================ 
				<section id="section-2" class="section dark-translucent-bg" style="background-image: url(img/chepapaffiche2.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 text-center col-md-offset-2 pv-20">
								<h2 class="title">A propos de nous</h2>
								<div class="separator mt-10"></div>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium.</p>
								<div class="space-bottom"></div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa fa-diamond"></i></span>
									<div class="body">
										<h4 class="title">10 ans d'expériene</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
									<div class="space-bottom"></div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa fa-connectdevelop"></i></span>
									<div class="body">
										<h4 class="title">Plus de 50 entreprises</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
									<div class="space-bottom"></div>
								</div>
							</div>
							<div class="clearfix visible-sm"></div>
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa icon-snow"></i></span>
									<div class="body">
										<h4 class="title">Une application simple et efficace</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
									<div class="space-bottom"></div>
								</div>
							</div>
							<div class="clearfix visible-md visible-lg"></div>
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa fa-heart"></i></span>
									<div class="body">
										<h4 class="title">Trouver un emploi facilement</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
									<div class="space-bottom"></div>
								</div>
							</div>
							<div class="clearfix visible-sm"></div>
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa fa-cogs"></i></span>
									<div class="body">
										<h4 class="title">Un service a moindre côut</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-offset-1 col-lg-3">
								<div class="feature-box-2">
									<span class="default-bg icon small"><i class="fa icon-lifebuoy"></i></span>
									<div class="body">
										<h4 class="title">Assistance directe</h4>
										<p>Voluptatem ad provident non repudiandae beatae cupiditate amet.</p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>-->
				<section id="section-2" class="section light-gray-bg pv-30 padding-bottom-clear clearfix">
					<div class="container">
						<div class="row">
							<?php foreach ($categories as $category): ?>
							<div class="col-md-4 ">
								<div class="pv-30 ph-20 feature-box bordered shadow text-center " data-animation-effect="fadeInDownSmall" data-effect-delay="100">
									<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
									<h3><?php echo h($category['Category']['nom']); ?></h3>
									<div class="separator clearfix"></div>
									<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus</p>
									<a href="#">En savoir plus<i class="pl-5 fa fa-angle-double-right"></i></a>
								</div>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				</section>
				<!-- section end -->
				<?php echo $this->element('pricing_home'); ?>
				<!-- section start -->
				<!-- ================ -->
				<section id="section-4" class="section light-gray-bg padding-bottom-clear clearfix">
					<div class="container">
						<div class="row">

							<div class="col-md-8 col-md-offset-2 text-center">
								<h2 class="title">Nos Principaux <span class="text-default">Services</span></h2>
								<div class="separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae reprehenderit laboriosam, quasi ipsam adipisci, dolor facilis blanditiis, repellendus, esse porro ipsum! Quos obcaecati autem laudantium quis itaque non ducimus ea?</p>
								<div class="space-bottom"></div>
							</div>
						</div>
					</div>
					<div class="owl-carousel carousel-autoplay">
						<?php foreach ($subcategories as $subcategory): ?>
							
						<div class="image-box shadow text-center" >
							<div class="overlay-container">
								<?php echo $this->Html->image($subcategory['SubCategory']['image'],
									array(
										'class' => '',
										'width' => '321px',
										'height' => '241px'
									)
								); ?>
								<div class="overlay-top">
									<div class="text">
										<h2><a href="#"><?php echo h($subcategory['SubCategory']['nom']); ?></a></h2>
										
									</div>
								</div>
								<div class="overlay-bottom">
									<div class="links">
										<a href="#" class="btn btn-gray-transparent btn-animated">Voir détails <i class="pl-10 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				</section>
				<!-- section end -->
				
				<section id="section-5" class="section pv-40 stats padding-bottom-clear dark-translucent-bg hovered" style="background-image: url(img/chepapaffiche2.jpg);" >
					<div class="owl-carousel content-slider">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="testimonial text-center">
										<div class="testimonial-image">
											<img src="img/testimonial-1.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
										</div>
										<h3>Just Parfait!</h3>
										<div class="separator"></div>
										<div class="testimonial-body">
											<blockquote>
												<p>Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan tium dolore laud antium, totam rem dolor sit amet tristique pulvinar, turpis arcu rutrum nunc, ac laoreet turpis augue a justo.</p>
											</blockquote>
											<div class="testimonial-info-1">- Fabienne CARRERE</div>
											<div class="testimonial-info-2">Indépendance Immobilière</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="testimonial text-center">
										<div class="testimonial-image">
											<img src="img/testimonial-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
										</div>
										<h3>Incroyable!</h3>
										<div class="separator"></div>
										<div class="testimonial-body">
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et cupiditate deleniti ratione in. Expedita nemo, quisquam, fuga adipisci omnis ad mollitia libero culpa nostrum est quia eos esse vel!</p>
											</blockquote>
											<div class="testimonial-info-1">- Ousmane Ndiaye</div>
											<div class="testimonial-info-2">Taximan</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="clients-container">
							<div class="clients">
								<div class="client-image">
									<a href="#"><img src="img/client-1.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-2.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-3.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-4.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-5.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-6.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-7.png" alt=""></a>
								</div>
								<div class="client-image">
									<a href="#"><img src="img/client-8.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</section>

				

				<!-- section start -->
				<!-- ================ -->
				<section id="section-6" class="section pv-40 stats padding-bottom-clear dark-bg hovered" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 text-center col-md-offset-2 pv-20">
								<h2 class="text-center">Contactez-nous!</h2>
								<div class="separator"></div>
								<p class="lead text-center">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
								<ul class="list-inline mb-20 text-center">
									<li><i class="text-default fa fa-map-marker pr-5"></i>12, Avenue Moderne</li>
									<li><a href="tel: 00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+33 843 45 67</a></li>
									<li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@wutalma.com</a></li>
								</ul>
								<div class="separator"></div>
								<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
				<!-- section end -->
			</div>
			
			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="subfooter-inner">
						<div class="row">
							<div class="col-md-12">
								<p class="text-center">Copyright © 2019 The Project by <a target="_blank" href="http://htmlcoder.me">Revovision Sénégal</a>. All Rights Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="plugins/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>
		<!-- Fullpage javascript -->
		<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script type="text/javascript" src="plugins/fullpage/jquery.fullpage.js"></script>
		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="plugins/jquery.validate.js"></script>
		<!-- Background Video -->
		<script src="plugins/vide/jquery.vide.js"></script>
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="plugins/SmoothScroll.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>

<!-- banner start -->
			<!-- ================ -->
			<div class="banner dark-translucent-bg" style="background-image:url('/wutalma/img/back_home1.jpg');background-position:50% 0;">
				<!-- breadcrumb start -->
				<!-- ================ -->
				<div class="breadcrumb-container">
					<div class="container">
						<ol class="breadcrumb">
							<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Home</a></li>
							<li class="active"><?php echo __('Profil de '.$user['User']['prenom'].' '.$user['User']['nom']); ?></li>
						</ol>
					</div>
				</div>
				<!-- breadcrumb end -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center col-md-offset-2 pv-20">
							<h1 class="title" data-animation-effect="fadeIn" data-effect-delay="100"><?php echo __('Profil de '.$user['User']['prenom'].' '.$user['User']['nom']); ?></h1>
							
						</div>
					</div>
				</div>
			</div>
			<!-- banner end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title end -->
							<div class="row">
								<div class="col-sm-4">
									<div class="image-box team-member shadow mb-20">
										<div class="overlay-container overlay-visible">
											
											<?php echo $this->Html->image($user['User']['photo_profil'],
												array(
													'class' => 'img-responsive'
												)
											); ?>
											<a href="images/team-member-3.jpg" class="popup-img overlay-link" title="Jane Doe - CEO"><i class="icon-plus-1"></i></a>
											<div class="overlay-bottom">
												<div class="text">
													<h3 class="title margin-clear">Jane Doe</h3>
													<p class="margin-clear">CTO</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-5">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nam, vitae autem quis, deserunt pariatur! At, atque inventore.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam esse laudantium maiores aperiam illo fugit laboriosam velit repellendus quod cumque ea vero vitae quo enim fugiat itaque harum assumenda aut quis, dolore. Sit reiciendis eligendi, recusandae eaque est optio reprehenderit!</p>
									<div class="progress style-2 dark">
										<span class="text"></span>
										<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
											<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">CSS</span>
										</div>
									</div>
									<div class="progress style-2 dark">
										<span class="text"></span>
										<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="85%">
											<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">HTML5</span>
										</div>
									</div>
									<div class="progress style-2 dark">
										<span class="text"></span>
										<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
											<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Design</span>
										</div>
									</div>
									<div class="progress style-2 dark">
										<span class="text"></span>
										<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="80%">
											<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">PHP</span>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-lg-offset-1">
									<h3 class="title">Contact Me</h3>
									<ul class="list-icons">
										<li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
										<li><i class="fa fa-mobile pr-10 text-default"></i> +00 1234567890</li>
										<li><a href="mailto:info@janedoe.com"><i class="fa fa-envelope-o pr-10"></i>info@janedoe.com</a></li>
									</ul>
									<h3>Follow Me</h3>
									<div class="separator-2"></div>
									<a target="_blank" href="https://www.linkedin.com" class="btn btn-animated linkedin btn-sm">Linkedin<i class="pl-10 fa fa-linkedin"></i></a>
									<a target="_blank" href="https://www.xing.com/" class="btn btn-animated xing btn-sm">Xing<i class="fa fa-xing"></i></a>
									<h3>See My Portfolio</h3>
									<a class="btn btn-gray collapsed btn-animated" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">Click Me <i class="fa fa-plus"></i></a>
								</div>
							</div>

						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section id="collapseContent" class="collapse pv-20 light-gray-bg clearfix">
				<div class="container">
					<h3>Services offerts</strong></h3>
					<div class="separator-2 mb-20"></div>
					<?php foreach ($user['Service'] as $service): ?>
					<div class="image-box style-3-b">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<div class="overlay-container">
									<img src="images/portfolio-1.jpg" alt="">
									
								</div>
							</div>
							<div class="col-sm-6 col-md-9">
								<div class="body">
									<h3 class="title"><?php echo $service['SubCategory']['nom']; ?></h3>
									<p class="small mb-10"><i class="icon-calendar"></i> <?php echo $service['created']; ?> <i class="pl-10 icon-tag-1"></i> Entre <?php echo h($service['prix_depart']); ?> FCFA et <?php echo h($service['prix_fin']); ?> FCFA</p>
									<div class="separator-2"></div>
									<p class="mb-10"><?php echo $service['description']; ?></p>
									<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>

				</div>
			</section>
			<!-- section end -->
			
			<!-- footer top start -->
			<!-- ================ -->
			<div class="dark-bg  default-hovered footer-top animated-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8">
										<h2><?php echo __('Contacter '.$user['User']['prenom'].' '.$user['User']['nom']); ?></h2>
										<h2>Sur et efficace</h2>
									</div>
									<div class="col-sm-4">
										<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent ">Contacter<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer top end -->
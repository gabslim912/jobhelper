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
							<div class="overlay-container overlay-visible" style="width: 360px; height: 360px;">
								
								<?php echo $this->Html->image($user['User']['photo_profil'],
									array(
										'class' => 'img-responsive'
									)
								); ?>
								<a href="images/team-member-3.jpg" class="popup-img overlay-link" title="Jane Doe - CEO"><i class="icon-plus-1"></i></a>
								<div class="overlay-bottom">
									<div class="text">
										<h3 class="title margin-clear"><?php echo $user['User']['prenom'].' '.$user['User']['nom'] ?></h3>
										<p class="margin-clear"><?php echo $user['User']['age']; ?> ans</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-5">
						<h3 class="title">Description</h3>
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nam, vitae autem quis, deserunt pariatur! At, atque inventore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam esse laudantium maiores aperiam illo fugit laboriosam velit repellendus quod cumque ea vero vitae quo enim fugiat itaque harum assumenda aut quis, dolore. Sit reiciendis eligendi, recusandae eaque est optio reprehenderit!</p>
						<!--<div class="progress style-2 dark">
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
						</div>-->
						<ul class="list-icons">
							<li><i class="fa fa-map-marker pr-10 text-default"></i> <?php echo h($user['User']['adresse_complement']); ?></li>
							
							<li><i class="icon-map"></i> <?php echo h($user['User']['quartier'].', '.$user['User']['region'].', '.$user['User']['pays']); ?></li>
							
							
						</ul>
						
					</div>
					<div class="col-sm-3 col-lg-offset-1">
						<h3 class="title">Mes Contacts</h3>
						<ul class="list-icons">
							<li><i class="fa fa-phone pr-10 text-default"></i> <?php echo h($user['User']['tel']); ?></li>
							<li><i class="fa fa-mobile pr-10 text-default"></i> <?php echo h($user['User']['tel_secondaire']); ?></li>
							<li><a href="mailto:<?php echo h($user['User']['email']); ?>"><i class="fa fa-envelope-o pr-10"></i><?php echo h($user['User']['email']); ?></a></li>
						</ul>
						<h3>Réseaux Sociaux</h3>
						<div class="separator-2"></div>
						<?php if ($user['User']['linked_in']): ?>
							<a target="_blank" href="<?php echo h($user['User']['linked_in']); ?>" class="btn btn-animated linkedin btn-sm">Linkedin<i class="pl-10 fa fa-linkedin"></i></a>
						<?php endif ?>
						
						<?php if ($user['User']['facebook']): ?>
						<a target="_blank" href="<?php echo h($user['User']['facebook']); ?>" class="btn btn-animated facebook btn-sm">Facebook<i class="fa fa-facebook"></i></a>
						<?php endif ?>
						<h3>Détails de l'entreprise</h3>
						<div class="separator-2"></div>
						<?php if ($user['User']['nom_societe']): ?>
							<h5><i class="pl-10 fa fa-building"></i> Nom: <?php echo h($user['User']['nom_societe']); ?></h5>
						<?php endif ?>
						
						<?php if ($user['User']['ninea_societe']): ?>
							<h5><i class="pl-10 fa fa-building"></i> Ninea: <?php echo h($user['User']['ninea_societe']); ?></h5>
						<?php endif ?>
						<!--<h3>Voir mes serv
						<!--<h3>Voir mes services</h3>
						<a class="btn btn-gray collapsed btn-animated" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">Cliquez ici <i class="fa fa-plus"></i></a>-->
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
<section id="collapseContent" class="collapse pv-20 default-bg clearfix">
	<div class="container">
		<h3>Services offerts</strong></h3>

		<div class="separator-2 mb-20"></div>
		<?php foreach ($user['Service'] as $service): ?>
			
		<div class="image-box style-3-b">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="overlay-container">
						<?php echo $this->Html->image($service['SubCategory']['image'],
									array(
										'class' => 'img-responsive'
									)
								); ?>
						
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


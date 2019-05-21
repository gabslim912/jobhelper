<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a href="/">Accueil</a></li>
			<li class="active">Mes Services</li>
		</ol>
	</div>
</div>
<section class="main-container padding-bottom-clear">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">
				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title text-center">Mes <strong>Services</strong></h1>
				<div class="separator"></div>
				<br>
				<!-- page-title end -->
				<?php foreach ($user['Service'] as $service): ?>
				<div class="image-box style-3 mb-20 dark-bg">
					<div class="row grid-space-0">
						<div class="col-md-6">
							<div class="overlay-container">
								<?php echo $this->Html->image($service['SubCategory']['image'],
									array(
										'class' => 'img-responsive'
									)
								); ?>
								<div class="overlay-to-top">
									<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="body">
								<div class="pv-30 visible-lg"></div>
								<h1 style="color: black; font-weight: bold;"><?php echo $service['SubCategory']['nom']; ?></h1>
								<p class="small mb-10"><i class="icon-calendar"></i> <?php echo $service['created']; ?><i class="pl-10 icon-tag-1"></i>Entre <?php echo h($service['prix_depart']); ?> FCFA et <?php echo h($service['prix_fin']); ?> FCFA</p>
								<div class="separator-2"></div>
								<p class="margin-clear">Description: <?php echo $service['description']; ?></p>
								<p>Categorie: <?php echo $service['SubCategory']['Category']['nom']; ?></p>
								<br>
								
								<?php echo $this->Html->link(__('Modifier&nbsp&nbsp;<span class="glyphicon glyphicon-edit"></span>'), array('controller' =>'services','action' => 'edit', $service['id']), array('class' => 'btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear', 'escape' => false)); ?> 
								<?php echo $this->Form->postLink(__('Supprimer&nbsp;&nbsp;<span class="glyphicon glyphicon-remove"></span>'), array('controller' =>'services','action' => 'delete', $service['id']), array('class' => 'btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear', 'escape' => false), __('Etes vous sure de vouloir supprimer # %s?', $service['id'])); ?>

							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<!-- main end -->

		</div>
	</div>
</section>

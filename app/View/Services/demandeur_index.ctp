<div class="container">
	<div class="services index">

	



	<div class="row">

		<!-- ================ -->
		<br><br>
		<h1 class="page-title text-center">Rechercher <strong>une offre</strong></h1>
		<div class="separator"></div>
		<br>
		<div>
			<div class="block clearfix">
				<form role="search">
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Tapez votre recherche ici...">
						<i class="fa fa-search form-control-feedback"></i>
					</div>
				</form>
			</div>	
		</div>
		<div class="row">
			<?php foreach ($services as $service): ?>
			<div class="col-sm-6 col-md-3">
				<div class="image-box style-2 mb-20 bordered light-grey-bg">
					<div class="overlay-container overlay-visible" style="width: 268px; height: 268px;">
						<?php echo $this->Html->image($service['User']['photo_profil'],
									array(
										'class' => 'img-responsive',
									)
								); ?>
						<a href="portfolio-item.html" class="overlay-link"><i class="fa fa-link"></i></a>										
					</div>
					<div class="body">
						<h3><?php echo h($service['User']['prenom'].' '.$service['User']['nom']); ?></h3>
						<div class="separator-2"></div>
						<p class="small mb-10"><i class="icon-calendar"></i> <?php echo h($service['Service']['created']); ?> <i class="pl-10 icon-tag-1"></i> <?php echo h($service['SubCategory']['nom']); ?></p>
						<p> <i class="pl-10 map-marker"></i> <?php echo h($service['User']['quartier'].', '.$service['User']['region']); ?></p>
						
						<a href="#" class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Voir plus<i class="fa fa-arrow-right pl-10"></i></a>
					</div>
				</div>
			</div>
		
		<?php endforeach; ?>
	</div>
		
				
			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->
</div>
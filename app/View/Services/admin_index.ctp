<div class="services index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Liste de tous les services disponibles'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Liens utiles</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Ajout d\'un service'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Toutes les sous-categories'), array('controller' => 'sub_categories', 'action' => 'index'), array('escape' => false)); ?> </li>
								
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Ajout d\'une categorie'), array('controller' => 'categories', 'action' => 'add'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Ajout d\'une sous-categorie'), array('controller' => 'sub_categories', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('Utilisateur'); ?></th>
						<th><?php echo $this->Paginator->sort('Sous-catégorie'); ?></th>
						
						<th><?php echo $this->Paginator->sort('quartier'); ?></th>
						
						<th><?php echo $this->Paginator->sort('Validation'); ?></th>
						<th><?php echo $this->Paginator->sort('Date de création'); ?></th>
						
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($services as $service): ?>
					<tr>
						<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($service['User']['email'], array('controller' => 'users', 'action' => 'view', $service['User']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($service['SubCategory']['nom'], array('controller' => 'sub_categories', 'action' => 'view', $service['SubCategory']['id'])); ?>
		</td>
						
						<td><?php echo h($service['User']['quartier']); ?>&nbsp;</td>
						
						<td><?php echo h($service['Service']['completed']); ?>&nbsp;</td>
						<td><?php echo h($service['Service']['created']); ?>&nbsp;</td>
						
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $service['Service']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $service['Service']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $service['Service']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $service['Service']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

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
<div class="subCategories view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Sous-catégorie '.$subCategory['SubCategory']['nom']); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Modifier'), array('action' => 'edit', $subCategory['SubCategory']['id']), array('escape' => false)); ?> </li>
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Supprimer'), array('action' => 'delete', $subCategory['SubCategory']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $subCategory['SubCategory']['id'])); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Lister tout'), array('action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;Ajouter'), array('action' => 'add'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Categories'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li>
								
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				
				<tr>
						<th><?php echo __('Nom de la sous-catégorie'); ?></th>
						<td>
							<?php echo h($subCategory['SubCategory']['nom']); ?>
							&nbsp;
						</td>
				</tr>
				<tr>
						<th><?php echo __('Categorie correspondante'); ?></th>
						<td>
							<?php echo $this->Html->link($subCategory['Category']['nom'], array('controller' => 'categories', 'action' => 'view', $subCategory['Category']['id'])); ?>
							&nbsp;
						</td>
				</tr>
				<tr>
						<th><?php echo __('Image'); ?></th>
						<td style="width: 35px; height: 35px;">
							<?php echo $this->Html->image($subCategory['SubCategory']['image'],
									array(
										'class' => 'img-responsive'
									)
								); ?>
							&nbsp;
						</td>
						
				</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Services correspondants'); ?></h3>
	<?php if (!empty($subCategory['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		
		<th><?php echo __('Utilisateur'); ?></th>
		
		<th><?php echo __('Region'); ?></th>
		<th><?php echo __('Quartier'); ?></th>
		
		<th><?php echo __('Prix Depart'); ?></th>
		<th><?php echo __('Prix Fin'); ?></th>
		<th><?php echo __('Validation'); ?></th>
		<th><?php echo __('Créé le'); ?></th>
		
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($subCategory['Service'] as $service): ?>
		<tr>
			
			<td><?php echo $service['User']['prenom'].' '.$service['User']['nom']; ?></td>
			
			<td><?php echo $service['User']['region']; ?></td>
			<td><?php echo $service['User']['quartier']; ?></td>
			
			<td><?php echo $service['prix_depart']; ?></td>
			<td><?php echo $service['prix_fin']; ?></td>
			<td><?php echo $service['completed']; ?></td>
			<td><?php echo $service['created']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'services', 'action' => 'view', $service['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'services', 'action' => 'edit', $service['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'services', 'action' => 'delete', $service['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $service['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Service'), array('controller' => 'services', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>

<div class="services view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Service offert par '.$service['User']['prenom'].' '.$service['User']['nom']); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Liens rapides</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Tous les services'), array('action' => 'index'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Tous les utilisateurs'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
								
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Ajout d\'une categorie'), array('controller' => 'categories', 'action' => 'add'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Ajout d\'une sous-categorie'), array('controller' => 'sub_categories', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($service['Service']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Utilisateur'); ?></th>
		<td>
			<?php echo $this->Html->link($service['User']['email'], array('controller' => 'users', 'action' => 'view', $service['User']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Type de service'); ?></th>
		<td>
			<?php echo $this->Html->link($service['SubCategory']['nom'], array('controller' => 'sub_categories', 'action' => 'view', $service['SubCategory']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pays'); ?></th>
		<td>
			<?php echo h($service['User']['pays']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Region'); ?></th>
		<td>
			<?php echo h($service['User']['region']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quartier'); ?></th>
		<td>
			<?php echo h($service['User']['quartier']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Adresse Complement'); ?></th>
		<td>
			<?php echo h($service['User']['adresse_complement']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rémunération/Budget'); ?></th>
		<td>
			Entre <?php echo h($service['Service']['prix_depart']); ?> FCFA et <?php echo h($service['Service']['prix_fin']); ?> FCFA
			
		</td>
</tr>

<tr>
		<th><?php echo __('Validité'); ?></th>
		<td>
			<?php echo h($service['Service']['completed']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($service['Service']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($service['Service']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>


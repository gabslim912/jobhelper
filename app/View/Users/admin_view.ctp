<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Profil de '.$user['User']['prenom'].' '.$user['User']['nom']); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Liens Rapides</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Modifier l\'utilisateur'), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?> </li>
									<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Supprimer l\'utilisateur'), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Tous les Utilisateurs'), array('action' => 'index'), array('escape' => false)); ?> </li>
									
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<!-- <tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>-->
<tr>
		<th><?php echo __('Numéro d\'Identification National'); ?></th>
		<td>
			<?php echo h($user['User']['nin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Civilité'); ?></th>
		<td>
			<?php echo h($user['User']['civilite']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Prenom'); ?></th>
		<td>
			<?php echo h($user['User']['prenom']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nom'); ?></th>
		<td>
			<?php echo h($user['User']['nom']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mot De Passe'); ?></th>
		<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo Portrait'); ?></th>
		<td style="width: 35px; height: 35px;">
			<?php echo $this->Html->image($user['User']['photo_profil'],
					array(
						'class' => 'img-responsive'
					)
				); ?>
			&nbsp;
		</td>
		
</tr>
<tr>
		<th><?php echo __('Photo Plein Pied'); ?></th>
		<td  style="width: 35px; height: 35px;">
			<?php echo $this->Html->image($user['User']['photo_complete'],
					array(
						'class' => 'img-responsive'
					)
				); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rôle'); ?></th>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Âge'); ?></th>
		<td>
			<?php echo h($user['User']['age']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pays'); ?></th>
		<td>
			<?php echo h($user['User']['pays']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Région'); ?></th>
		<td>
			<?php echo h($user['User']['region']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quartier'); ?></th>
		<td>
			<?php echo h($user['User']['quartier']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Complément d\'adresse'); ?></th>
		<td>
			<?php echo h($user['User']['adresse_complement']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numéro de Téléphone Principal'); ?></th>
		<td>
			<?php echo h($user['User']['tel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Numéro de Téléphone Secondaire'); ?></th>
		<td>
			<?php echo h($user['User']['tel_secondaire']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Lien du Profil Facebook'); ?></th>
		<td>
			<?php echo h($user['User']['facebook']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lien du Profil Linked In'); ?></th>
		<td>
			<?php echo h($user['User']['linked_in']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nom de la Société'); ?></th>
		<td>
			<?php echo h($user['User']['nom_societe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ninea de la Société'); ?></th>
		<td>
			<?php echo h($user['User']['ninea_societe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Date de création'); ?></th>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dernière modification'); ?></th>
		<td>
			<?php echo h($user['User']['modified']); ?>
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
	<h3><?php echo __('Services de '.$user['User']['prenom'].' '.$user['User']['nom']); ?></h3>
	<?php if (!empty($user['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		
		
		<th><?php echo __('Type de service'); ?></th>
		
		
		<th><?php echo __('Activation'); ?></th>
		<th><?php echo __('Date de Création'); ?></th>
		
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($user['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			
			
			<td><?php echo $service['sub_category_id']; ?></td>
	
			
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

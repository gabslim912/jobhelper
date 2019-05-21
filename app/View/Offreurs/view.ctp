<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('User'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit User'), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete User'), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Services'), array('controller' => 'services', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Service'), array('controller' => 'services', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nin'); ?></th>
		<td>
			<?php echo h($user['User']['nin']); ?>
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
		<th><?php echo __('Role'); ?></th>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Civilite'); ?></th>
		<td>
			<?php echo h($user['User']['civilite']); ?>
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
		<th><?php echo __('Prenom'); ?></th>
		<td>
			<?php echo h($user['User']['prenom']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Age'); ?></th>
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
		<th><?php echo __('Region'); ?></th>
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
		<th><?php echo __('Adresse Complement'); ?></th>
		<td>
			<?php echo h($user['User']['adresse_complement']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tel'); ?></th>
		<td>
			<?php echo h($user['User']['tel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tel Secondaire'); ?></th>
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
		<th><?php echo __('Photo Profil'); ?></th>
		<td>
			<?php echo h($user['User']['photo_profil']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo Complete'); ?></th>
		<td>
			<?php echo h($user['User']['photo_complete']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Facebook'); ?></th>
		<td>
			<?php echo h($user['User']['facebook']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Linked In'); ?></th>
		<td>
			<?php echo h($user['User']['linked_in']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nom Societe'); ?></th>
		<td>
			<?php echo h($user['User']['nom_societe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ninea Societe'); ?></th>
		<td>
			<?php echo h($user['User']['ninea_societe']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
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
	<h3><?php echo __('Related Services'); ?></h3>
	<?php if (!empty($user['Service'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Sub Category Id'); ?></th>
		<th><?php echo __('Pays'); ?></th>
		<th><?php echo __('Region'); ?></th>
		<th><?php echo __('Quartier'); ?></th>
		
		<th><?php echo __('Completed'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($user['Service'] as $service): ?>
		<tr>
			<td><?php echo $service['id']; ?></td>
			
			<td><?php echo $service['user_id']; ?></td>
			<td><?php echo $service['sub_category_id']; ?></td>
			<td><?php echo $service['pays']; ?></td>
			<td><?php echo $service['region']; ?></td>
			<td><?php echo $service['quartier']; ?></td>
			
			<td><?php echo $service['completed']; ?></td>
			<td><?php echo $service['created']; ?></td>
			<td><?php echo $service['modified']; ?></td>
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

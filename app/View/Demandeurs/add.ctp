<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add User'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Services'), array('controller' => 'services', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Service'), array('controller' => 'services', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('nin', array('class' => 'form-control', 'placeholder' => 'Nin'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Mot De Passe'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('role', array('class' => 'form-control', 'placeholder' => 'Role'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('civilite', array('class' => 'form-control', 'placeholder' => 'Civilite'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nom', array('class' => 'form-control', 'placeholder' => 'Nom'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('prenom', array('class' => 'form-control', 'placeholder' => 'Prenom'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('age', array('class' => 'form-control', 'placeholder' => 'Age'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pays', array('class' => 'form-control', 'placeholder' => 'Pays'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('region', array('class' => 'form-control', 'placeholder' => 'Region'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('quartier', array('class' => 'form-control', 'placeholder' => 'Quartier'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('adresse_complement', array('class' => 'form-control', 'placeholder' => 'Adresse Complement'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel', array('class' => 'form-control', 'placeholder' => 'Tel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel_secondaire', array('class' => 'form-control', 'placeholder' => 'Tel Secondaire'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo_profil', array('class' => 'form-control', 'placeholder' => 'Photo Profil'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo_complete', array('class' => 'form-control', 'placeholder' => 'Photo Complete'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('facebook', array('class' => 'form-control', 'placeholder' => 'Facebook'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('linked_in', array('class' => 'form-control', 'placeholder' => 'Linked In'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nom_societe', array('class' => 'form-control', 'placeholder' => 'Nom Societe'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ninea_societe', array('class' => 'form-control', 'placeholder' => 'Ninea Societe'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

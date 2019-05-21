<div class="services form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1 ><?php echo __('Ajout du service'); ?></h1>
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
			<?php echo $this->Form->create('Service', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
				</div>
				<!--<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>-->
				<div class="form-group">
					<?php echo $this->Form->input('sub_category_id', array('class' => 'form-control', 'placeholder' => 'Sub Category Id', 'label' => 'Type de service'));?>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<h5>Rémunération</h5>
					</div>
					<div class="col-lg-8 col-lg-offset-1">
						<div class="form-group">
							<label for="billingFirstName" class="col-lg-1 control-label">Entre </label>
							<div class="col-lg-3">
								<?php echo $this->Form->input('prix_depart', array('class' => 'form-control','label' => false,'placeholder' => 'valeur'));?>
							</div>
							<label for="billingFirstName" class="col-lg-2 control-label"> FCFA et </label>
							<div class="col-lg-3">
								<?php echo $this->Form->input('prix_fin', array('class' => 'form-control','label' => false, 'placeholder' => 'valeur'));?>
							</div>
							<label for="billingFirstName" class="col-lg-1 control-label">FCFA</label>
							
						</div>
						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-3">
						<h5>Disponibilité</h5>
					</div>
					<div class="col-lg-9">
						<div class="form-group">
							
							<div class="col-lg-2">
								<?php 
								$jours = array('Lundi' => 'Lundi', 'Mardi' => 'Mardi', 'Mercredi' => 'Mercredi', 'Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi', 'Samedi' => 'Samedi', 'Dimanche' => 'Dimanche');
								echo $this->Form->input('jour_depart', array('class' => 'form-control','label' => false,'options' => $jours, 'default'=>'Lundi'));?>
							</div>
							<label for="billingFirstName" class="col-lg-1 control-label"> 			au </label>
							<div class="col-lg-2">
								<?php 
								$days = array('Lundi' => 'Lundi', 'Mardi' => 'Mardi', 'Mercredi' => 'Mercredi', 'Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi', 'Samedi' => 'Samedi', 'Dimanche' => 'Dimanche');
								echo $this->Form->input('jour_fin', array('class' => 'form-control','label' => false,'options' => $days, 'default'=>'Mardi'));?>
							</div>
							<label for="billingFirstName" class="col-lg-1 control-label">, de </label>
							<div class="col-lg-2">
								<?php echo $this->Form->input('heure_depart', array('class' => 'form-control','label' => false));?>
							</div>
							<label for="billingFirstName" class="col-lg-1 control-label">H à</label>
							<div class="col-lg-2">
								<?php echo $this->Form->input('heure_fin', array('class' => 'form-control','label' => false));?>
							</div>
							<label for="billingFirstName" class="col-lg-1 control-label">H</label>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('completed', array( 'type' => 'checkbox' , 'label' => 'Cochez cette case pour rendre le service disponible'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

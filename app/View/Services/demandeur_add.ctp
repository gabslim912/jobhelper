
<div class="breadcrumb-container">
<div class="container">
	<ol class="breadcrumb">
		<li><i class="fa fa-home pr-10"></i><a href="/">Accueil</a></li>
		<li class="active">Ajouter un service</li>
	</ol>
</div>
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">

				<!-- page-title start -->
				<!-- ================ --
				<h1 class="page-title">Checkout</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->

				
				
				<?php echo $this->Form->create('Service', array('role' => 'form','class' => 'form-horizontal')); ?>
				<fieldset>
					<legend>Informations</legend>
					
					
						<div class="row">
							<div class="col-lg-3">
								<h3 class="title">Type de service</h3>
							</div>
							<div class="col-lg-8 col-lg-offset-1">
								<div class="form-group">
									<label for="billingFirstName" class="col-md-2 control-label">Sélectionnez<small class="text-default">*</small></label>
									<div class="col-md-10">
										<?php echo $this->Form->input('sub_category_id', array('class' => 'form-control', 'placeholder' => 'Sub Category Id', 'label' => false));?>
									</div>
								</div>
								
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5">
								<h3 class="title">Rémunération</h3>
							</div>
							<div class="col-lg-6 col-lg-offset-1">
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
						<div class="row">
							<div class="col-lg-5">
								<h3 class="title">Disponibilité</h3>
							</div>
							<div class="col-lg-7">
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
						
						<div class="space"></div>
						<div class="row">
							<div class="col-lg-3">
								<h3 class="title">Description du service</h3>
							</div>
							<div class="col-lg-8 col-lg-offset-1">
								<div class="form-group">
									<div class="col-md-12">
										
										<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Entrez une petite description du service que vous offrez...', 'label' => false));?>
				
										
									</div>
								</div>
							</div>
						</div>
						

						
				</fieldset>
				<fieldset>
					<legend>Validation</legend>
					<div class="checkbox padding-top-clear">
					<label>
						<?php echo $this->Form->input('completed', array( 'type' => 'checkbox' , 'label' => false));?> Cochez cette case pour rendre le service disponible
					</label>
				</div>
				</fieldset>
				<div class="text-right">	
					<?php echo $this->Form->submit(__('Ajouter maintenant'), array('class' => 'btn btn-group btn-default')); ?>
					
				</div>
				<?php echo $this->Form->end() ?>
			</div>
			<!-- main end -->

		</div>
	</div>
</section>

</div>

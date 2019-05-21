<div class=" text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
	<!-- logo -->
	<div id="logo" class="logo">
		<h3 class="margin-clear"><a href="/wutalma" class="link-light">RETOUR À L'ACCUEIL<span class="text-default"></span></a></h3>
	</div>
	<!-- name-and-slogan -->
	<p class="small">Trouvez un service n'a jamais été aussi facile !</p>
	<div class="form-block center-block p-30 default-bg border-clear text-left">
		<h2 class="title">INSCRIPTION</h2>
		
		<?php echo $this->Form->create('User', array('role' => 'form', 'type' => 'file', 'class' => 'form-horizontal')); ?>
			<div class="form-group has-feedback">
				<label for="inputName" class="col-sm-3 control-label">N.I.N <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					
					<?php echo $this->Form->input('nin', array('class' => 'form-control', 'id' =>'inputName', 'placeholder' => 'Entrez la valeur figurant sur votre carte d\'identité (12 chiffres)', 'label' => false));?>
					<i class="fa fa-user form-control-feedback"></i>
				</div>
			</div>
			
			<div class="form-group has-feedback">
				<label for="inputPassw" class="col-sm-3 control-label">Mot de passe <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'inputPassw', 'placeholder' => 'Entrez le mot de passe', 'label' =>false));?>
					<i class="fa fa-key form-control-feedback"></i>
					<input type="checkbox" onclick="myFunction()"> Afficher le mot de passe
						<script type="text/javascript">
							function myFunction() {
							  var x = document.getElementById("inputPassw");
							  if (x.type === "password") {
							    x.type = "text";
							  } else {
							    x.type = "password";
							  }
							}
						</script>
				</div>

			</div>
			<div class="form-group has-feedback">
				<label for="inputUserName" class="col-sm-3 control-label">Rôle <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('role', array(
						'class' => 'form-control',
						'label' =>false,
					    'options' => array('offreur' => 'offreur', 'demandeur' => 'demandeur'),
					    'empty' => 'Choisissez ...'
					  )); ?>
					
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputEmail" class="col-sm-3 control-label">Civilité <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('civilite', array(
						'class' => 'form-control',
						'label' =>false,
					    'options' => array('Monsieur' => 'Monsieur', 'Madame' => 'Madame'),
					    'empty' => 'Choisissez ...'
					  )); ?>
					
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Prénoms <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('prenom', array('class' => 'form-control', 'placeholder' => 'Entrez l\'intégalité de vos prénoms', 'label' =>false));?>
					<i class="fa fa-user form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputEmail" class="col-sm-3 control-label">Nom <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('nom', array('class' => 'form-control', 'placeholder' => 'Entrez votre nom de famille', 'label' =>false));?>
					<i class="fa fa-user form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Âge <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('age', array('class' => 'form-control', 'placeholder' => 'Entrez votre âge exact', 'label' =>false));?>
					<i class="fa fa-user form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputEmail" class="col-sm-3 control-label">Pays <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('pays', array('class' => 'form-control', 'default' => 'Sénégal', 'label' =>false));?>
					<i class="fa fa-map-marker form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Région <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('region', array('class' => 'form-control', 'placeholder' => 'Entrez la Région (ex: Dakar)', 'label' =>false));?>
					<i class="fa fa-map-marker form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Quartier <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('quartier', array('class' => 'form-control', 'placeholder' => 'Entrez le Quartier (ex: Ouakam)','label' =>false));?>
					<i class="fa fa-map-marker form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Adresse <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('adresse_complement', array('class' => 'form-control', 'placeholder' => 'Ex: 12 Avenue Moderne Appt 99', 'label' =>false));?>
					<i class="fa fa-map-marker form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Téléphone 1 <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('tel', array('class' => 'form-control', 'placeholder' => 'Entrez votre numéro (ex:77 213 44 55)', 'label' =>false));?>
					<i class="fa fa-mobile-phone form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Téléphone 2 <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('tel_secondaire', array('class' => 'form-control', 'placeholder' => 'Entrez votre second numéro', 'label' =>false));?>
					<i class="fa fa-mobile-phone form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Email Principale <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Entrez votre email', 'label' =>false));?>
					<i class="fa fa-at form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Photo portrait <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('photo_profil', array('class' => 'form-control ', 'label' =>false, 'placeholder' => 'Photo de profil', 'type' => 'file',  'accept' => 'image/*'));?>
					<i class="fa fa-camera form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Photo plein-pied <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('photo_complete', array('class' => 'form-control ', 'label' =>false, 'placeholder' => 'Photo complete', 'type' => 'file',  'accept' => 'image/*'));?>
					<i class="fa fa-camera form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Profil Facebook <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('facebook', array('class' => 'form-control', 'placeholder' => 'Entrez le lien de votre profil Facebook (Optionnel)', 'label' =>false));?>
					<i class="fa fa-facebook form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Profil Linked-in <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('linked_in', array('class' => 'form-control', 'placeholder' => 'Entrez le lien de votre profil Linked In (Optionnel)', 'label' =>false));?>
					<i class="fa fa-linkedin form-control-feedback"></i>
				</div>
			</div>
			<a class="btn btn-gray map-show btn-animated" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">Remplir les deux champs ci-dessous seulement s'il s'agit d'une entreprise <i class="fa fa-plus"></i></a>
			<section id="collapse1">
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">Nom société <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('nom_societe', array('class' => 'form-control', 'placeholder' => 'Renseignez ce champ si vous possédez un société (Optionnel)', 'label' =>false));?>
					<i class="fa fa-building form-control-feedback"></i>
				</div>
			</div>
			<div class="form-group has-feedback">
				<label for="inputPassword" class="col-sm-3 control-label">NINEA société <span class="text-danger small">*</span></label>
				<div class="col-sm-8">
					<?php echo $this->Form->input('ninea_societe', array('class' => 'form-control', 'placeholder' => 'Renseignez ce champ si vous possédez un société (Optionnel)', 'label' =>false));?>
					<i class="fa fa-building form-control-feedback"></i>
				</div>
			</div>
			</section>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-8">
					<div class="checkbox">
						<label>
							<input type="checkbox" required> J'accepte les <a href="#">conditions générales</a> et la  <a href="#">police de confidentialité</a>
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-8">
					
					<?php echo $this->Form->submit('S\'inscrire maintenant', array('class' => 'btn btn-group btn-default')); ?>
				</div>
			</div>
		<?php echo $this->Form->end() ?>

		
	</div>
	<!-- .subfooter start -->
	<!-- ================ -->
	<p class="mt-20">Copyright © 2019 The Project by <a target="_blank" href="http://revovision.ca">REVOVISION</a>. All Rights Reserved</p>
	<!-- .subfooter end -->
</div>
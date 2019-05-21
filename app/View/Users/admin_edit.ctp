<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Modification de l\'utilisateur'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Liens utiles</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nouvel Utilisateur'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Tous les Services'), array('controller' => 'services', 'action' => 'index'), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nouveau Service'), array('controller' => 'services', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<?php echo $this->Form->create('User', array('role' => 'form', 'type' => 'file')); ?>
				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nin', array('class' => 'form-control', 'placeholder' => 'Entrez la valeur figurant sur votre carte d\'identité (12 chiffres)', 'label' =>'Numéro d\'Identification National'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control','id' => 'inputPassw', 'placeholder' => 'Entrez le mot de passe', 'label' =>'Mot De Passe'));?>
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
				
				<div class="form-group">
					<?php echo $this->Form->input('role', array(
						'class' => 'form-control',
						'label' =>'Rôle',
					    'options' => array('admin' => 'admin', 'offreur' => 'offreur', 'demandeur' => 'demandeur'),
					    'empty' => 'Choisissez ...'
					  )); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('civilite', array(
						'class' => 'form-control',
						'label' =>'Civilité',
					    'options' => array('Monsieur' => 'Monsieur', 'Madame' => 'Madame'),
					    'empty' => 'Choisissez ...'
					  )); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('prenom', array('class' => 'form-control', 'placeholder' => 'Entrez l\'intégalité de vos prénoms', 'label' =>'Prénom'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nom', array('class' => 'form-control', 'placeholder' => 'Entrez votre nom de famille', 'label' =>'Nom'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('age', array('class' => 'form-control', 'placeholder' => 'Entrez votre âge exact', 'label' =>'Âge'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pays', array('class' => 'form-control', 'default' => 'Sénégal'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('region', array('class' => 'form-control', 'placeholder' => 'Entrez la Région (ex: Dakar)', 'label' =>'Région'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('quartier', array('class' => 'form-control', 'placeholder' => 'Entrez le Quartier (ex: Ouakam)'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('adresse_complement', array('class' => 'form-control', 'placeholder' => 'Ex: 12 Avenue Moderne Appt 99', 'label' =>'Complément d\'adresse'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel', array('class' => 'form-control', 'placeholder' => 'Entrez votre numéro (ex:77 213 44 55)', 'label' =>'Téléphone Principale'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel_secondaire', array('class' => 'form-control', 'placeholder' => 'Entrez votre second numéro', 'label' =>'Téléphone Secondaire'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Entrez votre email', 'label' =>'Email Principale'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo_profil', array('class' => 'form-control ', 'label' =>'Photo de Profil', 'placeholder' => 'Photo de profil', 'type' => 'file',  'accept' => 'image/*'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo_complete', array('class' => 'form-control ', 'label' =>'Photo Complète (de la tête aux pieds)', 'placeholder' => 'Photo complete', 'type' => 'file',  'accept' => 'image/*'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('facebook', array('class' => 'form-control', 'placeholder' => 'Entrez le lien de votre profil Facebook (Optionnel)', 'label' =>'Profil Facebook'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('linked_in', array('class' => 'form-control', 'placeholder' => 'Entrez le lien de votre profil Linked In (Optionnel)', 'label' =>'Profil Linked-in'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nom_societe', array('class' => 'form-control', 'placeholder' => 'Renseignez ce champ si vous possédez un société (Optionnel)', 'label' =>'Nom de votre société'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ninea_societe', array('class' => 'form-control', 'placeholder' => 'Renseignez ce champ si vous possédez un société (Optionnel)', 'label' =>'NINEA de la société'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Envoyer'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>


<div class=" text-center" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
	<!-- logo -->
	<div id="logo" class="logo">
		<h3 class="margin-clear"><a href="#" class="logo-font link-light">WUTALMA<span class="text-default">APP</span></a></h3>
	</div>
	<!-- name-and-slogan -->
	<p class="small">Trouvez un service n'a jamais été aussi facile !</p>
	<div class="form-block center-block p-30 light-gray-bg border-clear">
		<h2 class="title text-left">Connexion</h2>
		
		<?php echo $this->Form->create('User', array('role' => 'form', 'class' => 'form-horizontal text-left')); ?>
			<fieldset>
				<div class="form-group has-feedback">
					
					<div class="col-sm-12">
						
						<?php echo $this->Form->input('email', array('label' => 'Nom d\' utilisateur', 'class' => 'form-control', 'id' => 'inputUserName', 'placeholder' => 'Nom d\' utilisateur'));?>
						

					</div>
				</div>
				<div class="form-group has-feedback">
				
					<div class="col-sm-12">
						<?php echo $this->Form->input('password', array('class' => 'form-control', 'id' => 'inputPassword', 'placeholder' => 'Mot de passe', 'label' => 'Mot de passe'));?>
						
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-4">
						<?php echo $this->Form->submit(__(' Se connecter'), array('class' => 'btn btn-group btn-default btn-animated')); ?> 
					</div>
				</div>
			</fieldset>
		<?php echo $this->Form->end(); ?>
		<p>Vous n'avez pas encore de compte? <a href="#">S'inscrire</a> maintenant.</p>
	</div>
</div>
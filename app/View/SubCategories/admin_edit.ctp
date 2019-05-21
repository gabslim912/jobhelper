<div class="subCategories form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Modification de la sous-catégorie'); ?></h1>
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

								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Supprimer'), array('action' => 'delete', $this->Form->value('SubCategory.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('SubCategory.id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Sous-catégories'), array('action' => 'index'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Categories'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li>
								
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('SubCategory', array('role' => 'form', 'type' => 'file')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nom', array('class' => 'form-control', 'placeholder' => 'Nom', 'label' => 'Nom de la sous-catégorie'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('category_id', array('class' => 'form-control', 'placeholder' => 'Category Id', 'label' => 'Catégorie correspondante'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('image', array('class' => 'form-control ', 'label' =>'Image Correspondante', 'placeholder' => 'image', 'type' => 'file',  'accept' => 'image/*'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Modifier'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

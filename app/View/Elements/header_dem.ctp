<!-- header-container start -->
<div class="header-container">
	
	<!-- header start -->
	<!-- classes:  -->
	<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
	<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
	<!-- "full-width": mandatory class for the full-width menu layout -->
	<!-- "centered": mandatory class for the centered logo layout -->
	<!-- ================ --> 
	<header class="header  fixed  full-width  clearfix">
		
					<!-- header-right start -->
					<!-- ================ -->
					<div class="header-right clearfix">
						
					<!-- main-navigation start -->
					<!-- classes: -->
					<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
					<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
					<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
					<!-- ================ -->
					<div class="main-navigation  animated with-dropdown-buttons">

						<!-- navbar start -->
						<!-- ================ -->
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">

								<!-- Toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									
									<!-- header-left start -->
									<!-- ================ -->
									<div class="header-left clearfix ">

										<!-- logo -->
										<div id="logo-mobile" class="logo" style="height: 26px"><?php echo $this->Html->link(
						                      $this->Html->image('/img/logo.png', 
						                        array(
						                          'class' => 'img-responsive',
						                          'height' => '26px',
						                          'alt' => 'Plateforme WUTALMA',
						                          'title' => 'Plateforme WUTALMA'
						                        )
						                      ), 
						                      '/',
						                      array(
						                        'escape' => false
						                      )
						                    ); ?>
						                  </div><br><br>

									</div>
									<!-- header-left end -->
									
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<!-- main-menu -->
									<ul class="nav navbar-nav navbar-right">

										<!-- mega-menu start -->
										<li class="mega-menu">
											<?php echo $this->Html->link(__('Mon profil'), array('controller' => 'users','action' => 'view', $this->Session->read('Auth.User.id'), 'demandeur' => true), array('escape' => false)); ?>
											
										</li>
										
										<!-- mega-menu start -->
										<li class="mega-menu">
											<?php echo $this->Html->link(__('Mes services'), array('controller' => 'users','action' => 'service', $this->Session->read('Auth.User.id'), 'demandeur' => true), array('escape' => false)); ?>
											
										</li>
										<li class="mega-menu">
											<?php echo $this->Html->link(__('Ajouter un service'), array('controller' => 'services','action' => 'add', $this->Session->read('Auth.User.id'), 'demandeur' => true), array('escape' => false)); ?>
											
										</li>
										<li class="mega-menu">
											<?php echo $this->Html->link(__('Rechercher un service'), array('controller' => 'services','action' => 'index', 'demandeur' => true), array('escape' => false)); ?>
											
										</li>
										<li class="mega-menu">
											<?php echo $this->Html->link(__('Déconnexion'), array('controller' => 'users','action' => 'logout','demandeur' => false), array('escape' => false)); ?>
											
										</li>

																							
									</ul>
									
									
									<!-- main-menu end -->
									
									<!-- header dropdown buttons --
									<div class="header-dropdown-buttons hidden-xs hidden-sm">
										<div class="btn-group dropdown">
											<?php echo $this->Html->link(__('Se déconnecter'), array('controller' => 'users', 'action' => 'logout', 'admin' => false), array('escape' => false, 'class' => "btn btn-default-transparent btn-sm btn-hvr hvr-rectangle-in")); ?>
											
										</div>
										
									</div>
									<!-- header dropdown buttons end-->
									
								</div>

							</div>
						</nav>
						<!-- navbar end -->

					</div>
					<!-- main-navigation end -->
					</div>
					<!-- header-right end -->
		
	</header>
	<!-- header end -->
</div>
<!-- header-container end -->
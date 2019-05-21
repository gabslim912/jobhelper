<!-- header-container start -->
      <div class="header-container">
        
        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top  colored">
          <div class="container">
            <div class="row">
              <div class="col-xs-3 col-sm-6 col-md-9">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                  
                  <ul class="list-inline hidden-sm hidden-xs">
                    
                    <li><i class="fa fa-phone pr-5 pl-10"></i>+77 664 74 32</li>
                    <li><i class="fa fa-envelope-o pr-5 pl-10"></i> info@wutalma.com</li>
                  </ul>
                </div>
                <!-- header-top-first end -->
              </div>
              <div class="col-xs-9 col-sm-6 col-md-3">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix">

                  <!-- header top dropdowns start -->
                  <!-- ================ -->
                  <div class="header-top-dropdown text-right">
                    <div class="btn-group">
                      <?php echo $this->Html->link(__('Se déconnecter'), array('controller' => 'users', 'action' => 'logout', 'admin' => false), array('escape' => false, 'class' => "btn btn-default btn-sm")); ?>
                      
                    </div>
                    
                  </div>
                  <!--  header top dropdowns end -->
                </div>
                <!-- header-top-second end -->
              </div>
            </div>
          </div>
        </div>
        <!-- header-top end -->
        
        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ --> 
        <header class="header centered fixed    clearfix">
          
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <!-- header-left start -->
                <!-- ================ -->
                <div class="header-left clearfix">

                  
                  <!-- <?php echo $this->Html->link(
                      $this->Html->image('/img/logo.png', 
                        array(
                          'class' => 'logo-image',
                          'alt' => 'Plateforme WUTALMA',
                          'title' => 'Plateforme WUTALMA'
                        )
                      ), 
                      '/',
                      array(
                        'escape' => false
                      )
                    ); ?> -->
                  <div id="" class="" style="height: 35px">
                    <a href="/">
                      <img src="/wutalma/img/logo.png" class="logo-image" alt="Plateforme WUTALMA" title="Plateforme WUTALMA" style="height: 50px;">
                    </a>
                    
                  </div>
                  
                  
                </div>
                <!-- header-left end -->

              </div>
              <div class="col-md-9">
          
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
                          
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                          <!-- main-menu -->
                          <ul class="nav navbar-nav ">

                            <!-- <li><?php echo $this->Html->link(__('Offreurs'), array('controller' => 'offreurs', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link(__('Demandeurs'), array('controller' => 'demandeurs', 'action' => 'index'), array('escape' => false)); ?></li>-->
                            <li><?php echo $this->Html->link(__('Utilisateurs'), array('controller' => 'users', 'action' => 'index','admin' => true), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link(__('Services'), array('controller' => 'services', 'action' => 'index', 'admin' => true), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link(__('Categories'), array('controller' => 'categories', 'action' => 'index','admin' => true), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link(__('Sous-Catégories'), array('controller' => 'sub_categories', 'action' => 'index','admin' => true), array('escape' => false)); ?></li>

                          
                           
                          </ul>
                         

                          
                          
                        </div>

                      </div>
                    </nav>
                    <!-- navbar end -->

                  </div>
                <!-- main-navigation end -->
                </div>
                <!-- header-right end -->
          
              </div>
            </div>
          </div>
          
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->
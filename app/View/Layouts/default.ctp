<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> WUTALMA - <?php echo $title_for_layout; ?> </title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="revovision.ca">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    
    <?php echo $this->Html->css(array(
        'http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic',
        'http://fonts.googleapis.com/css?family=Raleway:700,400,300',
        'http://fonts.googleapis.com/css?family=Pacifico',
        'http://fonts.googleapis.com/css?family=PT+Serif',
        '/bootstrap/css/bootstrap.css',
        '/bootstrap.min',
        '/fonts/font-awesome/css/font-awesome.css',       
        '/fonts/fontello/css/fontello.css',
        '/plugins/magnific-popup/magnific-popup.css',
        '/plugins/rs-plugin/css/settings.css',
        '/css/animations.css',
        '/plugins/owl-carousel/owl.carousel.css',
        '/plugins/owl-carousel/owl.transitions.css',
        '/plugins/hover/hover-min.css',
        '/css/style.css',
        '/css/skins/orange.css',
        '/css/custom.css',
        
        ($this->request->prefix == 'admin') ? '/assets/css/admin.css' : null,
      )
    ); ?>
    <?php echo $this->fetch("css"); ?>

   
  </head>



<!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class="no-trans front-page transparent-header  ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
    
    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
    
      
      <!-- Jumbotron -->
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->element('header'); ?>
      
        <div class="container">
          <?php echo $this->fetch("content"); ?>          
        </div>
      
      

      <div class="footer">
        <p>&copy; WUTALMA 2019</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?php echo $this->Html->script(array(
      '/bootstrap.min',
      '/plugins/jquery.min.js',
      '/bootstrap/js/bootstrap.min.js',
      '/js/bootstrap.min.js',
      '/plugins/modernizr.js',
      '/plugins/rs-plugin/js/jquery.themepunch.tools.min.js', 
      'https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=3.0',
      '/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
      '/plugins/isotope/isotope.pkgd.min.js',
      '/plugins/magnific-popup/jquery.magnific-popup.min.js',
      '/plugins/waypoints/jquery.waypoints.min.js',
      '/plugins/jquery.countTo.js',
      '/plugins/jquery.parallax-1.1.3.js',
      '/plugins/jquery.validate.js',
      '/plugins/vide/jquery.vide.js',
      '/plugins/owl-carousel/owl.carousel.js',
      '/plugins/jquery.browser.js',
      '/plugins/SmoothScroll.js',
      '/js/custom.js'
    )
  );
  echo $this->fetch('script'); 
  echo $this->fetch('scriptBottom');  
  ?>

    

  </body>
</html>

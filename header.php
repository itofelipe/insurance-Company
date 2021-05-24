<!DOCTYPE html>
<html>
<head>
	  <!-- CSS -->
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/fontawesome.css" rel="stylesheet">
  	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/brands.css" rel="stylesheet">
  	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/solid.css" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	  

	  <!-- JQUERY -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
		

	  <meta charset="UTF-8">	  
	  <meta name="description" content="Yamagishi Seguros, seguro para carro, casa, e saúde no japão.">
	  <meta name="keywords" content="seguro,carro,casa,saúde,pessoal,japão">
	  <meta name="author" content="Mantis Project">
	  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">


	  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>


	  <title>Yamagishi Seguros</title>


	  <script type="text/javascript">
		wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       false,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
	  </script>


	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>

<body>

	<header class="top-header bg-active" id="top-header-2">
	    <div class="container">
	        <div class="row">
	            <div class="top-header-social col-sm-7 fadeInLeft animated wow">
	                <div class="list-inline">
	                    <a target="_blank" href="tel:090-1032-7468"><i class="fas fa-phone"></i>090-1032-7468</a>
	                    <a target="_blank" href="https://api.whatsapp.com/send?phone=8109010327468&text=Olá%27%20quero%20saber%20mais%20sobre%20os%20planos%20de%20seguro"><i class="fab fa-whatsapp"></i>WHATSAPP</a>
	                </div>
	            </div>
	            <div class="col-sm-5">
	                <div class="top-social-media list-inline fadeInRight animated wow">
	                    <!--- The "More" dropdown menu item will be hidden on extra-small displays. --->
			            <div id="weglot_here"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
	<header>
		<!-- Second navbar for profile settings -->
		    <nav class="navbar navbar-inverse">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header col-sm-4">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4"> 
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand fadeInLeftBig animated wow" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png"></a>
		        </div>
		    
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse fadeInRight animated wow col-sm-8" id="navbar-collapse-4">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="/">HOME</a></li>
		            <li><a href="#produtos">PRODUTOS</a></li>
		            <li><a href="#atendimento">ATENDIMENTO</a></li>
		            <li><a href="#sobre">SOBRE</a></li>
		          </ul>
		        </div><!-- /.navbar-collapse -->
		      </div><!-- /.container -->
		    </nav><!-- /.navbar -->
		</div><!-- /.container-fluid -->
	</header>
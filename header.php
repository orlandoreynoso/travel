<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale = 1, maximum-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">		


    <script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/menu_jquery.js"></script>    
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/ie.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/tinynav.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.1.custom.min.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/custom.js?ver=1.15'></script>
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/analitycs.js'></script>		


<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />			

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	    <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55090c21315da8d3" async="async"></script -->


	<?php wp_head(); ?>
</head>

<body>

<div  id="page-wrap" class="backgroundmsts">

<header>  


  <div  class="cuadro1">



  <div id="logo"><a class="logo" href="<?php bloginfo('url'); ?>/"> </a></div>

   
   <!-- .............INICIA CUADRO BUSCAR................   -->
<div class="cuadro-buscador">
    <div class="buscador"><?php  get_search_form();  //  if (is_page(5)) {   dynamic_sidebar('busqueda-header');   }   ?></div>
    <div class="cuadro-redes">
        <p>Síguenos en:</p>
        <a class="linkopacity" href="https://www.facebook.com/pages/Travel-Zone/122124437856110"></a> 
    </div>
</div>

   </div>



</header>


 <!-- nav id="menu" -->    
<!-- nav id="nav" class=" " -->
<nav>
    <?php  showMenu(); // wp_page_menu('register_nav_menus'); ?> 
</nav>
  

<div class="todocontenido zerogrid">
			

		



	
<?php 

/*
Template Name: TravelZone
 */

 get_header();


?>


<div class="banner">
  <?php include (TEMPLATEPATH . '/libs/banner.php');   ?>
</div>

<!--  INICIA DIV DE ICONOS -->

<article class="iconos">
      <?php if (is_page(5)) {   dynamic_sidebar('acordion');   }   ?>      
      <?php // echo do_shortcode(dynamic_sidebar('acordion')); ?>
</article>
<!-- FINALIZA DIV DE ICONOS -->


<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->

  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>  

      <div style="clear: both"></div>  

<section id="block02">
<div style="clear: both"></div>
<div class="col-2-3">
 <div class="mapeo">
      <!-- Breadcrumb -->
      <?php the_breadcrumb(); ?>
      <!-- Fin Breadcrumb -->
 </div> 

  <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->

  <div class="contenido-cartelera">
  <?php include (TEMPLATEPATH . '/libs/contenido-home.php');  ?>
  </div>


</div>

<div class="col-1-5">
  <?php  include (TEMPLATEPATH . '/libs/lateral-home.php');  ?>
</div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

/*   if (is_page(7)) {*/
     get_footer();
/*   }*/

?>
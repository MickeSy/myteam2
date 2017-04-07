<?php 
//home kommer bara laddas på den sida som är markerad som home i wp
//på alla andra sidor kommer index.php att laddas
get_header();
?>

<div class="container">
  <div class="row">
    <div class = "col-md-10 offset-md-1">
    
      <h1> <?php single_cat_title(); ?></h1> <!--problme nu med flera h1, försvårar för skärmlösare och robotar-->

    <?php     
     if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <h2> <?php the_title(); ?> </h2>
   <!--title på a taggar när man håller över den kommer e liten ruta , hjälper också skärmläsare som omvandlar till punktskrift-->
    <?php
    if (has_post_thumbnail()){
      the_post_thumbnail();
      //så när vi tittar på många inlägg får vi defayult-värdet, 150x150.
      //här styr vi över vilken storlke bilden ska ha. UNdvik hårdkodade värden.
       } 
    ?>
    <div class="post-meta">
        Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
      </div>
    <div class="the-content">
    <?php
            the_excerpt();
        ?>
        </div>
        <hr/>
        <?php
        endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
    ?>


</div>
  
</div>
  
   <?php
    get_footer();


//stöd för widgets, vi måste registrera en eller flera widgetareas,. Här ska vi skriva ut de widgetar som användarn vill ha 
?>
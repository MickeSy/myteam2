<?php 

  get_header();
?>

<div class="container">
    <div class="row">
        <div class = "col-md-10 offset-md-1">
    
            <h1> <?php single_cat_title(); ?></h1> 

            <?php     
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
        
            <h2> <?php the_title(); ?> </h2>
        
            <?php
                if (has_post_thumbnail()){
                    the_post_thumbnail();
                } 
            ?>
    
            <div class="post-meta">
                Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
            </div>
    
            <?php
                the_excerpt();
            ?>
        
            <hr/>
        
            <?php
                endwhile;
                else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
             ?>
        </div>
    </div>
</div>



<?php
    get_footer();
?>
	

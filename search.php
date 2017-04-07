<?php 
      get_header();
?>


<div class="container">
      <div class="row">
          <div class = "col-md-10 offset-md-1">
                <h1> <?php single_cat_title(); ?></h1> 
                
                <?php     
                    if (have_posts()) : while (have_posts()) : the_post();        //writing the loop, ternary style, same, same, woohhho
                ?>
                <h2> <?php the_title(); ?> </h2>
                
                <?php
                    if (has_post_thumbnail()){
                        the_post_thumbnail();
                    //well get the default value for the featured image, 150x150 when showing the results
                    } 
                ?>
                
                <!--printing out author-info and date-info about the post-->
                <div class="post-meta">
                    Author: <?php the_author(); ?> | Created: <?php the_date(); ?>
                </div>
                
                <div class="the-content">
                
                <?php
                    the_excerpt();
                ?>
                
                </div>
                  <hr/> <!--separating each excerpt(summarized post) with a thin line-->
                
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
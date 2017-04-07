<?php

	get_header();
	
	if (have_posts()){
					while(have_posts()){
						the_post(); ///laddar info för posten vi är på
					?>
		
		<article class="post">
	<div class="container">
		<div class = "row">
			<div class = "col-md-10 offset-md-1">
			<header>

		<h1> <?php the_title(); ?> </h1>
			
			<?php
    if (has_post_thumbnail()){
      the_post_thumbnail($size = 'post-featured-image');
      //så när vi tittar på många inlägg får vi defayult-värdet, 150x150.
      //här styr vi över vilken storlke bilden ska ha. UNdvik hårdkodade värden.
       } 
    ?>
			</header>


		<div class="post-meta">
        By: <?php the_author(); ?> | Created: <?php the_date(); ?>
      </div>
    <?php
            the_content();
       
					}
				} else {
					_e("Sorry,couldnt find any content for you", "myteam2");
				}
				?>
    	</div>
    	</div>
    	</div>
    	</article>

	<?php get_footer(); ?>






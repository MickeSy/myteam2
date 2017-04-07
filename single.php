<?php
	get_header(); 
?>
	
	<article class="post">
		<div class="container">
			<div class = "row">
				<div class = "col-md-10 offset-md-1">
				<header>

				<?php 
					if (have_posts()){
						while(have_posts()){
						the_post(); 
						}
				?>
	
					<h1> <?php the_title(); ?> </h1>
						
						<?php if (has_post_thumbnail()){ 
			      			the_post_thumbnail($size = 'post-featured-image'); }		
			      		?> <!--//choosing imagesize if post has featured image-->
     
       			</header>
					<div class="post-meta">
			        By: <?php the_author(); ?> | Created: <?php the_date(); ?>
			      	</div>
			    	<?php the_content();
			
					} else {
						_e("Sorry,couldnt find any content for you", "myteam2");
					}
					?>
    			</div>
    		</div>
    	</div>
    </article>

<?php get_footer(); 
?>






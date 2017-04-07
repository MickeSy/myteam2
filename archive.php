<?php
/*
Template Name: Archives
*/
get_header(); ?>
<article>
	<div class="container">
		<div class = "row">
			<div class = "col-md-10 offset-md-1">
				<div id="container">
					<div id="content" role="main">
						

					<?php get_search_form();

						 if (have_posts()){
					while(have_posts()){
						the_post(); ?> <!--laddar info för posten vi är på-->
						


						<h2 class="entry-title"><?php the_title(); ?></h2>
						<div>
						<?php the_excerpt();?> 

						
					</div>
					<?php } }else {
					_e("Sorry,couldnt find any content for you", "myteam2");
				}

					?>

						


						<h2>Arkiv per månad:</h2>
						<ul>
							<?php 
							wp_get_archives('type=monthly'); ?>
						 	
						</ul>
						
						<h2>Arkiv per kategori:</h2>
						<ul>
							 <?php wp_list_categories(); ?>
						 	
						</ul>



					 

						
						
						
					</div>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->
</article>

<?php get_footer(); ?>
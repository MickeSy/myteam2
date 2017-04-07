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
						<?php if (have_posts()){
					while(have_posts()){
						the_post(); ///laddar info för posten vi är på
					} }else {
					_e("Sorry,couldnt find any content for you", "myteam2");
				}
					?>
						<?php the_excerpt(); ?>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title ="permalink to this post"> <?php the_title(); ?></h2>
						
						<?php get_search_form(); ?>
						
						<h2>Archives by Month:</h2>
						<ul>
							<?php 
							wp_get_archives('type=monthly'); 
						 
							?>
						</ul>
						
						<h2>Archives by Subject:</h2>
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
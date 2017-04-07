<?php
	get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
				<?php 
					if (have_posts()){
						while(have_posts()){
							the_post(); ///laddar info för posten vi är på
						} 
					}else {
					_e("Sorry,couldnt find any content for you", "myteam2");
					}
				?>
				
				<article class="post">
					<header>
						<h1 class="the-title"><?php the_title(); ?> </h1>
					</header>

					<main class="the-content">

					
					<?php the_content(); ?>
					
					</main>
				</article>
				
				
	
			</div>
			<div class="col-md-3">
			<?php get_sidebar(); ?>
			</div>
		</div>
	</div>



<?php
	get_footer();
?>


	

	
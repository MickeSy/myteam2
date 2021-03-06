<?php
	
/*
Template Name: Fullwidth
*/

	get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<?php 
					if (have_posts()){
					while(have_posts()){
						the_post(); 
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
				
				<?php 
					
				} else {
					_e("Sorry,couldnt find any content for you", "myteam2");
				}
				?>
	
			</div>
		</div>
	</div>



<?php
	get_footer();
?>


	

	
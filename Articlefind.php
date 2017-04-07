<?php
/*
Template Name: Articlefind
*/
	get_header(); 
?>
	<article>
		<div class="container">
			<div class = "row">
				<div class = "col-md-10 offset-md-1">
					<div id="container">
						<div id="content" role="main">
							

						<?php get_search_form();  //wp built in search

						?>


						

						

							 
							
						<h2>Arkiv:</h2>
							<ul>
								 <?php wp_list_categories(); ?>
							 </ul>						
						</div>
					</div>
				</div>
			</div>
	</article>




<?php 
	get_footer(); 
?>
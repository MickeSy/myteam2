<?php

	get_header(); 
?>
	
	<article>
		<div class="container">
			<div class = "row">
				<div class = "col-md-10 offset-md-1">
					<div id="container">
						<div id="content" role="main">
							
							<?php				
							if (have_posts()){
									while(have_posts()){
								}
							?>

								<ul>
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
        
									
								 </ul>
								 <hr/>

							<?php 
								}else {
									_e("Sorry,couldnt find any content for you", "myteam2");
								}
							?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</article>




<?php 
	get_footer(); 
?>
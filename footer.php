<!--will be attached to end of other documents-->		

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<ul>
						<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
						?>	
						</ul>				
					</div>



					<div class="col-md-4">
						<ul>
						<?php
							if(is_active_sidebar('footer-sidebar-2')){
								dynamic_sidebar('footer-sidebar-2');
							}
						?>
						</ul>
					</div>



					<div class="col-md-4">
						<ul>
						<?php
							if(is_active_sidebar('footer-sidebar-3')){
								dynamic_sidebar('footer-sidebar-3');
							}
						?>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<?php
			wp_footer();
		?>
	</body>
</html>



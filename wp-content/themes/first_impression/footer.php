<?php
/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<ul class="site-info footer-social clearfix">
					<?php

					$args = array(
						'post_type' => 'social',
						'orderby' => 'ID',
						'order'   => 'ASC',
					);
					
					$query = new WP_Query( $args );
					
					?>


					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>

					<li>
						<a href="<?php echo ( CFS()->get('social_link')); ?>" target="_blank">
							<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
						</a>	
					</li>

					<?php endwhile; endif; wp_reset_postdata(); ?>
					
				</ul><!-- .site-info -->

				<nav id="site-navigation" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer', 
						'menu_id' => 'footer-menu' 
					)); 
					?>
				</nav><!-- #site-navigation -->		
				<div class="copyright">
					<p>Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Website design by <a href="http://whitecanvasdesign.ca/" target="_blank">www.whitecanvasdesign.ca</a></p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

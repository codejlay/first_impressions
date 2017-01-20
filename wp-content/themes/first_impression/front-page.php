<?php
/**
 * The main template file.
 *
 * @package White_Canvas_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main  container" role="main">
			<section class="content-front-page">
				<?php 
					if (have_posts()) :
					while (have_posts()) : the_post(); ?>				
					
						<p><?php the_content(); ?></p>					
					
					<?php endwhile;

					else:
						echo'<p>No content found</p>';

					endif; 
				?>
						
				<ul class="developer-logos">
					<?php 

					$args = array(
							'post_type' => 'dev-logo',
							'orderby' => 'title',
							'order'   => 'ASC',
					);
						
					$query = new WP_Query( $args );
						
					?>

					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
													
						<li>
							<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
						
							<a href="<?php echo ( CFS()->get('dev_mini_website')); ?>"></a>	
						
						    <div class="">
						     	<?php echo ( CFS()->get('dev_mini_logo')); ?>
						    </div>					  						  	
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
					<?php 
					
					$image_upload = get_post_meta($post->ID, 'dev-logo', true); 
					
					echo wp_get_attachment_image($image_upload);
 					?>
				</ul>
		
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

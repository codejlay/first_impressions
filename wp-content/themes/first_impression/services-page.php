<?php
/*
 Template Name: Services Layout
 */

get_header(); ?>
	<div id="primary" class="content-area services">
		<main id="main" class="site-main" role="main">
			<div class="banner-container">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="banner-image" id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
				<?php endif; ?>
					<div class="banner-border">
						<div class="banner-border-inner">
							<span class="banner-title"><h1><?php the_title(); ?></h1></span>
						</div>
					</div>
				</div>					
			</div>
			<div class="content-services container">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<p><?php get_template_part( 'template-parts/content', 'page' ); ?></p>

				<?php endwhile; // End of the loop. ?>

				<ul class="image-type-blocks">
					<?php 
					$args = array(
						'post_type' => 'service',
						'orderby' => 'title',
						'order'   => 'ASC',
					);
					
					$query = new WP_Query( $args );
					
					?>
						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="image-wrap-outer clearfix">
						<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
						<div class="image-wrap-inner">
						    <div class="image-name">
						     	<span><h2><?php echo get_the_title(get_the_ID()); ?></h2></span>
						    </div>
						    <div class="bar-icon"></div>
						    <div class="image-description">
						     	<p><?php echo ( CFS()->get('service_description')); ?></p>
						    </div>
					  </div>
					</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

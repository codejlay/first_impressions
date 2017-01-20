<?php
/*
 Template Name: In the media Layout
 */

get_header(); ?>
	<div id="primary" class="content-area media">
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
			<div class="content-media container">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>		
				<ul class="media-type-blocks">
					<?php

					$args = array(
						'post_type' => 'media_article',
						'orderby' => 'media_date',
						'order'   => 'ASC',
					);
						$query = new WP_Query( $args );
					?>
					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="media-wrap-outer clearfix">
						<?php echo get_the_post_thumbnail(get_the_id(), 'media-image') ?>
						<div class="media-wrap-inner">
							<a href="<?php echo ( CFS()->get('media_link')); ?>" target="_blank">	
								<div class="media-magazine">
									<h2><?php echo ( CFS()->get('media_magazine')); ?></h2>
								</div>	
							    <div class="media-name">
							     	<h2><?php echo ( CFS()->get('media_article')); ?></h2>
							    </div>
							    <div class="media-date">
							     	<h3><?php echo ( CFS()->get('media_date')); ?></h3>
							    </div>
						    </a>
					  	</div>
					</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

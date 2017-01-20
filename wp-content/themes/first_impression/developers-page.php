<?php
/*
 Template Name: Developers Layout
 */

get_header(); ?>
	<div id="primary" class="content-area developers">
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
			<div class="content-developers container">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
				<ul class="content-developers-wrap">
					<?php

					$args = array(
						'post_type' => 'developers',
						'orderby' => 'developer_name',
						'order'   => 'ASC',
					);
					
					$query = new WP_Query( $args );
					
					?>

					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="content-developers-col">
						<div class="developer-type-blocks">
							<div class="developer-wrap-outer clearfix">
								<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
								<a href="<?php echo get_the_title(get_the_ID()); ?>">
								<div class="developer-wrap-inner">
								    <div class="developer-title">
									   	<h2><?php echo get_the_title(get_the_ID()); ?></h2>
									 </div>
								</div>
							  </a>
							</div>
						</div>
						<div class="developer-info-blocks">
							<div class="developer-brand">
								    <div class="developer-name">
								     	<h2><?php echo get_the_title(get_the_ID()); ?></h2>
									</div>
									<div class="developer-logo">
										<a href="<?php echo CFS()->get('developer_website'); ?>" target="_blank"><img src="<?php echo CFS()->get('developer_logo'); ?>"></a>
									</div>
								</div>
							    <div class="developer-description">
							     	<p><?php echo ( CFS()->get('developer_description')); ?></p>
							    </div>
							<?php endwhile; endif; wp_reset_postdata(); ?>
						</div>
					</li>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

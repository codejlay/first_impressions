<?php
/*
 Template Name: Contact Layout
 */

get_header(); ?>
	<div id="primary" class="content-area contact">
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
			<div class="content-contact container clearfix">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

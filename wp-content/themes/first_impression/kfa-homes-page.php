<?php
/*
 Template Name: KFA Homes Layout
 */

get_header(); ?>
	<div id="primary" class="content-area kfa">
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
			<div class="content-kfa container">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

				<?php 

				$args = array(
					'child_of' => 50,
					'sort_column' => 'menu_order',						
				);

				$pages = get_pages( $args ); 
				?>
				<ul class="image-type-blocks">
					<?php foreach ( $pages as $page ) : ?>
					<li class="image-wrap-outer clearfix">
						<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
						<a href="<?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?>">						
							<div class="image-wrap-inner">
								<div class="image-name">
							     	<span><h2><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></h2></span>
							    </div>
						    </div>
					    </a>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

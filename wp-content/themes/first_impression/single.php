<?php
/**
 * The template for displaying all single posts.
 *
 * @package White_Canvas_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<section class="content-single">
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>

					<h2><?php the_title(); ?></h2>
					<p class="post-info"><?php the_time('F j, Y'); ?> &middot; By First Impression Designs</p>

					<?php the_content() ?>

				<?php endwhile; // End of the loop. ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>

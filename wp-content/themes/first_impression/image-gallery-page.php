<?php
/*
 Template Name: Image Gallery Layout
 */

get_header(); ?>
	<div id="primary" class="content-area image-gallery">
		<main id="main" class="site-main" role="main">
			<div class="content-image-gallery container">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
				<div class="project-title">
					<h1><?php the_title (); ?></h1>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

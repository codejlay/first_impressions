<?php
/**
 * The main template file.
 *
 * @package White_Canvas_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog container">
				<section class="content-blog">
					<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
					
					<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnails <?php }?>">

						<!-- post-thumbnail -->
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div><!-- /post-thumbnail -->

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<p class="post-info"><?php the_time('F j, Y'); ?> &middot; By First Impression Designs</p>

						<?php if ($post->post_excerpt) { ?>

							<p>
								<?php echo get_the_excerpt(); ?>
							</p>												

						<?php } else {

							the_content('read more');

						} ?>
						
					</article>
					
					<?php endwhile;

					else:
						echo'<p>No content found</p>';

					endif;
						
					?> 	
				</section>		
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>



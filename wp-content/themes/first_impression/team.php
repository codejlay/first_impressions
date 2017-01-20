<?php
/*
 Template Name: Team Layout
 */

get_header(); ?>
	<div id="primary" class="content-area team">
		<main id="main" class="site-main" role="main">
			<div class="banner-container">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="banner-image" id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')" cover no-repeat center center>
				<?php endif; ?>
					<div class="banner-border">
						<div class="banner-border-inner">
							<span class="banner-title"><h1><?php the_title(); ?></h1></span>
						</div>
					</div>
				</div>					
			</div>
			<div class="content-team container clearfix">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
				
				<!-- team-wrapper -->
				<ul class="team-wrapper-block">
					<?php

					$args = array(
						'post_type' => 'team_members',
						'meta_key' => 'member_order',
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
					);
						$query = new WP_Query( $args );
					?>

						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="team-wrapper-item clearfix">
						<div class="team-left">
							<div class="team-image">
								<!-- Get featured image -->
								<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>							
							</div>
							<ul class="team-association">
								<li><img src="<?php echo ( CFS()->get('meet_association_01')); ?>"></li>
								<li><img src="<?php echo ( CFS()->get('meet_association_02')); ?>"></li>
								<li><img src="<?php echo ( CFS()->get('meet_association_03')); ?>"></li>
							</ul>		
						</div>
						<div class="team-right">
							<div class="team-name">							
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="bar-icon"></div>
							<div class="team-summary">
								<?php echo ( CFS()->get('meet_summary')); ?>
							</div>							
						</div>
					<!-- End with this code to revert control to WP -->
					<?php endwhile; endif; wp_reset_postdata(); ?>
					</li><!-- /team-wrapper -->
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
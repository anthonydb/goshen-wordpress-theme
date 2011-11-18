<?php get_header(); ?>

<div id="bigcontainer">
	
	<div id="postcontainer">
		<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>

		
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="text-decoration: none;"><?php the_title();?></a></h2>
			<div class="entry">
			<?php the_content(); ?>
			</div>
		</div>
		
		<?php endwhile; ?>

		
		<div class="navi">
			<?php posts_nav_link(); ?>
		</div>
			<?php else: ?>
				<div class="post">
					<h2><?php _e('Not Found'); ?></h2>
				</div>


		<?php endif; ?>
	</div>

</div>	

<?php get_sidebar(); ?>


<?php get_footer(); ?>


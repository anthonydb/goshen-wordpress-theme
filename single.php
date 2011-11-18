<?php get_header(); ?>

<div id="bigcontainer">
	
	<div id="postcontainer">
		<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>

		
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
			<div class="entry">
                        <?php the_content(); ?>
                        <p class="postmetadata">
                        <?php the_time('M j, Y') ?><?php _e(' &#124; '); ?> <?php the_category(', ') ?><br />
                                        
                        </p>
			</div>

			<div class="comments-template">
				<?php comments_template(); ?>
			</div>

		</div>
		
		<?php endwhile; ?>

		
		<div class="navi">
			<?php previous_post_link('&laquo; %link') ?><br/>
			<?php next_post_link('%link &raquo;') ?>
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


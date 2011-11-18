<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

if ( post_password_required() ) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<h2 id="comments"><?php comments_number(__('No comments'), __('1 comment'), __('% comments')); ?> on &#8220;<?php the_title(); ?>&#8221;
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Leave a comment"); ?>">&raquo;</a>
<?php endif; ?>
</h2>

<?php if ( have_comments() ) : ?>
<ol id="commentlist">

<?php foreach ($comments as $comment) : ?>
   <?php $comment_type = get_comment_type(); ?>  
   <?php if($comment_type == 'comment') { ?>  
        <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="commentbox">
        <div class="commentavatar">
            <?php echo get_avatar( $comment, 48 ); ?>
        </div>
        <div class="commentmetadata">
        <p>
            <b><?php comment_author_link() ?></b><br/>
            <i><?php comment_date() ?><?php _e(", "); ?><?php comment_time() ?></i><?php edit_comment_link(__("Edit"), ' | '); ?></p>
        </div>
        </div>
        <div class="commenttext">
            <?php comment_text() ?>
        </div>
        </li>
    <?php } else { $trackback = true; } /* End of is_comment statement */ ?>
<?php endforeach; ?>

</ol>

<?php if ($trackback == true) { ?>  
    <h2 id="trackbacks">Trackbacks</h2>  
        <div class="trackbacktext">
        <ol>  
            <?php foreach ($comments as $comment) : ?>  
            <?php $comment_type = get_comment_type(); ?>  
            <?php if($comment_type != 'comment') { ?>  
                <b><?php comment_author_link() ?></b><br/>
                <?php comment_text() ?><br/>
                <?php } ?>  
            <?php endforeach; ?>  
        </ol>  
        </div>
<?php } ?>  

<?php endif; ?>
<br />
<br />
<?php if ( comments_open() ) : ?>
<h2 id="postcomment"><?php _e('Comments? Questions?'); ?></h2>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php esc_attr_e('Submit comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>

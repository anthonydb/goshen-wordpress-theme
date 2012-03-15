<div class="sidebar">
<div class="sidehead">
    <h1><a style="text-decoration: none" href="http://www.anthonydebarros.com">Anthony DeBarros</a></h1>
</div>
<div class="sidedrophead">
    <?php bloginfo('description'); ?>
</div>
    <ul>
        <li><a href="http://www.anthonydebarros.com/about/" title="About">About</a></li>
        <li><a href="http://www.anthonydebarros.com/resume/" title="Resume">Resume</a></li>
        <li><a href="http://www.anthonydb.com" title="Django Sandbox" target="_blank">Django Sandbox</a></li>
        <li><a href="http://www.anthonydebarros.com/clips/" title="Clips">Clips</a></li>
        <li><a href="http://www.anthonydebarros.com/speaking-training/" title="Speaking & Training">Speaking & Training</a></li>
        <li><a href="http://www.anthonydebarros.com/contact/" title="Contact">Contact</a></li>
      	<li><a href="http://www.anthonydebarros.com">Home</a></li>
    </ul>
<br/>
<br/>
<h2><b>Subscribe</b></h2>
<br/>
    <a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Atom'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="Atom" title="Atom" /> Atom</a><br/>
    <a href="<?php bloginfo('rss_url'); ?>" title="<?php _e('RSS .92'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="RSS .92" title="RSS .92" /> RSS .92</a><br/>
    <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS 2.0'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="RSS 2.0" title="RSS 2.0" /> RSS 2.0</a><br/>
<br/>
<?php if(function_exists('stats_get_csv')) : ?>
	<h2><b>Most-viewed posts</b></h2>
	<ul id="popularposts">
	<?php
	    $top_posts = stats_get_csv('postviews', 'days=60&limit=13');
	    $i = 0;
	    foreach($top_posts as $post) {
		if(!get_post($post['post_id']) || empty($post['post_id']) || in_array($post['post_id'], array(2, 9, 85, 526))) continue;
		echo '<li><a href="'.get_permalink($post['post_id']).'">'.get_the_title($post['post_id']).'</a><div class="commentsnumber">'.get_comments_number($post['post_id']).' comments</div></li>';
	        $i++;
		if($i >= 5) break;
		}
	?>
	</ul>
<?php endif; ?>

<h2><b>microblog</b></h2>
<?php twitter_messages("AnthonyDB", 5, true, true, '>><br />', true, false, false); ?>

<h2><b>my places</b></h2>
<br/>
<a href="http://www.linkedin.com/in/debarros1">LinkedIn</a><br />
<a href="http://www.twitter.com/AnthonyDB">Twitter</a><br />
<a href="http://pinboard.in/u:anthonydb">Pinboard</a><br />
<a href="http://github.com/AnthonyDB">Github</a><br />
<a href="http://letusgo.tumblr.com/">Tumblr</a><br />
<br />

<h2><b>data journalism helps</b></h2>
<br/>
<a href="http://github.com/onyxfish/csvkit">csvkit</a><br />
<a href="http://www.shancarter.com/data_converter/index.html">Mr. Data Converter</a><br />
<a href="http://scraperwiki.com/help/tutorials/">ScraperWiki Tutorials</a><br />
<br />

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<?php endif; ?>

<h2><b><?php _e('Archives'); ?></b></h2>

<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<h2><b><?php _e('Categories'); ?></b></h2>

<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<h2><b><?php _e('Search'); ?></b></h2>
<br />
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
<br />


</div>

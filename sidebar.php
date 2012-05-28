<div class="sidebar">
<div class="sidehead">
    <h1><a style="text-decoration: none; color: #000000;" href="http://www.anthonydebarros.com">Anthony DeBarros</a></h1>
</div>
<div class="sidedrophead">
    <?php bloginfo('description'); ?>
</div>
<br/>
<h2>Back catalog</h2>
<br/>
    <h3>ABOUT</h3>
        <ul>
        <li>- <a href="http://www.anthonydebarros.com/resume/" title="Resume">Resume</a></li>
        <li>- <a href="http://www.anthonydebarros.com/about/" title="Bio">Bio</a></li>
        <li>- <a href="http://www.linkedin.com/in/debarros1">LinkedIn</a></li>
        </ul>
    <h3>CODING PROJECTS</h3>
        <ul>
        <li>- <a href="http://www.anthonydb.com/words/" title="Words on Art" target="_blank">Words on Art (Django)</a></li>
        <li>- <a href="http://www.anthonydb.com/apis/books" title="Book List API" target="_blank">Book List API example (Django)</a></li>
        <li>- <a href="https://github.com/AnthonyDB/goshen-wordpress-theme" title="Goshen WordPress Theme" target="_blank">Goshen theme (WordPress)</a></li>
        <li>- <a href="http://github.com/AnthonyDB">Github</a></li>
        </ul>        
    <h3>JOURNALISM</h3>
        <ul>
        <li>- <a href="http://www.anthonydebarros.com/clips/investigative/" title="Investigative">Investigative data journalism</a></li>
        <li>- <a href="http://www.anthonydebarros.com/clips/interactivity/" title="News applications">News applications</a></li>
        <li>- <a href="http://www.anthonydebarros.com/clips/" title="Clips">More clips</a></li>
        <li>- <a href="http://www.anthonydebarros.com/speaking-training/" title="Speaking & training">Speaking & Training</a></li>
        </ul>        
    <h3>CONTACT &amp; FOLLOW</h3>
        <ul>
        <li>- <a href="http://www.anthonydebarros.com/contact/" title="Contact">Contact</a></li>
        <li>- <a href="http://www.twitter.com/AnthonyDB">Twitter</a></li>
        <li>- <a href="http://pinboard.in/u:anthonydb">Pinboard</a></li>
        <li>- <a href="http://letusgo.tumblr.com/">Tumblr</a></li>
        </ul>
<h2>Subscribe</h2>
<ul>
    <li><a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Atom'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="Atom" title="Atom" /> Atom</a></li>
    <li><a href="<?php bloginfo('rss_url'); ?>" title="<?php _e('RSS .92'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="RSS .92" title="RSS .92" /> RSS .92</a></li>
    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS 2.0'); ?>">
    <img src="/wp-content/themes/goshen/img/feed-icon.png" alt="RSS 2.0" title="RSS 2.0" /> RSS 2.0</a></li>
</ul>
<?php if(function_exists('stats_get_csv')) : ?>
	<h2>Most-viewed</h2>
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

<h2>Twitter</h2>
<?php twitter_messages("AnthonyDB", 5, true, true, '>><br />', true, false, false); ?>

<h2>Helpful things</h2>
<ul>
<li><a href="http://github.com/onyxfish/csvkit">csvkit</a></li>
<li><a href="http://www.shancarter.com/data_converter/index.html">Mr. Data Converter</a></li>
<li><a href="http://scraperwiki.com/help/tutorials/">ScraperWiki Tutorials</a></li>
</ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>

<?php endif; ?>

<h2><?php _e('Archives'); ?></h2>

<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<h2><?php _e('Categories'); ?></h2>

<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<h2><?php _e('Search'); ?></h2>
<br />
<?php include(TEMPLATEPATH.'/searchform.php'); ?>
<br />
<br/>
    <g:plusone size="medium" href="http://www.anthonydebarros.com"></g:plusone>

</div>

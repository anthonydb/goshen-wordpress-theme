<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
	<br />
	<input id="searchsubmit" type="image" class="button" src="/wp-content/themes/goshen/img/srch.gif" alt="Submit" />
</form>


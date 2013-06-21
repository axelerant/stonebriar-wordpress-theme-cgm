<?php
require_once( 'functions.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php /* If this is the frontpage */ if ( is_home() ) { ?> Frisco Texas Church <?php } else if (is_category()) { echo single_cat_title(); } else { the_title(); }?> – <?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<style type="text/css" media="screen">
		@import url(  "http://www.stonebriar.org/fileadmin/templates_3.0/framework/css/stonebriar_screen.css" );
	</style>

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/style-blog.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/css/stonebriar_print.css" media="print" />
	<!--[if IE]>
		<link rel="stylesheet" href='/fileadmin/templates_3.0/framework/css/ie_fixes.css' type="text/css" media="screen, projection" />
	<![endif]-->

	<script type="text/javascript">
		document.write('<link rel="stylesheet" href="http://www.stonebriar.org/fileadmin/templates_3.0/framework/css/preset.css" type="text/css" media="screen, projection" />');
	</script>
	<script type="text/javascript" src="<? bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<? bloginfo('template_url'); ?>/js/global.js"></script>
	
	<?php if (! is_page('subscribe')) {?><script type="text/javascript" src="<? bloginfo('template_url'); ?>/js/imgfloat.js"></script><?php } ?>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/StonebriarCommunityChurch" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>
<body>
<p id="skip_links">
	<a href="#content">Skip to main content</a>
</p>

<?
// ministry_index
	$nav = curl_init('http://www.stonebriar.org/?blogheadermenu&type=11');
	
	curl_exec($nav);
	
	curl_close($nav);
?>
<div id="header_wrap">

	<div id="header">
		<h1>
			<a href="/"><?php bloginfo('name'); ?></a>
		</h1>
		<span>
			<a href="http://www.stonebriar.org/index.php?id=2472&amp;tx_pilmailform_pi1[text][refpage]=<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">Contact Us</a>

		</span>
		<a style="display: none;" href="#ministry_index" id="ministry_tab" class="off">Ministry Index</a>
		<!-- wp search 
		<form method="get" action="/blog">
			<p>
				<label for="search_field">
					Search
				</label>
				<input type="text" id="search_field" name="s" />
				<input type="image" id="search_button" src="<? bloginfo('template_url'); ?>/images/search_button.gif" alt="Search" />

			</p>
			<div class="clear">&nbsp;</div>
		</form>
	-->
	
	
	<form method="post" action="/?search" name="tx_indexedsearch">
		<input type="hidden" name="tx_indexedsearch[_sections]" value="0" />
		<input type="hidden" name="tx_indexedsearch[_freeIndexUid]" value="_" />
		<input type="hidden" name="tx_indexedsearch[pointer]" value="0" />
		<input type="hidden" name="tx_indexedsearch[ext]" value="" />
		<input type="hidden" name="tx_indexedsearch[type]" value="1" />
		<input type="hidden" name="tx_indexedsearch[defOp]" value="0" />
		<input type="hidden" name="tx_indexedsearch[media]" value="-1" />
		<input type="hidden" name="tx_indexedsearch[order]" value="rank_flag" />

		<input type="hidden" name="tx_indexedsearch[group]" value="flat" />
		<input type="hidden" name="tx_indexedsearch[lang]" value="-1" />
		<input type="hidden" name="tx_indexedsearch[desc]" value="0" />
		<input type="hidden" name="tx_indexedsearch[results]" value="10" />

		<p>
			<label for="search_field">
				Search
			</label>
			<input type="text" id="search_field" name="tx_indexedsearch[sword]" />

			<input type="image" id="search_button" src="http://www.stonebriar.org/fileadmin/templates_3.0/framework/img/search_button.gif" alt="Search" />
		</p>
		<span class="clear">&nbsp;</span>
	</form>
	</div>
	<!-- end #header -->
</div>

<!-- end #header_wrap -->
<?
	// main nav
	$nav = curl_init('http://www.stonebriar.org/?blogheadermenu&type=10');
	
	curl_exec($nav);
	
	curl_close($nav);
?>
<div id="content_wrap">
	<div id="content" class="blog">
		<p id="breadcrumbs">
			<a href="/">Home</a> &raquo; <a href="<? bloginfo('home'); ?>">Blog</a> <? if(is_single()){ ?>&raquo; <? the_title(); ?> <? }elseif(is_category()){ ?>&raquo; <? single_cat_title(); ?> <? }elseif(is_author()){ ?>
				<? $curauth = get_userdata($_GET['author']); ?>
				&raquo; <?=$curauth->nickname;?>
			<? }elseif(is_page('Archive')){ ?>&raquo; Archive <? } ?>
		</p>
		<div id="blog-header"></div>
		<p class="blog-header big-archive-link"><a href="<? bloginfo('url'); ?>/archive/"><img src="<? bloginfo('template_url'); ?>/images/button_explore_archives-header.gif" alt="Explore the Archives" /></a></p>

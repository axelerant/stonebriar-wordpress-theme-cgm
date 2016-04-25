<?php
/*
	Template Name: Stonebriar Related
*/
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	>

<channel>
	<title><?php bloginfo('title'); ?></title>
	<description><?php bloginfo('description'); ?></description>
	<link><?php bloginfo('home'); ?></link>
	<pubDate><?php echo date('D, d M Y H:i:s');?></pubDate>

	<generator>http://wordpress.org/?v=2.1.3</generator>
	<language>en</language>
<?
	query_posts('cat= 5,33,35,29,28,7,31,32,26,30,36,34,25,27,38');
	
	while(have_posts()): the_post();
?>
	<item>
		<title><?php the_title(); ?></title>
		<link><?php the_permalink(); ?></link>
		<pubDate><?php echo the_time('D, d M Y H:i:s');?></pubDate>
		<description><![CDATA[<?php the_excerpt(); ?>]]></description>
	</item>
<?
	endwhile;
?>
</channel>
</rss>

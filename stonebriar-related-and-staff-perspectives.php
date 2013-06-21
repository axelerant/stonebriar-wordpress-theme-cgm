<?php
/*
	Template Name: Stonebriar Related and Staff Perspectives
*/
?>
<?='<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	>

<channel>
	<title><? bloginfo('title'); ?></title>
	<description><? bloginfo('description'); ?></description>
	<link><? bloginfo('home'); ?></link>
	<pubDate><?=date('D, d M Y H:i:s');?></pubDate>

	<generator>http://wordpress.org/?v=2.1.3</generator>
	<language>en</language>
<?
	query_posts('cat=-39');
	
	while(have_posts()): the_post();
?>
	<item>
		<title><? the_title(); ?></title>
		<link><? the_permalink(); ?></link>
		<pubDate><?=the_time('D, d M Y H:i:s');?></pubDate>
		<description><![CDATA[<? the_excerpt(); ?>]]></description>
	</item>
<?
	endwhile;
?>
</channel>
</rss>
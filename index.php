<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage CGM
 */
?>
<? get_header(); ?>

<?if (is_home()){?>
		<div class="two_thirds">
				<? if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php static $ctr = 0; 
// if ($ctr == "2") { break; } 
// else { ?>
					<h1><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
					<p>
						<?php if ( true ) { ?>
						<? $author_image = get_user_meta( $post->post_author, 'AUTHOR_IMAGE', true ); ?>
						<? if(!empty($author_image)){ ?><a href="<?=get_author_posts_url($post->post_author);?>"><img src="<?=$author_image?>" alt="A Photo" class="blog_photo" /></a><? } ?>
<?php } ?>
						<span class="blog_author">
							<?php the_author_posts_link() ?>
						<?php if ( false ) { ?>
							<a href="<?=get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><strong><?the_author_nickname();?></strong></a>
							<a href="<?=get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><?the_author_description();?></a>
<?php } ?>
						</span>

						<span class="blog_info">
							<strong>
								<? the_time('F jS Y'); ?>
							</strong>
							<?php comments_popup_link('No comments yet', '1 comment so far', '% comments so far'); ?>
						</span>
						<span class="clear">&nbsp;</span>
					</p>
					<? the_excerpt_reloaded('100', '<a><blockquote><strong><em><img><h1><h2><h3><h4><h5><h6>', 'content', TRUE, '<p>Read the rest of this post &raquo;</p>'); ?>
<?php // $ctr++;
// } ?>
				<? endwhile; endif; ?>
				<? if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you're looking for.</p><? } ?>
<?php 
	// if(! is_home()){
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
		// }
?>	



		</div>
<?} elseif(! is_home()) {?>		
		<div class="two_thirds">
				<? if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php static $ctr = 0; 
if ($ctr == "5") { break; } 
else { ?>
					<h1><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h1>
					<p>
						<?php if ( true ) { ?>
						<? $author_image = get_user_meta( $post->post_author, 'AUTHOR_IMAGE', true ); ?>
						<? if(!empty($author_image)){ ?><a href="<?=get_author_posts_url($post->post_author);?>"><img src="<?=$author_image?>" alt="A Photo" class="blog_photo" /></a><? } ?>
<?php } ?>
						<span class="blog_author">
							<?php the_author_posts_link() ?>
						<?php if ( false ) { ?>
							<a href="<?=get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><strong><?the_author_nickname();?></strong></a>
							<a href="<?=get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><?the_author_description();?></a>
<?php } ?>
						</span>

						<span class="blog_info">
							<strong>
								<? the_time('F jS Y'); ?>
							</strong>
							<?php comments_popup_link('No comments yet', '1 comment so far', '% comments so far'); ?>
						</span>
						<span class="clear">&nbsp;</span>
					</p>
					<? the_excerpt_reloaded('100', '<a><blockquote><strong><em><img><h1><h2><h3><h4><h5><h6>', 'content', TRUE, '<p>Read the rest of this post &raquo;</p>'); ?>
				<?php $ctr++; } ?>
				<? endwhile; endif; ?>
				<? if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you're looking for.</p><? } ?>


<?php 
	// if(! is_home()){
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
		// }
?>	

		</div>
		<? }?>
		<!-- end .two_thirds -->

<? get_sidebar(); ?>

<? get_footer(); ?>

<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage CGM
 */
?>
<?php get_header(); ?>

<?php if (is_home()){?>
		<div class="two_thirds">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php static $ctr = 0; 
// if ($ctr == "2") { break; } 
// else { ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>
						<?php if ( true ) { ?>
						<?php $author_image = get_user_meta( $post->post_author, 'AUTHOR_IMAGE', true ); ?>
						<?php if(!empty($author_image)){ ?><a href="<?php echo get_author_posts_url($post->post_author);?>"><img src="<?php echo $author_image?>" alt="A Photo" class="blog_photo" /></a><?php } ?>
<?php } ?>
						<span class="blog_author">
							<?php the_author_posts_link() ?>
						<?php if ( false ) { ?>
							<a href="<?php echo get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><strong><?php the_author_nickname();?></strong></a>
							<a href="<?php echo get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><?php the_author_description();?></a>
<?php } ?>
						</span>

						<span class="blog_info">
							<strong>
								<?php the_time('F jS Y'); ?>
							</strong>
							<?php comments_popup_link('No comments yet', '1 comment so far', '% comments so far'); ?>
						</span>
						<span class="clear">&nbsp;</span>
					</p>
					<?php the_excerpt_reloaded('100', '<a><blockquote><strong><em><img><h1><h2><h3><h4><h5><h6>', 'content', TRUE, '<p>Read the rest of this post &raquo;</p>'); ?>
<?php // $ctr++;
// } ?>
				<?php endwhile; endif; ?>
				<?php if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you're looking for.</p><?php } ?>
<?php 
	// if(! is_home()){
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
		// }
?>	



		</div>
<?php } elseif(! is_home()) {?>		
		<div class="two_thirds">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php static $ctr = 0; 
if ($ctr == "5") { break; } 
else { ?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<p>
						<?php if ( true ) { ?>
						<?php $author_image = get_user_meta( $post->post_author, 'AUTHOR_IMAGE', true ); ?>
						<?php if(!empty($author_image)){ ?><a href="<?php echo get_author_posts_url($post->post_author);?>"><img src="<?php echo $author_image?>" alt="A Photo" class="blog_photo" /></a><?php } ?>
<?php } ?>
						<span class="blog_author">
							<?php the_author_posts_link() ?>
						<?php if ( false ) { ?>
							<a href="<?php echo get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><strong><?php the_author_nickname();?></strong></a>
							<a href="<?php echo get_cimyFieldValue($post->post_author, 'PROFILE_URL');?>"><?php the_author_description();?></a>
<?php } ?>
						</span>

						<span class="blog_info">
							<strong>
								<?php the_time('F jS Y'); ?>
							</strong>
							<?php comments_popup_link('No comments yet', '1 comment so far', '% comments so far'); ?>
						</span>
						<span class="clear">&nbsp;</span>
					</p>
					<?php the_excerpt_reloaded('100', '<a><blockquote><strong><em><img><h1><h2><h3><h4><h5><h6>', 'content', TRUE, '<p>Read the rest of this post &raquo;</p>'); ?>
				<?php $ctr++; } ?>
				<?php endwhile; endif; ?>
				<?php if(!have_posts()){ ?><p class="notice">Sorry, there are no posts matching what you're looking for.</p><?php } ?>


<?php 
	// if(! is_home()){
	if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
		// }
?>	

		</div>
		<?php }?>
		<!-- end .two_thirds -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

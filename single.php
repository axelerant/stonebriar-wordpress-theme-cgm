<?php get_header(); ?>

		<div class="two_thirds">
			 <!--TYPO3SEARCH_begin-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
						<?php comments_popup_link('No comments yet', '1 comment so far', '(%) comments so far'); ?>
					</span>
					<span class="clear">&nbsp;</span>
				</p>
<?php if (has_post_thumbnail()) { ?>
    <div class="post-thumbnail">
    <?php the_post_thumbnail('large'); ?>
    </div>
<?php } ?>
				<?php the_content(); ?>
				<hr />
				<?php comments_template(); ?>
			<?php endwhile; endif; ?>
		</div>
		   <!--TYPO3SEARCH_end-->
		<!-- end .two_thirds -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>

<? get_header(); ?>

		<div class="two_thirds">
			 <!--TYPO3SEARCH_begin-->
			<? if (have_posts()) : while (have_posts()) : the_post(); ?>
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
						<?php comments_popup_link('No comments yet', '1 comment so far', '(%) comments so far'); ?>
					</span>
					<span class="clear">&nbsp;</span>
				</p>
				<? the_content(); ?>
				<hr />
				<? comments_template(); ?>
			<? endwhile; endif; ?>
		</div>
		   <!--TYPO3SEARCH_end-->
		<!-- end .two_thirds -->

<? get_sidebar(); ?>

<? get_footer(); ?>
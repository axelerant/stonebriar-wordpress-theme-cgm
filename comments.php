<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
		<p class="notice">
			This post is password protected. Please login to add your comment.
		</p>
<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'odd';
?>
<h3>
	<a name="comments"></a>Comments
</h3>
<?php if ($comments) : ?>
<ol id="commentlist">
	<?php foreach ($comments as $comment) : ?>
	<li class="<?php echo $oddcomment;?>">
		<span class="comment_arrow">&nbsp;</span>
		<div class="comment_wrap<?php if($comment->user_id){ ?> staff<?php } ?>">
			<a name="comment-<?php comment_ID(); ?>"></a>
			<p>
				<span class="comment_name">
					<?php comment_author_link() ?><?php if($comment->user_id){ ?><span class="caps"> - staff</span><?php } ?>
				</span>
				<span class="comment_date">
					<?php comment_date('F jS'); ?> at <?php comment_time(); ?>
				</span>
				<span class="clear">&nbsp;</span>
			</p>
			<p>
				<?php comment_text(); ?>
			</p>
		</div>
	</li>
		<?php if ('odd' == $oddcomment) $oddcomment = 'even'; else $oddcomment = 'odd'; ?>
	<?php endforeach; ?>
</ol>
<?php endif; ?>
<!-- end #commentlist -->
<?php if($post->comment_status == 'open'){ ?>
<h3>
	Add Your Thoughts
</h3>
<form method="post" action="<?php echo get_option('siteurl');?>/wp-comments-post.php" id="commentform">
	<table cellspacing="0">
		<?php if ( $user_ID ) : ?>

		<tr>
			<td colspan="2">
				Logged in as <a href="<?php get_option('siteurl');?>/wp-admin/profile.php"><?php echo $user_identity;?></a>. <a href="<?php echo get_option('siteurl');?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a>
			</td>
		</tr>

		<?php else : ?>
		<tr>
			<th scope="row">

				<label for="author">
					Name:
				</label>
			</th>
			<td>
				<input type="text" size="22" id="author" name="author" />
			</td>
		</tr>
		<tr>

			<th scope="row">
				<label for="email">
					Email:
				</label>
			</th>
			<td>
				<input type="text" size="22" id="email" name="email" />
			</td>
		</tr>

		<tr>
			<th scope="row">
				<label for="url">
					Website:
				</label>
			</th>
			<td>
				<input type="text" size="22" id="url" name="url" />
			</td>

		</tr>
		<?php endif; ?>
		<tr>
			<th scope="row">
				<label for="comment">
					Comment:
				</label>
			</th>
			<td>
				<textarea id="comment" name="comment" cols="100%" rows="10"></textarea>

			</td>
		</tr>
	</table>
	<!-- end .form_wrap -->
	<p>
		<span class="right">
			<input type="image" src="<?php bloginfo('template_url'); ?>/images/button_post_comment.gif" alt="Post Comment" />
		</span>
		<input type="hidden" name="comment_post_ID" value="<?php echo $id;?>" />
		<?php do_action('comment_form', $post->ID); ?>
		<span class="clear">&nbsp;</span>
	</p>
</form>
<?php }else{ ?>
	<p class="notice">

		Comments are closed for this post.
	</p>
<?php } ?>
<!-- end #commentform -->

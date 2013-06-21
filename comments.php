<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>
		<p class="notice">
			This post is password protected. Please login to add your comment.
		</p>
<?
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'odd';
?>
<h3>
	<a name="comments"></a>Comments
</h3>
<? if ($comments) : ?>
<ol id="commentlist">
	<? foreach ($comments as $comment) : ?>
	<li class="<?=$oddcomment;?>">
		<span class="comment_arrow">&nbsp;</span>
		<div class="comment_wrap<? if($comment->user_id){ ?> staff<? } ?>">
			<a name="comment-<? comment_ID(); ?>"></a>
			<p>
				<span class="comment_name">
					<? comment_author_link() ?><? if($comment->user_id){ ?><span class="caps"> - staff</span><? } ?>
				</span>
				<span class="comment_date">
					<? comment_date('F jS'); ?> at <? comment_time(); ?>
				</span>
				<span class="clear">&nbsp;</span>
			</p>
			<p>
				<? comment_text(); ?>
			</p>
		</div>
	</li>
		<? if ('odd' == $oddcomment) $oddcomment = 'even'; else $oddcomment = 'odd'; ?>
	<? endforeach; ?>
</ol>
<? endif; ?>
<!-- end #commentlist -->
<? if($post->comment_status == 'open'){ ?>
<h3>
	Add Your Thoughts
</h3>
<form method="post" action="<?=get_option('siteurl');?>/wp-comments-post.php" id="commentform">
	<table cellspacing="0">
		<?php if ( $user_ID ) : ?>

		<tr>
			<td colspan="2">
				Logged in as <a href="<?get_option('siteurl');?>/wp-admin/profile.php"><?=$user_identity;?></a>. <a href="<?=get_option('siteurl');?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a>
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
		<? endif; ?>
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
			<input type="image" src="<? bloginfo('template_url'); ?>/images/button_post_comment.gif" alt="Post Comment" />
		</span>
		<input type="hidden" name="comment_post_ID" value="<?=$id;?>" />
		<?php do_action('comment_form', $post->ID); ?>
		<span class="clear">&nbsp;</span>
	</p>
</form>
<? }else{ ?>
	<p class="notice">

		Comments are closed for this post.
	</p>
<? } ?>
<!-- end #commentform -->
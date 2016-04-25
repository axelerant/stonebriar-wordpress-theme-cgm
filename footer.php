		<span class="clear">&nbsp;</span>
	</div>
	<!-- end #content -->
	<div id="content_sub">
		<dl class="special">

			<dt>
				<span class="highlight">
					Recently
				</span>
				<span class="clear">&nbsp;</span>
			</dt>
			<?php wp_get_archives('type=postbypost&limit=10&format=custom&before=<dd>&after=</dd>'); ?>
			<dd>
				<a href="<?php bloginfo('url'); ?>/archive/">
					(More)
				</a>
			</dd>
		</dl>
		<ul id="by-ministry">
			<li>
				<h4>
					<span class="highlight">
						By Ministry
					</span>
					<span class="clear">&nbsp;</span>
				</h4>
				<ul>
					<?php wp_list_categories('title_li=&child_of=5&hide_empty=0'); ?>
				</ul>
			</li>
		</ul>
		<ul id="by-topic">
			<li>
				<h4>
					<span class="highlight">
						By Topic
					</span>
					<span class="clear">&nbsp;</span>
				</h4>
				<ul>
					<?php wp_list_categories('title_li=&child_of=6&hide_empty=0'); ?>
				</ul>
			</li>
		</ul>
		<ul id="linkage">
			<?php wp_list_bookmarks('categorize=1&category=3,4&show_images=0&show_description=0&orderby=url&title_before=<h4><span class=highlight>&title_after=</span></h4><span class=clear> </span>'); ?>
		</ul>
		
		<span class="clear">&nbsp;</span>
		<p class="big-archive-link"><a href="<?php bloginfo('url'); ?>/archive/"><img src="<?php bloginfo('template_url'); ?>/images/button_explore_archives.gif" alt="Explore the Archives" /></a></p>

	</div>
	<!-- end #content_sub -->
</div>
<!-- end #content_wrap -->
<div id="footer_wrap">
	<div class="shadow">&nbsp;</div>
	<div id="footer">
		<span class="left">
		<a href="http://www.stonebriar.org/pages/terms-and-conditions/">&copy; <?php echo date('Y'); ?> Copyright & Terms of Use</a>
			<br />

			<a href="http://www.stonebriar.org/index.php?id=2812&amp;tx_pilmailform_pi1[text][refpage]=<?php echo 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">Problems with the site?</a>
			<?php if(is_home()){?>
			<a href="/index.php?id=2789&amp;tipUrl=http://www.stonebriar.org/index.php?id=2789&tipUrl=http://www.stonebriar.org/blog/" class="email_friend">Email to a friend</a>
		<?php }else{?>
			<a href="/index.php?id=2789&amp;tipUrl=http://www.stonebriar.org/index.php?id=2789&tipUrl=<?php the_permalink(); ?>" class="email_friend">Email to a friend</a>
		<?php }?>
			<a href="<?php bloginfo('home'); ?>/subscribe/" class="email_registration">Blogs by email</a>
			<a href="<?php bloginfo('home'); ?>/subscribe/" class="feed">Grab our feed</a>
		</span>
		<!-- end #footer_left -->
		<address class="vcard">

			<span class="org">Stonebriar Community Church</span>
			<br />
			<span class="adr">
				<span class="street-address">4801 Legendary Drive</span> |
				<span class="locality">Frisco</span>, <span class="region">TX</span> <span class="postal-code">75034</span>

			</span>
			<br />
			<a class="email" href="mailto:&#105;&#110;f&#111;&#64;&#115;&#116;&#111;&#110;e&#98;&#114;&#105;&#97;&#114;&#46;o&#114;&#103;">i&#110;&#102;o&#64;&#115;&#116;&#111;&#110;&#101;&#98;r&#105;&#97;r&#46;o&#114;&#103;</a>
			<br />
			<span class="tel">469.252.5200</span>
		</address>

		<!-- end .vcard -->
		<span class="clear">&nbsp;</span>
	</div>
	<!-- end #footer -->
	</div>
<!-- end #footer_wrap -->
	<?php wp_footer(); ?>

</body>
</html>

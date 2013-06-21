<?php
/*
	Template Name: Feeds List
*/
?>
<? get_header(); ?>
		<div class="two_thirds">
			<h1>RSS Subscriptions - Stonebriar Community Church</h1>
			<h2>General Feeds (Recommended)</h2>
			<ul class="big-feed-list">
				<li><a href="http://feeds.feedburner.com/StonebriarCommunityChurch">All Posts - Stonebriar Related, Staff Perspectives and Asides</a> Frequency: 20+ per month</li>
<!--
				<li><a href="http://feeds.stonebriar.org/stonebriar/ipZt">Stonebriar Related and Staff Perspectives (No Asides)</a> Frequency: 6+ per month</li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/OmDM">Stonebriar Related (No Staff Perspectives or Asides)</a> Frequency: 3+ per month</li>
-->
			</ul>
<!--
			<h2>Category Feeds (Content Specific to the Below Ministries)</h2>
						<ul style="list-style-type:none;" >
				<li><a href="http://feeds.stonebriar.org/stonebriar/bicW" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Care &amp; Support(rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/cRQz" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Childrens Ministries (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/TEJl" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Fellowship Groups (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/DErk" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Hispanic Ministries (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/sknI" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Mens Ministries (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/vHAc" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Missions (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/ttfy" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Outreach (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/zurP" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Preteen (5th-6th Grades)(rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/uCau" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Special Needs (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/vRYc" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Stonebriar Community Church (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/tdUW" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Womens Ministries (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/SALv" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Worship &amp; Music (rss)</a></li>
				<li><a href="http://feeds.stonebriar.org/stonebriar/tiZY" title="rss"><img src="<?php bloginfo('template_url');?>/images/rsslogo.gif" /> Youth (7th-12th Grades) (rss)</a></li>
						</ul>
-->
					</div>
		
		<div class="third">
			<div id="blogs-by-email">
				<img src="<? bloginfo('template_url'); ?>/images/blogs-by-email.jpg" alt="Blogs By Email" />
<!--
				<form style="text-align:center;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=903647" name="url"/><input type="hidden" value="Stonebriar Community Church Blog" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /><p>Delivered by <a href="http://www.feedburner.com" target="_blank">FeedBurner</a></p></form>
-->

<form style="text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=StonebriarCommunityChurch', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="StonebriarCommunityChurch" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /><p>Delivered by <a href="http://feedburner.google.com" target="_blank">FeedBurner</a></p></form>
				<img src="<? bloginfo('template_url'); ?>/images/bbe-bottom.jpg" />
			</div>
		</div>
		<!-- end .full -->
		
<? get_footer(); ?>
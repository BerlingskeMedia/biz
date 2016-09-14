
<li class="live-item-<?php echo $liveType ?>">
	<time>
	<?php if($liveType == 'sticky'): ?>
		Fastgjort
	<?php else: ?>
		<? dummy("text@time-ago") ?>
	<?php endif; ?>
	</time>

	<p class="live-item__header"><strong><? dummy("text@headline") ?></strong></p>
	<?php if($liveType == 'stock') :?>
		<img src="<? dummy("image/!business-stock@800x,") ?>" width="" height="" alt=""/>
	<?php endif; ?>
	<p><? dummy("text@business-liveitems") ?></p>
	
		<?php if($liveType == 'teaser'): ?>
		<div class="live-teaser">
			<a href="#">
				<figure>
					<img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" />
				</figure>
				<div>
				<h3><? dummy("text@headline") ?></h3>
				<p><? dummy("text@teaser") ?></p>
				</div>
			</a>
		</div>
	<?php elseif($liveType == 'twitter') :?>
		<blockquote class="twitter-tweet" data-lang="da"><p lang="en" dir="ltr">Silicon Valley&#39;s relationship with India may be about to get even more fraught <a href="https://t.co/0wdWERyf8k">https://t.co/0wdWERyf8k</a> <a href="https://t.co/hPqhbr2pSF">pic.twitter.com/hPqhbr2pSF</a></p>&mdash; Bloomberg (@business) <a href="https://twitter.com/business/status/776000873336012800">14. september 2016</a></blockquote>
			<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

	<?php elseif($liveType == 'facebook') :?>
		<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fberlingskebusiness%2Fposts%2F1297412293611805&width=500" width="500" height="466" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>


	<?php endif; ?>
</li>
<?php 
$liveType = false; ?>
<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>






  <?php include("./inc/header.php"); ?>

  <div class="container">
    <div class="rat-tail desktop-banner">
    <? dummy("ad@960x180") ?>
    <div class="banner-left">
      <? dummy("ad@160x600-2") ?>
    </div>
    <div class="banner-right">
      <? dummy("ad@160x600-2") ?>
    </div>

      
    
    </div>
    <div class="row">
      

      
	<article class="col-md-12">


		<div class="row">
			<div class="col-md-8 col-md-push-4">
				<header class="liveblog-header">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<h1>BusinessLive</h1>
						</div>

						<div class="col-sm-12 col-md-9">
							<p>Vores liveblog hvor vi bringer de seneste nyheder fra de globale 
							markeder, økonomi og store begivenheder indenfor finansverdenen og bla bla bla. 
							Vores team sidder klar ved tasterne på hverdage fra kl. 7 - 23</p>
						</div>
					</div>
					
				</header>
				
				<div class="liveheader">
					<span class="livelabel"><i class="fa fa-circle zoomfade"></i> LIVE</span>
					<span class="timeofday">13:24:28</span>
					<span class="hostoftheday">
						
						Nyhedsvært: <a href="mailto:jst@berlingskemedia.dk"><? dummy("text@author") ?></a>
						<img src="<? dummy("image/!author@40x40,") ?>" width="" height="" alt="" />
					</span>
				</div>
				
				<div class="live-content">
					
					<ul class="live-blog">
						<li class="live-item-sticky">
							<time>
								Fastgjort
							</time>
							<p><strong>Begivenheder i dag</strong></p>
							
								<ul>
									<li>Oslo Børs åpner flatt og oljeprisen stiger svakt</li>
									<li>Mot sluttføring av <a href="tpl-article.php">Bayers Monsanto-bud</a></li>
									<li>Britiske ledighetstall, industriproduksjon fra eurosonen</li>
								</ul>

						</li>
						<li class="live-item-teaser">
							<time><? dummy("text@time-ago") ?></time>
							<p><strong><? dummy("text@headline") ?></strong></p>
							<p><? dummy("text@teaser") ?></p>
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
						</li>
						<li class="live-item">
							<time><? dummy("text@time-ago") ?></time>
							<p><strong><? dummy("text@headline") ?></strong></p>
							<p>ATP-direktør Carsten Stendevad kalder pensionsgigantens investering i Nets for en af de bedste i meget lang tid. <a href="#">Læs hele artiklen</a> </p>
						</li>
						<li class="live-item-tweet">
							<time><? dummy("text@time-ago") ?></time>
							<p><strong>Markederne i grønt i dag i hele Norden</strong></p>
							<p>ATP-direktør Carsten Stendevad kalder pensionsgigantens investering i Nets for en af de bedste i meget lang tid. På lidt over to år ser  ... </p>
							<blockquote class="twitter-tweet" data-lang="da"><p lang="en" dir="ltr">Silicon Valley&#39;s relationship with India may be about to get even more fraught <a href="https://t.co/0wdWERyf8k">https://t.co/0wdWERyf8k</a> <a href="https://t.co/hPqhbr2pSF">pic.twitter.com/hPqhbr2pSF</a></p>&mdash; Bloomberg (@business) <a href="https://twitter.com/business/status/776000873336012800">14. september 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						</li>
						<li class="live-item-facebook">
							<time><? dummy("text@time-ago") ?></time>
							<p><strong>Her er et Facebook element</strong></p>
							<p><? dummy("text@teaser") ?></p>

							<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fberlingske%2Fposts%2F10153899266193133&width=500" width="500" height="466" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</li>
					</ul>	
				</div>



			</div><!-- col -->

		<!-- SIDEBAR  -->
		<aside class="col-md-4 col-md-pull-8 hidden-sm hidden-xs">
			<div class="article-sidebar article-content-stream">
				<?php  include('inc/article-content-stream.php'); ?>
			</div><!-- article-sidebar -->
		</aside><!-- col -->


		</div><!-- row -->
	</article>  


      

      
      <?php include('./inc/asset-article-below.php'); ?>

      

    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
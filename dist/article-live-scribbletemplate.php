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
				
				<div id="scribblelive"></div>

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
						<?php 
							// $liveType teaser, facebook, twitter, sticky, text
							$liveType = 'teaser';
							include('inc/live-item.php');

							$liveType = 'text ';
							include('inc/live-item.php');

							$liveType = 'text';
							include('inc/live-item.php');

							$liveType = 'text big-item';
							include('inc/live-item.php');


							$liveType = 'twitter';
							include('inc/live-item.php'); 

							$liveType = 'stock';
							include('inc/live-item.php');

							$liveType = 'text ';
							include('inc/live-item.php');

							$liveType = 'text';
							include('inc/live-item.php');

							$liveType = 'text big-item';
							include('inc/live-item.php');

							$liveType = 'facebook';
							include('inc/live-item.php'); 
							 ?>



						

						

						

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
<? require_once("../../dummy/dummy.php") ?>
<?php 
if (isset($_GET['paywall'])) {
    $paywall = $_GET['paywall'];
}
?>

<?php $imageSize = rand(1,1); ?>



<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>



  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->



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
        <header class="article-head">

          <a href="section.php" title="TITLE" class="article-tag"><span><? dummy("text@biz-cat") ?></span></a>
          <h1 class="heading"><? dummy("text@headline") ?></h1>


          <div class="article-date">Mandag d. <time datetime="2014-02-14"><? dummy("text@pol-date") ?> kl. <? dummy("text@time") ?></time> <? if (dumb_luck("25%")): ?><span class="date-updated">- Opdateret <time datetime="2014-02-14"> kl. <? dummy("text@time") ?></time></span><? endif ?></div>



            


          
          <?php if($imageSize == '0'): ?>
           

           <? if (dumb_luck("50%")): ?>
           
           <?php include('inc/asset-article-image-slider.php'); ?>

            <? else: ?>

              <?php include('inc/asset-article-image.php') ?>

            <? endif ?>

          <?php endif; ?>

        
          

          

        </header>

        <div class="banner banner-top-article desktop-banner hidden-xs">
          <? dummy("ad@930x80") ?>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-push-4">
          
            <div class="article-content ">
            
            
          

          
                

            

              <?php include('inc/asset-article-image.php') ?>

            

              

              

              <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="icon-social-sms visible-xs-inline-block">SMS</a>

                    <a href="mailto:?subject=Artikel fra Business.dk&body=[ARTICLE URL]" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments">
                    <span class="icon-text scroll-comments">48</span> 
                    </a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
              </div>

              
              
              
              
              <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>

              <?php include('inc/asset-article-byline.php'); ?>

        
              
              <div class="content <?php if($paywall === 'soft'): ?> article-body--cutoff <?php endif; ?>">

				<?php if($paywall === 'soft'): ?>
					<?php include('inc/paywall.php'); ?>
				<?php endif; ?>

             
              


			<?php if($paywall == 'hard'): ?>	
        <? while (dumb_luck("3")): ?>
      <p><? dummy("text@paragraph") ?></p>
    <? endwhile ?>
				<?php include('inc/paywall.php'); ?>


			<?php endif; ?>
            
            <?php if($paywall !== 'hard'): ?>  
            

				
            	            <!-- <div class="article-fact-float-right article-fact-graph module-sm">
                            <div class="visible-xs text-center">
                              <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=340&h=206&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                            </div>
                            <div class="visible-sm text-center">
                              <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=278&h=150&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                            </div>
                            <div class="visible-md visible-lg">
                              <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=208&h=150&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                            </div> -->
                              
                  
              <!-- <div class="section-sponsor-sm"><a href="http://www.nykredit.dk/#!/dit-liv/bolig/boligfinansiering/dagens-obligationskurser-udbetaling?ref=businessdk" target="_blank"><i class="fa fa-caret-right"></i> Aktuelle obligationskurser</a> <a href="http://www.nykredit.dk/#!/dit-liv/bolig/boligfinansiering/dagens-obligationskurser-udbetaling?ref=businessdk" target="_blank"><img src="images/nykredit_logo_negativ.jpg" class="sponsor-logo"></a></div> -->


                          <!-- </div> -->

                          <p><? dummy("text@paragraph") ?></p>

                          <? if (dumb_luck("25%")): ?>
                            <!-- *** Asset - factbox theme-->
                            <?php // include("inc/asset-article-factbox-theme.php"); ?>
                          <? endif ?>

                          <? if (dumb_luck("100%")): ?>
                          
                            <? if (dumb_luck("50%")): ?>
                            <!-- *** Asset - factbox float right-->
                            <?php // include("inc/asset-article-factbox-float-right.php"); ?>
                          
                            <? else: ?>
                            <!-- *** Asset - factbox timeline  -->
                            <?php // include("inc/asset-article-factbox-timeline.php"); ?>
                            <? endif ?>


                          <? endif ?>
            	


				
				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<?php include('inc/article-link-embedded.php'); ?>


				<p><? dummy("text@paragraph") ?></p>
				<!-- *** Asset - factbox float right-->
				<?php include("inc/asset-article-factbox-embedded.php"); ?>


				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<? if (dumb_luck("100%")): ?>
				<!-- *** Asset - factbox theme-->
				<?php include("inc/asset-article-quiz.php"); ?>
				<? endif ?>

				<h2>H2:<? dummy("text@item") ?></h2>

				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

				<? if (dumb_luck("50%")): ?>
				<div class="media-embeds">
				<blockquote class="twitter-tweet" lang="da"><p>Jubii! 11,8 millioner fra A. P. Møller Fonden til Helsingør Kommune! God dag;-) <a href="https://twitter.com/SthePol">@sthepol</a>&#10;<a href="http://t.co/LWfd9iStaU">http://t.co/LWfd9iStaU</a></p>&mdash; Benedikte Kiær (@benediktekiaer) <a href="https://twitter.com/benediktekiaer/status/533231937037414400">14. november 2014</a></blockquote>
				<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<? else: ?>
				<blockquote class="bond-quote">

				<p>
				<? dummy("text@teaser") ?>
				</p>
				<small><? dummy("text@author") ?>- <? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?></small>
				<div class="quote-share">SHARE QUOTE <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></div>

				</blockquote>
				<? endif ?>

				<h3>H3:<? dummy("text@item") ?></h3>
				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
				<div class="sm-notitification">Article continues after factbox &hellip;</div>


				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>


				<? if (dumb_luck("50%")): ?>
				<!-- EMBEDDED IMAGE -->
				<?php include("inc/asset-article-image-embedded.php"); ?>


				<? endif ?>


				<? if (dumb_luck("50%")): ?>
				<!-- VIDEOS -->
				<div class="article-video">
				<iframe width="425" height="349" src="http://www.youtube.com/embed/FKWwdQu6_ok" frameborder="0" allowfullscreen></iframe>
				</div>
				<? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
				<? endif ?>

				<?php include("inc/asset-article-letterbox.php"); ?>


				<?php include('inc/asset-article-tags.php'); ?>


				<div class="article-social text-center">
				<a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
				<a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
				<a href="mailto:?subject=Artikel fra Business.dk&body=[ARTICLE URL]" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
				</div>


				<aside class="article-related-chunk list-xs module">
				<h1 class="section-header">Read also</h1>
				<ul>
				<? while (dumb_luck("2")): ?>
				<li class="teaser ">
				<figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@100x,16:9,") ?>" width="" height="" alt="" /></a></figure>
				<div class="teaser-body">
				<h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>
				<footer><time> 3d.</time></footer>
				</div>

				</li>
				<? endwhile ?>
				</ul>

				<div class="module-top-sm text-center">
				<a href="#" class="btn btn-primary btn-sm">Load more <i class="fa fa-caret-down"></i></a>
				</div>
				</aside>

			<?php endif; ?>

             


             


              
              
              <div class="comments" id="article-comments">

              <div id="disqus_thread"></div>
    

                
                <button class="btn  btn-block btn-sm btn-secondary show-comments"><i class="fa fa-comment"></i> <? if (dumb_luck("50%")): ?>Show  <? dummy("text@number") ?> comments<? else: ?> Add comment<? endif ?></button>

              


                
             
              

              
    
    

    


              </div>

              </div><!-- content -->



            </div><!-- article-content -->
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
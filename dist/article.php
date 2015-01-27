<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(1,3); ?>

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



            <?php include('inc/asset-article-byline.php'); ?>


          
          <?php if($imageSize == '0'): ?>
           

           <? if (dumb_luck("50%")): ?>
           
           <?php include('inc/asset-article-image-slider.php'); ?>

            <? else: ?>

              <?php include('inc/asset-article-image.php') ?>

            <? endif ?>

          <?php endif; ?>

        
          

          

        </header>

        <div class="banner banner-top-article desktop-banner">
          <? dummy("ad@930x80") ?>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-push-4">
          
            <div class="article-content">
              <?php if($imageSize == '1'): ?>
                

            <? if (dumb_luck("50%")): ?>
           
           <?php include('inc/asset-article-image-slider.php'); ?>

            <? else: ?>

              <?php include('inc/asset-article-image.php') ?>

            <? endif ?>

              <?php endif; ?>

              <?php if($imageSize == '3'): ?>
              <div class="test-article-webtv">
                WEB TV player
              </div>
            <?php endif; ?>

              <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="icon-social-default"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
              </div>

              
              
              
              
              <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>
              <? if (dumb_luck("25%")): ?>
                <!-- *** Asset - factbox theme-->
                <?php include("inc/asset-article-factbox-theme.php"); ?>
              <? endif ?>


              <? if (dumb_luck("100%")): ?>
              
                <? if (dumb_luck("50%")): ?>
                <!-- *** Asset - factbox float right-->
                <?php include("inc/asset-article-factbox-float-right.php"); ?>
              
                <? else: ?>
                <!-- *** Asset - factbox timeline  -->
                <?php include("inc/asset-article-factbox-timeline.php"); ?>
                <? endif ?>


              <? endif ?>

 

              
              <? if (dumb_luck("50%")): ?>
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
              <div class="embedded-node">
                <iframe src="http://cf.datawrapper.de/2W39o/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="100%" height="417"></iframe>
               </div>
            <? endif ?>
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              <div class="article-link-embedded">
                <figure>
                <a href="article.php" title="TITLE"><img src="<? dummy("image@70x,16:9") ?>" width="" height="" alt="" /></a>
                </figure>
                <div class="teaser-body">
                  <span>Læs også:</span>
                  <a href="article.php" title="TITLE"><? dummy("text@headline") ?></a>  
                </div>
                
              </div>
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
              <div class="article-link-embedded">
                <figure>
                <a href="article.php" title="TITLE"><img src="<? dummy("image@70x,16:9") ?>" width="" height="" alt="" /></a>
                </figure>
                <div class="teaser-body">
                  <span>Læs også:</span>
                  <a href="article.php" title="TITLE"><? dummy("text@headline") ?></a>  
                </div>
                
              </div>

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
              </div>


              <aside class="article-related-chunk list-xs">
                <h1 class="aside-header">Related articles</h1>
                <ul>
                  <? while (dumb_luck("4")): ?>
                  <li class="teaser">
                      <figure><a href="article.php"><img src="<? dummy("image@60x60,") ?>" width="" height="" alt="" /></a></figure>
                      <div class="teaser-body">
                        <h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>
                        <footer><time> 3d.</time></footer>
                      </div>

                  </li>
                  <? endwhile ?>
                </ul>

                <div class="module-top text-center">
                  <a href="#" class="btn btn-primary btn-xs">Load more</a>
                </div>
              </aside>


              
              <div class="comments" id="article-comments">
                
             



                <br><br><br>
                  <div class="text-center">Comments from Disquss </div>
                  <br><br><br>

              </div>



            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <aside class="col-md-4 col-md-pull-8">
          <div class="article-sidebar">


          <?php include('inc/article-content-stream.php'); ?>

          
          
            </div><!-- article-sidebar -->
          </aside><!-- col -->


        </div><!-- row -->
      </article>  

      <section class="deck">
      
        <div class="col-md-12">
            <h1 class="section-header">Seneste nyt</h1>
        </div>

        
        
          <ul class="list-clean flex-4-2-2">
            <? while (dumb_luck("8")): ?>
              <li>
                <article class="teaser col-md-3 col-sm-3 col-xs-6">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                  <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                </article>
                </li>
            <? endwhile ?>
          </ul>

          <footer class="deck-footer text-center">
            <button type="button"  data-loading-text="Loading..." class="btn btn-primary btn-sm btn-loading" autocomplete="off">Load more</button>
          </footer>

      </section>

      


    <section class="deck">
      <div class="col-md-12">
      <? // dummy("ad@biz-features") ?>
      </div>  
    </section>
    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
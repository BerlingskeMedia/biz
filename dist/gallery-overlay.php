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

              <?php if($imageSize == '2'): ?>
              <div class="test-article-webtv">
                WEB TV player
              </div>
            <?php endif; ?>

              <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
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
                <h1 class="aside-header">Read also</h1>
                <ul>
                  <? while (dumb_luck("4")): ?>
                  <li class="teaser">
                      <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@100x,16:9,") ?>" width="" height="" alt="" /></a></figure>
                      <div class="teaser-body">
                        <h3 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h3>
                        <footer><time> 3d.</time></footer>
                      </div>

                  </li>
                  <? endwhile ?>
                </ul>

                <div class="module-top-sm text-center">
                  <a href="#" class="btn btn-primary btn-sm">Load more</a>
                </div>
              </aside>


              
              <div class="comments" id="article-comments">
                
             

                <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'biztesting'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    


              </div>



            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <aside class="col-md-4 col-md-pull-8">
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

    
    <div class="gallery-overlay show-caption">
      <button class="gallery-close"><i class="fa fa-close"></i></button>
      <a class="gallery-arrow arrow-prev" href="#" ></a>
      <a class="gallery-arrow arrow-next" href="#" ></a>
      <div class="gallery-caption">
        
        <p><? dummy("text@teaser") ?> <span>Photo: <? dummy("text@author") ?></span></p>

      </div>
      <div class="gallery-tools">
      
        <div class="gallery-counter">
          <strong>2</strong> out of <strong>22</strong>
        </div>
        <button class="gallery-btn-show-caption"><i class="fa fa-caret-up"></i> <span>Skjul beskrivelse</span></button>
      </div>
      <figure style="background-image: url(<? dummy("image@1600x,") ?>);" class="gallery-image">
      
      </figure>
    </div>


  </body>
</html>
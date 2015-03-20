<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-large">
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


          <div class="article-date">Mandag d. <time datetime="2014-02-14"><? dummy("text@pol-date") ?> kl. <? dummy("text@time") ?></time> <? if (dumb_luck("25%")): ?><span class="date-updated">OPDATERET <time datetime="2014-02-14"> kl. <? dummy("text@time") ?></time></span><? endif ?></div>



             <?php include('inc/asset-article-byline.php'); ?>


          <? if (dumb_luck("50%")): ?>
            <figure class="article-image">
              <img src="<? dummy("image@940x,16:9") ?>" alt="" class="img-responsive" />
              <? if (dumb_luck("50%")): ?><figcaption><i class="fa fa-camera"></i> <? dummy("text@teaser") ?> <span> Foto: <? dummy("text@author") ?></span></figcaption><? endif ?>
            </figure>
          <? endif ?>

          

          

        </header>

        <div class="banner banner-top-article desktop-banner">
          <? dummy("ad@930x80") ?>
        </div>

        <div class="row">
          <div class="col-md-12">
          
            <div class="article-content">


              <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="mailto:?subject=Artikel fra Business.dk&body=[ARTICLE URL]" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
              </div>

              
              
              
              
              <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>
              


              
 

              
              
              <div class="embedded-node">
              <iframe src="http://cf.datawrapper.de/2W39o/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="100%" height="417"></iframe>
              </div>
              

            

             
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              
             

              
              
              <!-- VIDEOS -->
              <div class="article-video">
                <iframe width="425" height="349" src="http://www.youtube.com/embed/FKWwdQu6_ok" frameborder="0" allowfullscreen></iframe>
              </div>
              
              

              

              
              <?php include('inc/asset-article-tags.php'); ?>


              <div class="article-social text-center">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="mailto:?subject=Artikel fra Business.dk&body=[ARTICLE URL]" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
              </div>

              
               
               
              


                <div class="row">
                  

                  <div class="col-md-8 col-md-push-2">
                    
                     <aside class="article-related-chunk list-xs ">
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



                  </div><!-- col -->
                </div>
              
              



          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          


        </div><!-- row -->
      </article>  

      

        <?php include('./inc/asset-article-below.php'); ?>


    
    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
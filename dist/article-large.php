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



            <div class="article-byline">
              <? while (dumb_luck("1-3")): ?>
                <div class="article-author">
                  <figure><img src="<? dummy("image/!author@30x30,") ?>" width="" height="" alt="" /></figure>
                  <span><? dummy("text@author") ?><br><a href="#" class="follow-author">Follow <i class="fa fa-caret-down"></i></a></span>
              </div>
            <? endwhile ?>
            </div>    


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
                    <a href="#" class="icon-social-default"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
              </div>

              
              
              
              
              <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>
              


              
 

              
              
              
              <iframe src="http://cf.datawrapper.de/2W39o/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="100%" height="417"></iframe>
              
              

            

             
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
              </div>

              <!-- READ ALSO -->
               
                <section class="module-top-lg module">
                
              <h1 class="section-header">Read also</h1>
              
              <ul class="list list-xs ">
              <? while (dumb_luck("5")): ?>
                <li class="teaser">
                  <div class="teaser-body">
                  <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                  <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                  </div>
                  </li>
                <? endwhile ?>
              </ul>

              </section><!-- read also -->
              


              <div class="row">
                
              <div class="col-md-6">
                
                 <section>
                
              <h1 class="section-header">Read also</h1>
              
              <ul class="list list-xs ">
              <? while (dumb_luck("5")): ?>
                <li class="teaser">
                  <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
                  </li>
                <? endwhile ?>
              </ul>

              

              </section><!-- read also -->


              </div><!-- col -->
              <div class="col-md-6">
              
                  
      <section>
    <h1 class="section-header">Most read</h1>
      <ul class="list toplist toplist-lg list-xs list-image-right">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <? if (dumb_luck("66%")): ?><figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
      </section>

                  

              </div>
              </div>
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
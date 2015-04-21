<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,1); ?>

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



            

          

        </header>

        <div class="banner banner-top-article desktop-banner">
          <? dummy("ad@930x80") ?>
        </div>

        <div class="row">
          <div class="col-md-12 ">
          
            <div class="article-content">
            

              <div class="article-video"></div>
              

              <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="mailto:?subject=Artikel fra Business.dk&body=[ARTICLE URL]" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
              </div>

              
                
              
                <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>
                <?php include('inc/asset-article-byline.php'); ?>
                
              <? if (dumb_luck("50%")): ?><p><? dummy("text@paragraph") ?></p><? endif ?>
              

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
    


              </div><!-- comments -->

              
              
              
              
              
              

               
              
           

              
              
              <?php include('inc/asset-article-tags.php'); ?>









              
              



              <section class="row module-sm module-top">

              <div class="col-md-12">
                  <h1 class="section-header">
                    Latest Business TV
                  </h1>
              </div>  

          <? while (dumb_luck("2")): ?>

          <div class="col-md-6">
          <article class="teaser teaser-video">
          <figure class="teaser-img"><a href="article-video.php"><img src="<? dummy("image@720x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> 3t.</time></footer>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article-video.php">
          <? dummy("text@headline") ?></a></h2>
        </article>
        </div>

            <? endwhile ?>

            
            </section>

            <section class="row module-sm">

              
              

      <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser teaser-video">
          <figure class="teaser-img"><a href="article-video.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> 3t.</time></footer>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article-video.php">
          <? dummy("text@headline") ?></a></h2>
        </article>
        </li>
      <? endwhile ?>
    </ul>
    

      <div class="col-md-12 text-center">
                <button class="btn btn-sm btn-primary">Load more <i class="fa fa-caret-down"></i></button>
            </div>
    </section>

    <? while (dumb_luck("4")): ?>

     <section class="row  deck">

              
              <div class="col-md-12">
                  <h1 class="section-header">
                    <? dummy("text@biz-cat") ?>
                  </h1>
              </div>  
              

      <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser teaser-video">
          <figure class="teaser-img"><a href="article-video.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> 3t.</time></footer>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article-video.php">
          <? dummy("text@headline") ?></a></h2>
        </article>
        </li>
      <? endwhile ?>
    </ul>
    
    </section>

    <? endwhile ?>

     

    



            </div><!-- article-content -->
          </div><!-- col -->
          




        </div><!-- row -->
      </article>  


      

      
      <?php include('./inc/asset-article-below.php'); ?>

      

    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
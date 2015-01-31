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
      



      
      <div class="col-md-8">
          

          <article class="teaser teaser-img-right header-20 teaser-img-380 teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            <p><? dummy("text@teaser") ?></p>
            </div>
          </article>


          <article class="teaser teaser-img-left header-20 teaser-img-220">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            

  <p><? dummy("text@teaser") ?></p>
  <ul class="related">
    <? while (dumb_luck("1-3")): ?><? dummy("text@biz-related") ?><? endwhile ?>
  </ul>

            </div>
          </article>



          <div class="divider"></div>

            <div class="row">
            
            <? while (dumb_luck("3")): ?>
            <div class="col-md-4">
            <article class="teaser ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@220x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
          </div>
            <? endwhile ?>            

          </div>





        </div>

        <div class="col-md-4">
          <div class="banner module-sm">
              <? dummy("ad@300x250") ?>
            </div>

             <article class="teaser header-20 ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            

            <p><? dummy("text@teaser") ?></p>
  

            </div>
          </article>
        </div>

      





      

    </div><!-- row -->

    <div class="row">
      <div class="col-md-12">
        <div class="banner module-sm">BANNER</div>
      </div>
    </div>
    <? while (dumb_luck("2")): ?>

    <div class="row">
      
      <div class="col-md-3">
        <article class="teaser header-20 teaser-border-right-alt">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            

            
  

            </div>
          </article>
      </div>

      <? while (dumb_luck("3")): ?>
      <div class="col-md-3">
        <? while (dumb_luck("2")): ?>
        <article class="teaser header-15 teaser-border-bottom-last-child teaser-border-right teaser-fixed-height-lg">
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
           </div>
          </article>
      <? endwhile ?>
      </div>
      <? endwhile ?>

    </div>

  <? endwhile ?>



<div class="row">
  
    <div class="col-md-12 ">
  <section class="deck">    
        <diw class=" theme-container theme-dark">
            <div class="td-25 theme-title">
              <h2 class="theme-header">Business TV</h2>
              <p><a href="#">Se LIVE TV <i class="fa fa-caret-right"></i></a></p>
            </div>
            <? while (dumb_luck("3")): ?>
            
            <article class="teaser td-25">
              <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </article>
            <? endwhile ?>

        </diw>
</section>
    </div>
  
</div>

    <div class="row ">
    <section class="deck">
    <div class="col-md-12">
      <h1 class="deck-header">
        Longreads
      </h1>
    </div>
      <? while (dumb_luck("2")): ?>
      <div class="col-md-6">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <? endwhile ?>
</section>
    </div>

      <div class="row">
      <section class="deck">
      <? while (dumb_luck("3")): ?>
      <div class="col-md-4">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <? endwhile ?>
      </section>
      

    </div>

    <div class="row">
      <section class="deck">
 <ul class="list-clean flex-4-2-2">
            <? while (dumb_luck("8")): ?>
              <li class="col-md-3 col-sm-6 col-xs-6">
                <article class="teaser ">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image/!ecommerce-biz@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  <div class="teaser-body">
                  <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                  <h2 class="header"><a href="article.php"><? dummy("text@ecommerce") ?></a></h2>
                  </div>
                </article>
                </li>
            <? endwhile ?>
          </ul>
</section>
    </div>






  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
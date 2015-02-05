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
    <div class="col-md-12">
      
          <h1 class="deck-header"><? dummy("text@biz-cat") ?></h1>
      
      
    </div>
      
      <div class="col-md-8 col-sm-8">
        <div class="row">
        <? while (dumb_luck("2")): ?>
          
            <div class="col-md-6 col-sm-6">
              <article class="teaser header-20 teaser-margin-bottom-0 teaser-sx-500">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@500x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                <p><? dummy("text@teaser") ?></p>
                </div>
              </article>
            </div>
          
        <? endwhile ?>
        </div>
        <div class="row">
        <div class="col-md-12">
        <article class="teaser teaser-section header-20 teaser-border-bottom teaser-border-top">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                <p><? dummy("text@teaser") ?></p>
                </div>
              </article>
          <? while (dumb_luck("20")): ?>
          
              <article class="teaser teaser-section header-20 teaser-border-bottom">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                <p><? dummy("text@teaser") ?></p>
                </div>
              </article>
            
          
        <? endwhile ?>
        </div>
        </div><!-- row -->


        <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">Previous</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li class="active"><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">8</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
  </ul>
</nav>


      </div>

      <div class="col-md-4 col-sm-4 hidden-xs">
      <div class="banner module-sm hidden-sm hidden-sx">
        <? dummy("ad@300x600") ?>
      </div>
        <section class="module-sm">
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

       <div class="banner module-sm hidden-sm hidden-sx">
        <? dummy("ad@300x250") ?>
      </div>

      </div>

    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
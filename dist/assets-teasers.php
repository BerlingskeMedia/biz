<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <?php // include("./inc/header.php"); ?>



  <div class="container">



  <section class="deck">
      <div class="row">
        <div class="col-md-12">
            <h1 class="section-header">Business Premium<a href="#" class="pull-right">Se alle</a></h1>
        </div>

     
          <ul class="list-clean flex-4-2-1">
            <? while (dumb_luck("4")): ?>
              <li>
                <article class="teaser teaser-ecommerce col-md-3 col-sm-4 col-xs-6">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image/!ecommerce-biz@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  
                  <h2 class="header"><a href="article.php"><? dummy("text@ecommerce") ?></a></h2>
                  <div class="teaser-price"><a href="http://www.berlingske.dk/shop" target="_blank" class="btn btn-xxs btn-secondary">Køb</a> <span class="price"><? dummy("text@number") ?> kr.</span></div>
                </article>
                </li>
            <? endwhile ?>
          </ul>

          
        </div>
      </section>

      <section class="deck">
        <div class="row">
        <div class="col-md-12">
            <h1 class="section-header">Gode tilbud i Berlingske Shop <a href="#" class="pull-right">Gå til shoppen</a></h1>

        </div>

        
        
          <ul class="list-clean flex-4-2-1">
            <? while (dumb_luck("3")): ?>
              <li>
                <article class="teaser teaser-ecommerce col-md-4 col-sm-4 col-xs-6">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image/!ecommerce-biz@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  
                  <h2 class="header"><a href="article.php"><? dummy("text@ecommerce") ?></a></h2>
                  <div class="teaser-price"><a href="http://www.berlingske.dk/shop" target="_blank" class="btn btn-xxs btn-secondary">Køb</a> <span class="price"><? dummy("text@number") ?> kr.</span></div>
                </article>
                </li>
            <? endwhile ?>
          </ul>

      </section>


  <div class="row">
    
    <? while (dumb_luck("4")): ?>
    <div class="col-md-3 col-sm-6 col-xs-6">
      <article class="teaser teaser-fixed-height teaser-hover">
      <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a></figure>
      <footer><a href="section.php" class="cat"><? dummy("text@item") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
      <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
      <footer class="teaser-author">
        <figure class="author-image"><img src="<? dummy("image/!author@28x28,") ?>" width="" height="" alt="" />
        <figcaption class="author-name"><? dummy("text@author") ?><span class="author-title">Analytiker</span></figcaption>
        </figure>

      </footer>
      </article>
    </div>
    <? endwhile ?>
  </div>

  </div><!-- container -->
    



<div class="container">
    <div class="row">
    <div class="col-md-4">
      <ul class="toplist">
        <? while (dumb_luck("10")): ?>
          <li><a href="article.php"><? dummy("text@headline") ?></a></li>
        <? endwhile ?>
      </ul>
    </div>

    <div class="col-md-4">
      <ul class="toplist toplist-lg">
        <? while (dumb_luck("10")): ?>
          <li><a href="article.php"><? dummy("text@headline") ?></a></li>
        <? endwhile ?>
      </ul>
    </div>

  </div>
</div>


  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
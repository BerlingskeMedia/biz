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
      <ul class="toplist toplist-large">
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
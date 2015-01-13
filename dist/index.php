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


  <header class="site-header container">
    <div class="row">
    
    <div class="col-sm-6">
      <nav class="super-header">
        <ul>
          <li><a href="#">Berlingske.dk</a></li>
          <li><a href="#">Politiko.dk</a></li>
        </ul>
      </nav>
    </div>
    <div class="col-sm-6">
      <nav class="super-header text-right">
        <ul>
          <li><a href="#" class="sosume">Privatlivspolitik</a></li>
          <li><a href="#">Annoncør</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </nav>
    </div>
      <div class="col-sm-12">
        <a href="/" class="logo">
          Berlingske Business
        </a>    
      </div>
    </div>
    
  </header>
  <div class="container">
    
    <div class="row">
      <section class="deck">

      
      <div class="col-md-12">
          <h1 class="section-header">Seneste nyt</h1>
      </div>
      <? while (dumb_luck("4")): ?>
        <div class="col-md-3">
            <article class="teaser">
              <figure class="teaser-img">
                <a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
              </figure>
              <footer><a href="section.php" class="cat"><? dummy("text@item") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </article>
        </div>
      <? endwhile ?>
      </section>
    </div>

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
  </div><!-- container -->
    

  <?php include("./inc/footer.php"); ?>
    
  </body>
</html>
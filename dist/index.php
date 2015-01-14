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
      <section class="deck">

      
      <article class="col-md-12">
        <header class="article-head">

          <a href="section.php" title="TITLE" class="article-tag"><span><? dummy("text@item") ?></span></a>
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
              <? if (dumb_luck("50%")): ?><figcaption><? dummy("text@teaser") ?> <span> Foto: <? dummy("text@author") ?></span></figcaption><? endif ?>
            </figure>
          <? endif ?>

          

          

        </header>

        <div class="banner banner-top-article desktop-banner">
          <? dummy("ad@930x80") ?>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-push-4">
          
            <div class="article-content">


              <div class="article-social">
                    <a href="#" class="icon-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="icon-letter"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-letter"><i class="fa fa-comment"></i></a></span>
              </div>

              <h2 class="article-summary">
                <? dummy("text@teaser") ?>
              </h2>


                
              
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              <aside class="article-fact">
              

              <div class="fact-fader">
                <span class="fact-toggle"><b>Udvid faktaboks</b><i class="fa fa-expand"></i></span>
              </div>
                <h1><? dummy("text@headline") ?></h1>
                <p><? dummy("text@paragraph") ?></p>
                <figure>
                <img src="<? dummy("image@250x,") ?>" width="" height="" alt="" />
                </figure>
                <p><? dummy("text@paragraph") ?></p>
              </aside>

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
            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <aside class="col-md-4 col-md-pull-8">
          <div class="article-sidebar">
            <div class="module-sm banner">
              <? dummy("ad@300x250") ?>
            </div>
              <section class="module-sm">
                
                  <? while (dumb_luck("4")): ?>
                    <article class="teaser teaser-thumb-sm">
                      <figure><a href="article.php"><img src="<? dummy("image@40x40,") ?>" width="" height="" alt="" /></a></figure>
                      <div class="teaser-body">
                        <footer><a href="section.php" class="cat"><? dummy("text@item") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
                        <a href="article.php"><? dummy("text@headline") ?></a>
                      </div>
                    </article>
                  <? endwhile ?>
                
              </section>
            </div><!-- article-sidebar -->
          </aside><!-- col -->
        </div><!-- row -->
      </article>  
        
      <div class="col-md-12">
          <h1 class="section-header">Seneste nyt</h1>
      </div>
      <? while (dumb_luck("4")): ?>
        <div class="col-md-3 ">
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
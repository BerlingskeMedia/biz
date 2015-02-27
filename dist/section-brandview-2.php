<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="section-brandview">



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
        <header class="section-header-brandview ">
  
    <a href="section-brandview.php" class="logo-brandview">BrandView</a>

</header>


      <div class="row">

          <div class="col-md-12">
          <div class="header-deck-display">
            
            <h1> <? dummy("text@brandview-topics") ?></h1>
            <a href="section-brandview.php"><span class="logo-brandview"></span></a>

            <div class="ad-label">Udarbejdet i samarbejde med BrandViews partnere</div>
          </div>

          </div>
        </div>


      </div>
      <div class="col-md-12 col-sm-12 module-sm">
      
        
     
     <div class="row">

          <? while (dumb_luck("2")): ?>

          <div class="col-md-6 col-sm-6 col-xs-6">

          <article class="teaser teaser-brandview header-20">
            <figure class="teaser-img">
            <a href="article-brandview.php"><img src="<? dummy("image@900x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
          <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
          <p>I samarbejde i <? dummy("text@company-names") ?></p>
          </div>
          </article>
          </div>

          <? endwhile ?>
          

        </div><!-- row -->

        <div class="row">
          
          <? while (dumb_luck("4")): ?>
          <div class="col-md-3 col-sm-3 col-xs-6">
          <article class="teaser teaser-brandview header-15">
            <figure class="teaser-img">
              <a href="article-brandview.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
            <p>I samarbejde i <? dummy("text@company-names") ?></p>
            </div>
          </article>
          </div>
          <? endwhile ?>

        </div><!-- row -->
     
     <div class="row">

          <? while (dumb_luck("2")): ?>

          <div class="col-md-6 col-sm-6 col-xs-6">

          <article class="teaser teaser-brandview header-20">
            <figure class="teaser-img">
            <a href="article-brandview.php"><img src="<? dummy("image@900x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
          <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
          <p>I samarbejde i <? dummy("text@company-names") ?></p>
          </div>
          </article>
          </div>

          <? endwhile ?>
          

        </div><!-- row -->

        <div class="row">
          
          <? while (dumb_luck("4")): ?>
          <div class="col-md-3 col-sm-3 col-xs-6">
          <article class="teaser teaser-brandview header-15">
            <figure class="teaser-img">
              <a href="article-brandview.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            <div class="teaser-body">
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
            <p>I samarbejde i <? dummy("text@company-names") ?></p>
            </div>
          </article>
          </div>
          <? endwhile ?>

        </div><!-- row -->
   

        
        

      </div>



    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
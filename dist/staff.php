<? require_once("../../dummy/dummy.php") ?>

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
      



    <section class="deck">
    <div class="col-md-12">
    <div class="well">
      <figure class="well-image">
      <img src="<? dummy("image/!biz-staff@940x,16:8") ?>" width="" height="" alt="" />
      <figcaption>Holdet bag Business.dk</figcaption>
    </figure>
      
    </div>
    
    </div>
      <div class="col-md-12">
          
        <? while (dumb_luck("3")): ?>


        <h2 class="page-header"><? dummy("text@biz-cat") ?></h2>
        <ul class="list-staff flex-4-3-2">
        
        <? while (dumb_luck("5-10")): ?>
        
          <li class="col-md-3 col-sm-4 col-xs-6 staff-overview">
              <figure><a href="author.php"><span class="hover-border"></span><img src="<? dummy("image/!author@150x150,") ?>" width="" height="" alt="" /></a></figure>
              <h1><a href="author.php"><? dummy("text@author") ?></a></h1>
              <h2><? dummy("text@teaser") ?></h2>
          </li>

          <? endwhile ?>
        
      </ul>

      <? endwhile ?>
      </div>  
    </section>

    <section class="deck">
      
      <div class="col-md-12">
        
        <div class="well">
          
          <h1 class="page-header">
            Vil du skrive for Business.dk?
          </h1>

          <div class="text-center"><a href="#" class="btn btn-primary">Søg job</a></div>

          <br>
          <div class="text-center"><a href="#" class="btn btn-lg btn-facebook">Følg os på Facebook</a></div>
        </div>

      </div>

    </section>
    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
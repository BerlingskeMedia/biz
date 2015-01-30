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
    <div class="col-md-12">
      <h1><? dummy("text@author") ?></h1>
    </div>
    <div class="col-md-4">
        <figure><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt=""  class="img-responsive"/></figure>
    </div>

    <div class="col-md-5">
      <p><? dummy("text@paragraph") ?></p>
    </div>
    <div class="col-md-3">
      <ul class="list-author">
        <li>
          <b>Twitter</b>
          <i class="fa fa-twitter"></i> <a href="#">@username</a>
        </li>
        <li>
          <b>Facebook</b>
          <i class="fa fa-facebook"></i> <a href="#">facebook.com/boskakke</a>
        </li>
        <li>
          <b>LinkedIn</b>
          <i class="fa fa-linkedin"></i> <a href="#">linkedin.com/username</a>
        </li>
      </ul>
    </div>
  </div>
  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
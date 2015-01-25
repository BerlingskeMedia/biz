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


  

  <div class="container">
    
      
<div class="row">
  
  <div class="col-md-8">
    
    <div class="image-carousel article-slider">
  
    <? while (dumb_luck("3-5")): ?>
    <div class="slide"><figure><img data-lazy="<? dummy("image@620x348,") ?>" height="348" width="620" /></figure></div>
    <? endwhile ?>
    <div class="slide"><figure><img data-lazy="<? dummy("image@620x448,") ?>" height="448" width="620"/></figure></div>
</div>

  </div>

<div class="col-md-4">
  <div class="image-carousel article-slider">
    <? while (dumb_luck("3-5")): ?>
    <div class="slide"><figure><img data-lazy="<? dummy("image@620x348,") ?>" height="348" width="620" /></figure></div>
    <? endwhile ?>
    <div class="slide"><figure><img data-lazy="<? dummy("image@620x448,") ?>" height="448" width="620"/></figure></div>
</div>
</div>
</div>
      
     

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
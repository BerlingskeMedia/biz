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
    
      
    

        


  

    <div class="col-md-8 col-sm-12">
    <ul class="clean">
      <? while (dumb_luck("5")): ?>
      <li><a href="<? dummy("image@x,") ?>" data-imagelightbox="g" ><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="<? dummy("text@teaser") ?>" /></a></li>
    <? endwhile ?>
    </ul>
      

    </div>
  




     
        


  


   






        
        

      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">

        


      

      </div>

    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
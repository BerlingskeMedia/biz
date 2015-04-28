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

  
    



  <?php include("./inc/footer.php"); ?>

    
    <div class="gallery-overlay show-caption">
      <button class="gallery-close"><i class="fa fa-close"></i></button>
      <a class="gallery-arrow arrow-prev" href="#" ></a>
      <a class="gallery-arrow arrow-next" href="#" ></a>
      <div class="gallery-caption">
        
        <p><? dummy("text@teaser") ?> <span>Photo: <? dummy("text@author") ?></span></p>

      </div>
      <div class="gallery-tools">
      <div class="pull-left">
        <div class="gallery-counter">
          <strong>2</strong> out of <strong>22</strong>
        </div>
        <button class="gallery-btn-show-caption"><i class="fa fa-caret-up"></i> <span>Skjul beskrivelse</span></button>
      </div>
        
        <div class="pull-right">
          <a href="#" class="icon-social-share visible-xs-inline-block"><i class="fa fa-share"></i></a>          

          <div class="mobile-menu">
            <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="icon-social-sms">SMS</a>
          </div>

        </div>

                
          
              


      </div>
      <figure style="background-image: url(<? dummy("image@1600x,") ?>);" class="gallery-image">
      
      </figure>
    </div>


  </body>
</html>
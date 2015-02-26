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
        <header class="header-sponsor-article header-brandview toggle-container">
  
  <a href="section-brandview.php" class="logo-brandview-dark">BrandView</a>
  

<nav class="small">
  <a href="#" class="toggle-btn">Om BrandView</a>   
  </nav>
  <div class="brandview-info toggle-content">
    <p>BrandView er en service fra Berlingske Media, hvor virksomheder har mulighed for at kommunikere deres specialviden direkte til brugere og læsere af Berlingske.</p>
    <p>Indhold under BrandView produceres i et tæt samarbejde mellem Berlingske Medias content marketing bureau og virksomheden, der er afsender på budskabet. Læs mere om <a href="http://www.publicimpact.dk/">BrandView</a> eller kontakt os direkte på <a href="mailto:moas@berlingslemedia.dk">moas@berlingslemedia.dk</a>.</p>    
  </div>

</header>

      


      </div>
      <div class="col-md-12 col-sm-12 module-sm">
      
        
     <? while (dumb_luck("3")): ?>
     <?php include('./inc/deck-brandview.php'); ?>
      <? endwhile ?>

   

        
        

      </div>



    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
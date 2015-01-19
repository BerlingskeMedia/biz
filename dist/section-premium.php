<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-category-premium">
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
      

      
      <section class="col-md-12">
        
        <?php include('inc/article-header-premium.php'); ?>

        

        

        <div class="row">
      <div class="col-md-12">
        <h1 class="section-title"><a href="frontpage-premium.php" class="home"><i class="fa fa-caret-left"></i> Premium Home</a>Analyser - bryggeri og ejendomme</h1>
      </div>        
          <div class="col-md-8  ">
          
            




<? while (dumb_luck("20")): ?>
<article class="teaser teaser-image-left teaser-premium teaser-divider header-25 ">
  
  <figure class="teaser-img">
    <a href="article-premium.php"><img src="<? dummy("image@200x,16:9") ?>" width="" height="" alt="" /></a>
  </figure>
  <div class="teaser-body">
  <h2 class="header">
    <a href="article-premium.php"><? dummy("text@headline") ?></a>
  </h2>
  <p><? dummy("text@teaser") ?></p>
  <p class="price"><? dummy("text@number") ?> kr <span class="logo-premium"><span>PREMIUM</span></span></p>
  </div>
</article>
<? endwhile ?>




        



            
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          
          <div class="col-md-4">

            <section class="module-xs">

              <h1 class="section-header section-header-alt">FÅ BESKED OM SENESTE ANALYSER, RAPPORTER OG GUIDES I BUSINESS PREMIUM</h1>
              


<form class="form-inline">
<div class="form-group">
 
 <div class="row">
   <div class="col-md-12">
  <input maxlength="128" value="" class="form-control input-sm" type="text" placeholder="Email">    
  <button class="btn btn-sm btn-primary">OK</button>
   </div>
 </div>
 <p class="small help-block">Vi udsender to til tre gange om måneden et nyhedsbrev om nye analyser, du kan hente i Premium.</p>
</div>
</form>



            </section> 
            

            <section>
  
    <h1 class="section-header">Seneste brancheanalyser</h1>
    
                <ul class="list  list-image-right ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <? if (dumb_luck("90%")): ?><figure class="teaser-img"><a href="article-premium.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
                      <div class="teaser-body">
                        <h2 class="header"><a href="article-premium.php"><? dummy("text@headline") ?></a></h2>
                        <p class="price"><? dummy("text@number") ?> kr <span class="logo-premium"><span>PREMIUM</span></span></p>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
          </div>

        </div><!-- row -->
      </section>  

      

      


    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
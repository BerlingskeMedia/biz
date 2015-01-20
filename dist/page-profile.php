<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="">
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
      

      
      <article class="col-md-12">
        
        <?php // include('inc/article-header-premium.php'); ?>

        

        

        <div class="row">
        
          <div class="col-md-8 col-md-push-2">
            
            <div class="article-content">

            <h1>Profil</h1>
            
            

<p>Med denne brugerprofil, har du mulighed for at se kommenterede artikler, samt seneste pressemeddelelser. Derudover kan du på Business oprette din virksomhed i Business Direct og dermed udgive pressemeddelelser m.m.</p>

<div class="article-profile module-sm">
<p><strong>Bo Skakke</strong><br>              
Skovkanten 74<br>
2850 Nærum<br>
bsk@berlingskemedia.dk</p>

<p class="small"><a href="page-profile-edit.php">Ret profil <i class="fa fa-pencil"></i></a></p>
            </div>

<h2>Opsigelse eller ændringer</h2>
<p> Ønsker du at opsige eller ændre dit abonnement?</a> <a href="https://b.kundeunivers.dk/" target="_blank">Gå til Kundeunivers <i class="fa fa-caret-right"></i></a></p>


<section >
<h1 class="section-header">Seneste pressemeddelelser</h1>
<ul class="list">
  <? while (dumb_luck("1-3")): ?>
<li class="teaser"><div class="teaser-body">
    <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
    </div>
    </li>
<? endwhile ?>
</section>
  </div>
</ul>






       


              
              

        
              

              

              
              

              <!-- READ ALSO -->
              
                
        
              


        



            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          


        </div><!-- row -->
      </article>  

      

      


    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
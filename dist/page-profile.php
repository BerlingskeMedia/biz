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
      

      
      
        
      <div class="col-md-12">
        <h1>Profil</h1>
      </div>
        
          <div class="col-md-8 ">
            
            

            
            
            

<p>Med denne brugerprofil, har du mulighed for at se kommenterede artikler, samt seneste pressemeddelelser. Derudover kan du på Business oprette din virksomhed i Business Direct og dermed udgive pressemeddelelser m.m.</p>

<div class="article-profile module-sm">
<p><strong>Bo Skakke</strong><br>              
Skovkanten 74<br>
2850 Nærum<br>
bsk@berlingskemedia.dk</p>

<p class="small"><a href="page-profile-edit.php">Ret profil <i class="fa fa-pencil"></i></a></p>
            </div>

<h3>Opsigelse eller ændringer</h3>
<p> Ønsker du at opsige eller ændre dit abonnement?</a> <a href="https://b.kundeunivers.dk/" target="_blank">Gå til Kundeunivers <i class="fa fa-caret-right"></i></a></p>



  




            
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <div class="col-md-4 ">
            
  <section class="module-sm">
          <h1 class="section-header">
            Adgang via ordrenummer
          </h1>
          <form class="form-inline">
            <p>Har du et ordrenummer, skal du logge ind og derefter indtaste dit 9-cifrede ordrenummer i feltet nedenfor.</p>
<div class="form-group">
 <label>Ordrenummer: </label>
 <div class="row">
   <div class="col-md-12">
  <input maxlength="128" value="" disabled="disabled" class="form-control input-sm" type="text">    
  <button class="btn btn-sm btn-default">OK</button>
   </div>
 </div>
 <p class="help-block">Indtast dit ordrenummer, hvis du har betalt via girokort</p>
</div>
</form>

          </section>

          <section class="module-sm">
          <h1 class="section-header">
            Aktiveringskode
          </h1>
          <form class="form-inline">
            
<div class="form-group">
 <label>Indtast aktiveringskode: </label>
 <div class="row">
   <div class="col-md-12">
  <input maxlength="128" value="" disabled="disabled" class="form-control input-sm" type="text">    
  <button class="btn btn-sm btn-default">OK</button>
   </div>
 </div>
 
</div>
</form>

          </section>

          <section >
<h1 class="section-header">Seneste pressemeddelelser</h1>
<ul class="list list-xs">
  <? while (dumb_luck("1-3")): ?>
<li class="teaser"><div class="teaser-body">
    <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
    </div>
    </li>
<? endwhile ?>
</ul>       
</section>

          </div>


        

      

      


    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
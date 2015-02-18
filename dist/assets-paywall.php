<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="show-paywall">
  
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->





<div class="article-metered">
<!-- <div class="branding">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
      <span class="business-brand">Business</span>
    </div>
    </div>
  </div>
  
</div> -->
  
  <div class="container">
  <div class="row">
    <div class="col-md-12">


 <? if (dumb_luck("100%")): ?>

 Du har ikke flere gratis artikler tilbage

<? else: ?>
  
  <h1>
    <span class="line-1">Kære læser</span>
    <span class="line-2">Vil du læse videre?</span>
  </h1>

  <p>Du har læst 10 gratis artikler på B.dk inden for de seneste 30 dage. Vi håber, du har nydt dem.</p>
  <p><button class="btn btn-primary btn-sm">Køb abonnement <i class="fa fa-caret-right"></i></button>  eller <strong><a href="#" data-toggle="modal" data-target="#modal-login">log ind</a></strong> for at fortsætte.</p>
  <p class="small">Brug for hjælp? Ring til Kundeservice på 33 75 36 36 mandag - fredag kl. 08 - 17.</p>


<? endif ?>

    </div>
    
  </div>
</div>
</div>




  <?php include("./inc/scripts.php"); ?>



  </body>
</html>
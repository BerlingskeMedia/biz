<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="page-searchresult">



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
    <div class="col-md-12 module">
      
          <h1 class="deck-header text-center">
          <div class="module-top">Tak for din tilmeldning</div>
          </h1>

          <p class="text-center">Du er nu tilmeldt nyhedsbrevet</p>



</div>      
    
      
      



      



    </div><!-- row -->

    <div class="row">
      
<section class="deck">



      <div class="col-md-4 col-sm-6 col-xs-12">
        
       <?php include('inc/asset-latest-news.php'); ?>

      </div><!-- col -->


 
      

      <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4">
        
       <?php include('inc/asset-most-read.php'); ?>

      </div><!-- col -->



      <div class="col-md-4 col-sm-12 col-xs-12 col-md-pull-4">
        
        <div class="row">

         <div class="banner  border-bottom">
            <? dummy("ad@300x250") ?>
         </div>
        
        <section class="col-md-12 col-sm-6">
            <div class="border-bottom">
              <p><strong><i class="fa fa-mobile"></i> Gratis breaking news på mobilen</strong></p>

        
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindelig takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>          
          
          </div>
        </section>


          
          <section class="col-md-12 col-sm-6">
          <div class="border-bottom">
              <p><strong>
              <i class="fa fa-envelope"></i> Tilmeld Business.dk nyhedsbrev</strong></p>
            <div class="row">
            <form class="form-signup ">
           <div class="col-sm-9 col-xs-10">
            <div class="form-group form-oneline-alt ">
            
            <? if (dumb_luck("50%")): ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Email" value="bsk@berlingskemedia.dk" aria-describedby="sizing-addon3">
            <? else: ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Indtast email" aria-describedby="sizing-addon3">
            <? endif ?> 
            <button class="btn btn-sm btn-primary btn-sm ">OK <!-- <i class="fa fa-caret-right"></i> --></button>
            </div>
            </div>

          </form>
          </div>
           </div>
          </section>

          <section class=" col-sm-12 col-md-12 ">
          <div class="marketing-subscription">
            <!-- <div class="subscription-logo">BERLINGSKE
              <span class="newspaper"></span>
            </div> -->
            <!-- <p><strong>Abonnement på Berlingske</strong></p> -->
            <a href="#" class="a-gray">
            <p class="small"><strong>Få avisen i tre måneder inkl. digital adgang. Kun 199 kr/md. <span class="pink">Klik her <i class="fa fa-caret-right"></i></span> </strong> </p>
            <p class="micro">Samlet engangspris 597,-. Abonnementet fortsætter til normalpris, indtil det opsiges</p>
            </a>
          </div>          
          </section>


     </div><!-- row -->

    
      </div><!-- col -->

     </section>


    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
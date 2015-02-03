<? require_once("../../dummy/dummy.php") ?>

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
      



    <section class="deck">
    <div class="col-md-12">
    <div class="well">
      
      
      <h1 class="page-header page-header-border">
        Holdet bag Business.dk
      </h1>  
    
      
    </div>
    
    </div>
      <div class="col-md-12">
          
        


        
        <ul class="list-staff flex-4-3-2">
        
        <? while (dumb_luck("5-25")): ?>
        
          <li class="col-md-3 col-sm-4 col-xs-6 staff-overview">
              <figure><a href="author.php"><span class="hover-border"></span><img src="<? dummy("image/!author@150x150,") ?>" width="" height="" alt="" /></a></figure>

              <h1><a href="author.php"><? dummy("text@author") ?></a></h1>

              <div class="text-center"><p class="small"><strong><a href="#" class="btn btn-default btn-sm a-gray" data-toggle="modal" data-target="#follow-author"><i class="fa fa-envelope-o"></i> Subscribe </a></strong></p></div>
              
              <h2><? dummy("text@teaser") ?>...</h2>

          </li>

          <? endwhile ?>
        
      </ul>

      
      </div>  
    </section>

    <section class="deck">
      
      <div class="col-md-12">
        
        <div class="well">
          
          <h1 class="page-header">
            Contact Business.dk
          </h1>

          <div class="text-center"><a href="mailto:mih@berlingskemedia.dk" class="btn btn-primary">Skriv en mail</a></div>

          <br>
          
        </div>

      </div>

    </section>
    </div>

  

  

  </div><!-- container -->
    
<!-- Modal -->
<div class="modal fade" id="follow-author" tabindex="-1" role="dialog" aria-labelledby="Follow author" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        
      </div>
      <div class="modal-body">

      <? if (dumb_luck("50%")): ?><!-- If user is logged in -->
      <p><i class="fa fa-check color-green"></i> You are now subscribing to <? dummy("text@author") ?>'s articles (initials@somesite.com). </p>
      <p class="small"><a href="page-profile.php">Edit your subscriptions</a></p>
      <? else: ?>
      <!-- If user is NOT logged in -->
      <p >Modtag e-mail når <? dummy("text@author") ?> publicerer en ny artikel</p>
      <form class="form-signup">
      <div class="form-group form-oneline ">
              <input type="email" id="signup" class="form-control input-sm" placeholder="Indtast din email">
              <button class="btn btn-sm btn-primary btn-sm ">Sign up</button>
            </div>
          </form>
          <? endif ?>
        

      </div>
      
    </div>
  </div>
  
</div>


  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
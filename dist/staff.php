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

              <div class="text-center"><p class="small"><strong><a href="#" class="btn btn-default btn-sm a-gray" data-toggle="modal" data-target="#follow-author"><i class="fa fa-plus"></i> Subscribe </a></strong></p></div>
              
              <h2><? dummy("text@teaser") ?>...</h2>

          </li>

          <? endwhile ?>
        
      </ul>

      
      </div>  
    </section>

    


<section class="deck">



      <div class="col-md-4 col-sm-6 col-xs-12">
        
        <section class="module-sm">
    
    <h1 class="section-header">Latest news</h1>
      

    <div role="tabpanel" class="tabs">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs-sm" role="tablist">
    <li role="presentation" class="active"><a href="#tab-business" aria-controls="business" role="tab" data-toggle="tab">Business</a></li>
    <li role="presentation"><a href="#tab-berlingske" aria-controls="tab-berlingske" role="tab" data-toggle="tab">Berlingske</a></li>
    <li role="presentation"><a href="#tab-politiko" aria-controls="tab-politiko" role="tab" data-toggle="tab">Politiko</a></li>
    <li role="presentation"><a href="#tab-aok" aria-controls="tab-aok" role="tab" data-toggle="tab">AOK</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="tab-business">
      <ul class="list list-xs ">
        <? while (dumb_luck("10")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a><footer class="inline"><time class=""><? dummy("text@time-ago-short") ?></time></footer></h2></div>
          </li>
        <? endwhile ?>
      </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-berlingske">
    
<div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-politiko">
    
<div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-aok">
    <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
  </div>

</div>




      </section>

      </div><!-- col -->


 
      

      <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4">
        
        <section class="module-sm">
    

    <h1 class="section-header">Most read</h1>
      

    <div role="tabpanel" class="tabs">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs-sm" role="tablist">
    <li role="presentation" class="active"><a href="#tab-business2" aria-controls="business" role="tab" data-toggle="tab">Business</a></li>
    <li role="presentation"><a href="#tab-berlingske2" aria-controls="tab-berlingske" role="tab" data-toggle="tab">Berlingske</a></li>
    <li role="presentation"><a href="#tab-politiko2" aria-controls="tab-politiko" role="tab" data-toggle="tab">Politiko</a></li>
    <li role="presentation"><a href="#tab-aok2" aria-controls="tab-aok" role="tab" data-toggle="tab">AOK</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="tab-business2">
      <ul class="list toplist toplist-lg list-xs">
        <? while (dumb_luck("10")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-berlingske2">
    
<div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-politiko2">
    
<div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-aok2">
    
<div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>

    </div>
  </div>

</div>




      </section>

      </div><!-- col -->



      <div class="col-md-4 col-sm-12 col-xs-12 col-md-pull-4">
        
        <div class="row">
          <div class="col-md-12 col-sm-6">
         <div class="banner module-sm">
            <? dummy("ad@300x250") ?>
         </div>
         </div>
        
        <section class="col-md-12 col-sm-6">
            
          
          
          
          <h2 class="section-header"><i class="fa fa-mobile"></i> Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindeligt takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>          
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
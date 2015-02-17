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
        
      <div class="deck-header">
        <h1>Profil</h1>
      </div>

      </div>
        
          <div class="col-md-8 ">
            
            

            
            
            



<div class="article-profile module-sm">

<form>
<div class="form-group">
  <label>Navn</label>
  <input type="text" class="form-control" Placeholder="Navn" value="Bo Skakke"></input>
</div>

<div class="form-group">
  <label>Adresse</label>
  <input type="text" class="form-control" Placeholder="Adresse" value="Skovkante 74"></input>
</div>

<div class="row">
<div class="form-group col-sm-4">
  <label>Postnr.</label>
  <input type="text" class="form-control" Placeholder="Postnr." value="2850"></input>
</div>  
<div class="form-group col-sm-8">
  <label>By</label>
  <input type="text" class="form-control" Placeholder="By" value="Nærum"></input>
</div>
</div>

<div class="form-group">
  <label>Email</label>
  <input type="email" class="form-control" Placeholder="Email" value="bo@skakke.dk"></input>
</div>

<button type="submit" class="btn btn-primary btn-sm">Gem ændringer</button>


</form>



            </div>


<h3>Aktivering af online abonnement</h3>
<p>Er du abonnent på papirudgaven kan du her aktivere dit online abonnement og få gratis adgang til Business.dk <a href="https://b.kundeunivers.dk/" target="_blank">Aktivér onlineabonnement <i class="fa fa-caret-right"></i></a>  </p>
<h3>Opsigelse eller ændringer</h3>
<p>Her kan du <a href="https://b.kundeunivers.dk/" target="_blank">opsige eller ændre dit abonnement <i class="fa fa-caret-right"></i></a></p>






  




            
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <div class="col-md-4 ">
            
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

 
   <section class="border-top-thick">
            <div class="border-bottom">
              <p><strong><i class="fa fa-mobile"></i> Tilmeld Breaking News SMS</strong></p>
          <div class="row">
            <div class="col-sm-9 col-xs-10">
            <form class="form-signup">
            <div class="form-group form-oneline-alt">
              <? if (dumb_luck("50%")): ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Email" value="20616768" aria-describedby="sizing-addon3">
            <? else: ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Indtast mobilnr." aria-describedby="sizing-addon3">
            <? endif ?> 
            <button class="btn btn-sm btn-primary btn-sm ">OK</button>
            </div>
            </form>
            </div>

          </div>
          
          
          </div>
        </section>


          
          <section>
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

          <section class="module-sm">
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

          

          </div>


        

      

      


    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
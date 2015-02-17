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
<div class="checkbox">
    <label>
      <input type="checkbox"> Tilmeld Business.dk nyhedsbrev
    </label>
  </div>

<div class="form-group">
  <label>Telefon</label>
  <input type="phone" class="form-control" Placeholder="Telefon" value="20616768"></input>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox"> Modtag breaking nyt på SMS
  </label>
</div>

<div class="text-right">
  <button type="submit" class="btn btn-primary btn-sm">Gem ændringer</button>  
</div>



</form>



            </div>

<div class="row">
  <div class="col-md-6">
  <h2 class="section-header">Aktivering af online abonnement</h3>
<p>Er du abonnent på papiravisen, skal du aktivere dit online abonnement for at få adgang til Business.dk </p>

<p><a href="https://b.kundeunivers.dk/" target="_blank" >Aktivér abonnement <i class="fa fa-caret-right"></i></a>  </p>

  </div>
  <div class="col-md-6">
  <h2 class="section-header">Opsigelse eller ændringer</h3>
<p>Her kan du opsige eller ændre i dit abonnement</p>
<p><a href="https://b.kundeunivers.dk/" target="_blank" >Kundeunivers <i class="fa fa-caret-right"></i></a></p>    
  </div>
</div>









  




            
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
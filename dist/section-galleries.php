<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

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
    <div class="col-md-12">
      
          <h1 class="deck-header">Billedserier</h1>
      
      
    </div>
      
      <div class="col-md-8 col-sm-12 module-sm">
       <? while (dumb_luck("4")): ?>




        
          
            
              <article class="teaser header-30 ">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><i class="fa fa-camera"></i> Billedgalleri</a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                </div>
              </article>


              <div class="row">
       <ul class="list-clean flex-2-2-2 ">
         
        
        <? while (dumb_luck("2")): ?>
            <li class="col-xs-6">
              <article class="teaser header-20 ">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><i class="fa fa-camera"></i> Billedgalleri</a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                </div>
              </article>
            </li>
        <? endwhile ?>
        </ul>
        </div>


      <? endwhile ?>
            
          
        
        
        

        <div class="text-center">
          
          <button class="btn btn-primary btn-sm">Load more <i class="fa fa-caret-down"></i></button>
        </div>
        

      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
       <div class="banner module-sm hidden-sm hidden-sx">
        <? dummy("ad@300x250") ?>
      </div>
        

      <div class="row">
      <div class="col-md-12 col-sm-6">

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

      </div>


      
        <section class=" col-md-12 col-sm-6 ">
        <h2 class="section-header">Business Nyhedsbrev</h2>
        
        <form class="form-oneline">
          <div class="form-group">
            <input class="form-control" type="email" placeholder="Indtast email"> 
            <button class="btn btn-primary">OK</button>
          </div>
        </form>
        </section>

        <section class=" col-md-12 col-sm-6">
        
        
        
          <h2 class="section-header"><i class="fa fa-mobile"></i> Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindelig takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>          
        
        </section>
        



      <div class="col-md-12 col-sm-6">


      

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
      </div><!-- row -->

      </div>

    </div>


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
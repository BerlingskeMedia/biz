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
      
          <h1 class="deck-header">Brevkassen</h1>
      
      
    </div>
      
      <div class="col-md-8 col-sm-12 module-sm">
        <div class="row">
        <? while (dumb_luck("2")): ?>
          
            <div class="col-md-6 col-sm-6">
              <article class="teaser header-20 teaser-margin-bottom-0 teaser-sx-500 module-sm">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@500x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                </div>
              </article>
            </div>
          
        <? endwhile ?>
        </div>
        <div class="row">
        <div class="col-md-12">
        <article class="teaser teaser-section header-20 teaser-border-bottom teaser-border-top">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                </div>
              </article>
          <? while (dumb_luck("10")): ?>
          
              <article class="teaser teaser-section header-20 teaser-border-bottom">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                </div>
              </article>
            
          
        <? endwhile ?>
        </div>
        <div class="col-md-12 text-center">
          <button class="btn btn-primary btn-sm">Load more <i class="fa fa-caret-down"></i></button>
        </div>
        </div><!-- row -->

       

       

        


        
        

      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
       <div class="banner module-sm hidden-sm hidden-sx">
        <? dummy("ad@300x250") ?>
      </div>
        

      <div class="row">
      <div class="col-md-12 col-sm-6">


      <section class="module-sm">
        <h1 class="section-header">Brevkassen</h1>

        <p class="small">Få svar på spørgsmål om blandt andet arv, testamenter, skilsmisse, skat, boligkøb, jura og økonomi.</p>
        <p class="small">Alle spørgsmål anonymiseres. Det er desværre ikke muligt at svare på alle henvendelser. Svar gives i Brevkassen på <a href="http://business.dk/brevkassen">business.dk/brevkassen</a> samt i Berlingske Business om lørdagen - svar gives ikke privat. Berlingske Media forbeholder sig ret til at offentliggøre spørgsmål og svar i alle husets medier.</p>
        <p class="small">Skriv til <a href="mailto:brevkassen@business.dk">brevkassen@business.dk</a></p>

      </section>
      </div>
      <div class="col-md-12 col-sm-6">
      <section class="module-sm">
        <h1 class="section-header">
          Brevkassens eksperter
        </h1>
        <teaser class=" teaser teaser-round teaser-sans teaser-small" >
          <figure class="teaser-img"><img src="./images/eksperter/Viggo_Bækgaard.jpg"></figure>
        <h2 class="header text-center">Viggo Bækgaard</h2>
        <p>Advokat (H) og mediator, Forum Advokater i Roskilde. Beskæftiger sig med bl.a. arv og testamenter, ægteskabssager, samvær og forældremyndighed, bodeling og ægtepagter.</p>
        </teaser>

        <teaser class=" teaser teaser-round teaser-sans teaser-small" >
          <figure class="teaser-img"><img src="./images/eksperter/Erik_Øvlisen.jpg"></figure>
        <h2 class="header text-center">Erik Øvlisen</h2>
        <p>Advokat (H), Forum Advokater i Roskilde. Beskæftiger sig med bl.a. dansk og international skatteret, bobehandling og erhvervsret.</p>
        </teaser>

        <teaser class=" teaser teaser-round teaser-sans teaser-small">
          <figure class="teaser-img"><img src="./images/eksperter/maria_larsen.jpg"></figure>
        <h2 class="header text-center">Maria Larsen</h2>
        <p>Advokatfuldmægtig, Forum Advokater i Roskilde. Beskæftiger sig med bl.a. arv og testamenter, ægteskabssager, bodeling, ægtepagter samt samvær og forældremyndighed.</p>
        </teaser>

        <teaser class=" teaser teaser-round teaser-sans teaser-small">
          <figure class="teaser-img"><img src="./images/eksperter/allan_ohms.jpg"></figure>
        <h2 class="header text-center">Allan Ohms</h2>
        <p>Advokat (H) og mediator, Forum Advokater i Roskilde. Beskæftiger sig med bl.a. arv og testamenter, ægtepagter, bobehandling, mediation og erhvervsret.</p>
        </teaser>

        <p class="small">Læs mere på <a href="http://www.forumadvokater.dk/" target="_blank">Forumadvokater.dk</a>

        

      </section>
      </div>

      <div class="col-md-12">
      <div class="row">
         <section class="col-md-12 col-sm-6">
            <h2 class="section-header"><i class="fa fa-mobile"></i> Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindelig takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>          

        </section>


          
          <section class="col-md-12 col-sm-6">
          <div class="module-sm">
              
              <h2 class="section-header"><i class="fa fa-envelope"></i> Tilmeld Business.dk nyhedsbrev</h2>
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

          </div>

      </div>

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
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
      
          <h1 class="deck-header">Events</h1>
      
      
    </div>
      
      <div class="col-md-8 col-sm-12 module-sm">
      <h1 class="section-header">Kommende events</h1>
        <div class="row">
        <ul class="list-clean flex-2-2-2">
        <? while (dumb_luck("6")): ?>
          
            <li class="col-md-6 col-sm-6 col-xs-6">
              <article class="teaser header-20 teaser-margin-bottom-0 teaser-sx-500 module-sm">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@500x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                <p><? dummy("text@teaser") ?></p>  

                </div>
              </article>
            </li>
          
        <? endwhile ?>
        </ul>
        </div><!-- row -->

        


  <h1 class="section-header">TV fra Business Events <a href="#" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a></h1>


   <div class=" row">

 <ul class="list-clean flex-3-2-2">
    <? while (dumb_luck("3")): ?>
      <li class="col-md-4 col-sm-6 col-xs-6">
        <article class="teaser teaser-video">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article.php">
          <? dummy("text@headline") ?></a></h2>
        </article>
        </li>
      <? endwhile ?>
    </ul>

    </div><!-- row -->




      <h1 class="section-header">Afholdte events</h1>
        <div class="row">
        <ul class="list-clean flex-2-2-2">
        <? while (dumb_luck("6")): ?>
          
            <li class="col-md-6 col-sm-6 col-xs-6">
              <article class="teaser header-20 teaser-margin-bottom-0 teaser-sx-500 module-sm">
                <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@500x,16:9") ?>" width="" height="" alt="" /></a></figure>
                <div class="teaser-body">
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></a> </h2>
                
                <p><? dummy("text@teaser") ?></p>  

                </div>
              </article>
            </li>
          
        <? endwhile ?>
        </ul>
        </div><!-- row -->

        


  <h1 class="section-header">Faste Events</h1>


   <div class=" row">

 <ul class="list-clean flex-3-2-2">
    
      <li class="col-md-4 col-sm-6 col-xs-6">
        <article class="teaser ">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article.php">
          Talent 100-konferencen</a></h2>
        </article>
        </li>

        <li class="col-md-4 col-sm-6 col-xs-6">
        <article class="teaser ">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article.php">
          Revisortopmøde</a></h2>
        </article>
        </li>

        <li class="col-md-4 col-sm-6 col-xs-6">
        <article class="teaser ">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          <? dummy("text@biz-headertags") ?>
          <h2 class="header"><a href="article.php">
          Årets CFO 2014</a></h2>
        </article>
        </li>
    

    
    
    </ul>

    </div><!-- row -->



  <h1 class="section-header">Talent 100 netværket 2014</h1>


   <div class="row">

 <ul class="list-clean flex-3-2-2">
    
    <? while (dumb_luck("15")): ?>
      <li class="col-md-4 col-sm-6 col-xs-6">
        <article class="teaser ">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image/!author@200x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a></figure>
          
          <h2 class="header"><a href="article.php">
          <? dummy("text@author") ?></a></h2>
        </article>
        </li>
<? endwhile ?>
        
    

    
    
    </ul>

    </div><!-- row -->



        
        

      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
       <div class="banner module-sm hidden-sm hidden-sx">
        <? dummy("ad@300x250") ?>
      </div>
        


      <div class="row">
      <div class="col-md-12 col-sm-6">


      <section class="module-sm">
        <h1 class="section-header">Business Events</h1>

        <p class="small">Business Events udbyder aktuelle arrangementer, der hjælper den erhvervsaktive beslutningstager til at få succes i forretningslivet i form af ny viden, cases, værktøjer og inspiration. Eksempler på store årlige events er Revisor-topmødet, Årets CFO og Talent 100-konferencen. </p>
        <p class="small">Business Events bygger på partnerskaber og stærke kunderelationer.</p>
        <p class="small">Som partner opnår man flere fordele ved at samarbejde med Berlingske end andre mediehuse, fordi vi supplerer eventsamarbejdet med en bred vifte af kommercielle tilbud.</p>

        

      </section>
      </div>
      <div class="col-md-12 col-sm-6">
      
<section class="module-sm">
<h1 class="section-header">Nyhedsbrev</h1>
<form class="form-inline">
<div class="form-group">
 
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
 <p class="small help-block">Tilmeld dig Business Events' nyhedsbrev og få tilsendt tilbud om nye arrangementer.</p>
</div>
</form>
</section>


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
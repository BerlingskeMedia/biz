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
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to get the most out of Business.dk.</p>
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
      
    
      
    

    


      <div class="col-md-8">
      
        <div class="deck-header">
          <h1>Business Magasinet</h1>
        </div>


      <div class="row">
        
        <div class="col-md-12">

        
          <article class="teaser header-35 teaser-border-top-thick teaser-border-bottom-thick margin-top-0 teaser-overflow teaser-top">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            
                <h2 class="header">
                
                <a href="article.php"><? dummy("text@headline") ?></a></h2>
              <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
                
                
                <p><? dummy("text@teaser") ?></p>
                <ul class="related">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
                </div>
              </article>

          
        </div>
        
      <div class="col-md-8 col-sm-8">

       <article class="teaser header-40 teaser-margin-bottom-0 teaser-solid teaser-background-img-tall  module-sm">
            <a href="article.php"><figure class="teaser-img" style="background-image: url(<? dummy("image@620x,1:1") ?>);"></figure></a>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            <p class="large"><? dummy("text@teaser") ?></p>
            <? if (dumb_luck("25%")): ?>
            <ul class="related">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
            <? endif ?>
            </div>
          </article>



           
</div>
<div class="col-md-4 col-sm-4">
<section>

<article class="teaser  header-20 teaser-border-bottom-thick-last-child ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            <? if (dumb_luck("50%")): ?>
            <ul class="related">
              <? while (dumb_luck("0-2")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
          <? endif ?>
            </div>
          </article>

<? while (dumb_luck("2")): ?>


            <article class="teaser  header-20 teaser-border-bottom-thick-last-child ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            <? if (dumb_luck("50%")): ?>
            <ul class="related">
              <? while (dumb_luck("0-2")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
          <? endif ?>
            </div>
          </article>
          
          <? endwhile ?>  

  </section>
</div>
          </div>


         

          

          <div class="row">
          

          <div class="col-md-8 col-sm-6">


          <article class="teaser  header-20 teaser-border-top-thick ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            
            <? if (dumb_luck("25%")): ?>
            <ul class="related">
              <? while (dumb_luck("0-2")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
            <? endif ?>
            </div>
          </article>
          </div>
          <div class="col-md-4 col-sm-6">
          
          <? if (dumb_luck("50%")): ?>
           <article class="teaser teaser-quote header-20 teaser-border-top-thick">
          

            <h2 class="header"><a href="article.php"><? dummy("text@teaser") ?></a></h2>
            <figure class="teaser-img">

              <a href="article.php"><img src="<? dummy("image/!author@35x35,") ?>" width="" height="" alt="" /></a>
              <figcaption><cite><? dummy("text@author") ?></cite></figcaption>
            </figure>

          </article>

          <? else: ?>

          <article class="teaser teaser-tweet header-20 teaser-border-top-thick">
          

            <h2 class="header"><a href="article.php"><? dummy("text@teaser") ?></a></h2>
            <figure class="teaser-img">
              
              <figcaption><cite><? dummy("text@author") ?></cite></figcaption>
            </figure>

          </article>

          <? endif ?>

           
          
          </div>

          
          
            </div>

        </div>

        <div class="col-md-4 col-sm-12">
          
<div class="row">
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
      <ul class="list list-xs list-light">
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

      <div class="col-md-12 hidden-sm">


            <div class="banner module-xs ">
              <? dummy("ad@300x250") ?>
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
      <ul class="list toplist toplist-lg list-xs list-light">
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

         


        </div>


    </div>
    </div><!-- row -->

    <div class="row">
    <section class="deck">
    <div class="col-md-12 ">
      <div class="deck-header">
        <h1>Temaer</h1>
      </div>
    </div>
    <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser header-20 ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
        </li>
        <? endwhile ?>

    </ul>
      
</section>
      
    
    </div>

    <div class="row">
    <section class="deck">
    <div class="col-md-12 ">
      <div class="deck-header">
        <h1>Specialrapporter</h1>
      </div>
    </div>
    <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser header-20 ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
        </li>
        <? endwhile ?>

    </ul>
      
</section>
      
    
    </div>

   
<div class="row">
  <div class="col-md-12">
    <div class="banner module-xs">BANNER</div>
  </div>
</div>






   <div class="row">
      <section class="deck">
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left img-xs-100 teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>
        <section class="module-sm ">
        <div class="">
          <h1 class="section-header">
            Om Magasinet
          </h1>

          <div class="row">

          <div class="col-md-12 col-sm-6">
          
          <div class="row  ">

            <div class="col-sm-5 text-center" >
            <figure class="module-sm " ><a href="#" title="Buy magazine"><img src="http://dummy/cache/b5a90ebb168b61034c52bd81030411b9_300x397.jpg" class="img-responsive"></a></figure>
            </div>
            <div class="col-sm-7 text-center" >
            <p>
              <strong>Styksalg 99,- kr.</strong> <button class="btn btn-primary btn-sm">Køb magasinet <i class="fa fa-caret-right"></i></button>    
            
            </p>

            </div>
        
          
                    <div class="col-md-12 col-sm-6 toggle-container">
          

          <p class="small">Berlingske Business Magasin er et månedsligt eksklusivt magasin, der er sætter erhvervslivets aktuelle problemstillinger i perspektiv. Med dybde og indlevelse beskriver Berlingske Business Magasin den dagsorden, som optager beslutningstagerne i og omkring den daglige ledelse af en virksomhed. Magasinet leverer globalt udsyn med fokus på ny vækst, nye forretningsmodeller og ny viden om erhvervslivets strategiske, økonomiske og ledelsesmæssige udvikling.</p>


<div class="toggle-content">
<p  class="small"><strong>Kontakt redaktionen:</strong><br>
<a href="mailto:bbm@berlingske.dk">bbm@berlingske.dk</a></p>

<p class="small"><strong>Claus Skovhus, redaktør</strong><br>
Mobil: 21 48 34 40<br>
<a href="mailto:clsk@berlingske.dk">clsk@berlingske.dk</a></p>

<p class="small"><strong>Abonnement</strong><br>
Kundeservice: 33 75 36 36<br>
<a href="http://www.b.dk/businessmagasin" target="_blank">www.b.dk/businessmagasin</a></p>

<p class="small">Månedsmagasinet Berlingske Business er gratis for Berlingskes abonnenter.
For ikke-abonnenter kan magasinet <a href="http://b.dk/bbmkupon" target="_blank">købes i løssalg</a>.
Selvstændigt abonnement på magasinet kan bestilles via <a href="http://b.dk/businessmagasin" target="_blank">b.dk/businessmagasin</a>.</p>

<p class="small"><strong>Annoncesalg:</strong><br>
Julie Brix, teamchef<br>
Mobil: 25 45 61 18<br>
<a href="mailto:jub@berlingskemedia.dk">jub@berlingskemedia.dk</a></p>
</div>
<p class="small text-center"><strong><a href="#" class="toggle-btn ">Vis mere <i class="fa fa-caret-down"></i></strong></p>

        </div><!-- col -->

        </div><!-- theme -->
        </div><!-- row -->


        </section>
      </div>
     
</section>
    </div>



<div class="row">
<section class="deck">
        
        <div class="col-md-12">
        <div class="deck-header">
          <h1>
            Business recommends 
          </h1><a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
          </div>
        </div>



        
        
        
          <div class="col-md-8">
            <article class="teaser header-35 header-xs-20 teaser-border-bottom-thick">
              <figure class="teaser-img"><a href="#"><img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </article>
        
          <div class="row">
              
              

      <div class="col-md-4 col-sm-4 col-xs-12 ">
          <article class="teaser header-20 teaser-border-bottom-thick-xs">
              <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </article>
          </div>
            <? while (dumb_luck("2")): ?>
      <div class="col-md-4 col-sm-4 col-xs-6 ">
          <article class="teaser header-20 ">
              <figure class="teaser-img"><a href="#"><img src="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </article>
      </div>


      <? endwhile ?>

      
      </div>

      <div class="row">
        <div class="col-md-12 clearfix">
          <div class="text-center module-sm"><button class="btn btn-primary btn-sm">Load more <i class="fa fa-caret-down"></i></button></div>
        </div>
      </div>

        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
           
          <div class="row">
            


          
           <div class="banner module-sm col-md-12 col-sm-6">
              <? dummy("ad@300x250") ?>
            </div>
            



            <section class="module-sm col-md-12 col-sm-6">
          <h1 class="section-header">
            Business blogs <a href="#" class="section-header-link">More blogs <i class="fa fa-caret-right"></i></a>
          </h1>
        
        <ul class="list  teaser-round list-light">
          <? while (dumb_luck("5")): ?>
          <li class="teaser teaser-img-left ">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image/!author@50x50,") ?>" width="" height="" alt="" /></a></figure>
          <div class="teaser-body">
          <footer><a href="section.php" class="cat"><? dummy("text@author") ?></a> <time>3d.</time></footer>
          <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
          </div>
          </li>
          <? endwhile ?>
        </ul>
        </section>

        </div>
           

        
        </div>



          
        




      
        
      </section>  
    </div>


 <div class="row">
      <div class="col-md-12">
        <div class="banner module-xs">BANNER</div>
      </div>
    </div>











   <div class="row">
      <section class="deck">
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left img-xs-100 teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
          <? endwhile ?>
      </div>

       <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>

        <div class="row">
        <div class="col-sm-6 col-md-12">
        <section class="module-sm">
          <h1 class="section-header">
            Business Events <a href="section.php" class="section-header-link">See all <i class="fa fa-caret-right"></i></a>
          </h1>
        
        <ul class="list  list-light">
          <? while (dumb_luck("5")): ?>
          <li class="teaser teaser-img-left">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure>
          <div class="teaser-body">
          <!-- <footer><a href="section.php" class="cat"><? dummy("text@author") ?></a> <time>3d.</time></footer> -->
          <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
          </div>
          </li>
          <? endwhile ?>
        </ul>
        </section>
        </div>
 <div class="col-sm-6 col-md-12">


        <section class="toggle-container">

      <h1 class="section-header">
        BrandView <a class="section-header-link toggle-btn" href="#">Hvad er BrandView?</a>
      </h1>

      <div class="brandview-info toggle-content">
        <p class="small">BrandView er en service fra Berlingske Media, hvor virksomheder har mulighed for at kommunikere deres specialviden direkte til brugere og læsere af Berlingske.</p>
        <p class="small">Indhold under BrandView produceres i et tæt samarbejde mellem Berlingske Medias content marketing bureau og virksomheden, der er afsender på budskabet. <a href="http://www.publicimpact.dk/">Læs mere om BrandView</a> eller kontakt os direkte på <a href="mailto:moas@berlingslemedia.dk">moas@berlingslemedia.dk</a>.</p>    
      </div>
      
        <div class="row">
          <? while (dumb_luck("2")): ?>

          <div class="col-md-6 col-xs-6">
            <article class="teaser teaser-brandview ">
            <figure class="teaser-img"><a href="article-brandview.php"><img src="<? dummy("image@420x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <span class="teaser-tagline">
              Sponseret af Columbus
            </span>
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
        </article>
          </div>
        <? endwhile ?>
        </div>
      
        </section>

        </div><!-- row -->


      </div>
     

    </div>
     
</section>
    </div>


<div class="row">
<section class="deck">

   <?php include('inc/asset-deck-tv.php'); ?>

</section>
</div>


<div class="row">

  <?php include('inc/asset-longreads.php'); ?>
  
</div><!-- row -->









    





    





  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
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
      
    
    <!--   <div class="col-md-12">
        <article class="teaser teaser-oneliner-breaking"><span><i>Breaking</i></span><a href="article.php"><? dummy("text@headline") ?></a></article>
      </div> -->
    
    
      
      <!-- <div class="col-md-12">
        <article class="teaser header-60 teaser-border-top-thick teaser-img-left <? dummy("text@biz-teaserclass") ?>">
        <figure class="teaser-img"><img src="<? dummy("image@400x,1:1") ?>" width="" height="" alt="" /></figure>
        <div class="teaser-body">
        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>

        <p class="large"><? dummy("text@teaser") ?></p>

        <? if (dumb_luck("50%")): ?>
            <ul class="related large">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
        <? endif ?>
        </div>

        </article>


      </div> -->
    
      
      <div class="col-md-8">
      



      <div class="row">
        
        <div class="col-md-12">
          <article class="teaser teaser-img-right header-30 teaser-border-top-thick margin-top-0 teaser-overflow">
            
              <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
                <p><? dummy("text@teaser") ?></p>
                <ul class="related">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
                </div>
              </article>

          
        </div>
        
      <div class="col-md-8">

       <article class="teaser header-40   teaser-margin-bottom-0 teaser-solid ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image/!bizpics@620x,3:4") ?>" width="" height="" alt="" /></a></figure>
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



           <!-- <article class="teaser teaser-overlay-gradient header-40 teaser-margin-bottom-0 teaser-border-top-thick ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image/!bizpics@540x,9:16") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            <p><? dummy("text@teaser") ?></p>
            <? if (dumb_luck("25%")): ?>
            <ul class="related">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
            <? endif ?>
            </div>
          </article>  -->
</div>
<div class="col-md-4">
<section>


<? while (dumb_luck("3")): ?>


            <article class="teaser  header-20 teaser-border-bottom-thick-last-child ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
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
          <? if (dumb_luck("0%")): ?>

          

          <? else: ?>

          <div class="col-md-8">


          <article class="teaser   header-25 teaser-border-top-thick ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
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
          <div class="col-md-4">
          
           <article class="teaser teaser-quote header-20 teaser-border-top-thick">
            <footer><span class="cat">Dagens kommentar</span></footer>
            
            

            <h2 class="header"><a href="article.php"><? dummy("text@teaser") ?></a></h2>
            <figure class="teaser-img">
              <img src="<? dummy("image/!author@30x30,") ?>" width="" height="" alt="" />
              <figcaption><cite><? dummy("text@author") ?></cite></figcaption>
            </figure>


          </article>

           <article class="teaser  header-20 teaser-border-top-thick">
            <!-- <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure> -->
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
          
          </div>

          <? endif ?>
          
            </div>





        </div>

        <div class="col-md-4">
          


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


            <div class="banner module-xs">
              <? dummy("ad@300x250") ?>
            </div>

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


    </div><!-- row -->

    <div class="row">
    <div class="col-md-12 ">
      <div class="divider-pink"></div>
    </div>
      <? while (dumb_luck("4")): ?>

      <div class="col-md-3">
        <article class="teaser header-15 ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
    <? endwhile ?>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="banner module-xs">BANNER</div>
      </div>
    </div>

<? if (dumb_luck("100%")): ?>
    
<section class="deck">
<div class="row">
  

  <div class="col-md-6">
    <div class="theme-cover">
    <div class="theme-caption">
      <a href="article.php">
        <footer class="cat"></footer>
        <i><? if (dumb_luck("50%")): ?>OW Bunker<? else: ?>Olieprisens fald<? endif ?></i>

        </a>

      </div>
        <figure style="background-image: url(<? dummy("image/!biz-theme@600x,9:13") ?>);"></figure>
    </div>
  </div>

  <div class="col-md-6">
    <div class="theme-wrapper">
      <ul>
      <li class="teaser">
      <footer><span class="cat"><? dummy("text@biz-cat") ?></span></footer>
      <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></li>
        <? while (dumb_luck("3-5")): ?>
        <li class="teaser"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></li>
        <? endwhile ?>
        <li><button class="btn btn-primary btn-sm">See all <i class="fa fa-caret-right"></i></button></li>
      </ul>

    </div>
  </div>
</div>

</section>
<? else: ?>

<div class="row">

  

<div class="col-md-12 ">
<section class="deck">    
<h1 class="deck-header">Longreads</h1>
<div class="theme-splash">

  

  <? while (dumb_luck("3")): ?>
    <article class="teaser-splash">
    <a href="article-longread.php">
      <div class="teaser-body">
        <footer><span class="cat">Longread</span></footer>
        <h2 class="header"><? dummy("text@headline") ?></h2>
      </div>
      <div class="splash-img" style="background-image: url(<? dummy("image/!longread@800x,1:1") ?>)"></div>
      </a>
    </article>
  <? endwhile ?>


</div>        


</section>
    </div>
  
</div><!-- row -->
<? endif ?>


   <div class="row">
      <section class="deck">
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              <p><? dummy("text@teaser") ?></p>
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>
        <section class="module-sm">
          <h1 class="section-header">
            Popular blogs
          </h1>
        
        <ul class="list toplist toplist-lg teaser-round list-light">
          <? while (dumb_luck("5")): ?>
          <li class="teaser teaser-img-left">
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
     
</section>
    </div>


<div class="row">
  <section class="deck">    
    <div class="col-md-12 ">
  
        <div class=" theme-container theme-dark theme-magazine">
            

            <h1 class="theme-header-underline"><span>The Business Magazine</span></h1>
            <div class="row">
            <div class="col-md-3">
            <figure class="teaser-img">
              <a href="#"><img src="<? dummy("image/!bizmagasin@x,") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            </div>

            <div class="col-md-9">
            <div class="fact-2-col">
              <? while (dumb_luck("5")): ?>
              <article class="teaser">
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              </article>

              <? endwhile ?>
              <button class="btn btn-primary">Read magazine <i class="fa fa-caret-right"></i></button>
            </div>
              
            </div>
            </div><!-- row -->

        </div>

    </div>
</section>  
</div>


 <div class="row">
      
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              <p><? dummy("text@teaser") ?></p>
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>
        <section class="module-sm">
          <h1 class="section-header">
            Business Names <a href="section.php" class="section-header-link">See all <i class="fa fa-caret-right"></i></a>
          </h1>
        
        <ul class="list  teaser-round list-light">
          <? while (dumb_luck("5")): ?>
          <li class="teaser teaser-img-left">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image/!author@50x50,") ?>" width="" height="" alt="" /></a></figure>
          <div class="teaser-body">
          <!-- <footer><a href="section.php" class="cat"><? dummy("text@author") ?></a> <time>3d.</time></footer> -->
          <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
          </div>
          </li>
          <? endwhile ?>
        </ul>
        </section>


        <section class="toggle-container">

      <h1 class="section-header">
        BrandView <a class="section-header-link toggle-btn" href="#">Hvad er BrandView?</a>
      </h1>

      <div class="brandview-info toggle-content">
        <p class="small">BrandView er en service fra Berlingske Media, hvor virksomheder har mulighed for at kommunikere deres specialviden direkte til brugere og læsere af Berlingske.</p>
        <p class="small">Indhold under BrandView produceres i et tæt samarbejde mellem Berlingske Medias content marketing bureau og virksomheden, der er afsender på budskabet. <a href="http://www.publicimpact.dk/">Læs mere om BrandView</a> eller kontakt os direkte på <a href="mailto:moas@berlingslemedia.dk">moas@berlingslemedia.dk</a>.</p>    
      </div>
      
        <article class="teaser teaser-brandview header-20 ">
            <figure class="teaser-img"><a href="article-brandview.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <span class="teaser-tagline">
              Sponseret af Columbus
            </span>
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
        </article>
      
        </section>


      </div>
     

    </div>




<div class="row">
<section class="deck"> 
  <div class="col-md-12">
    <h1 class="deck-header">Business in pictures <a href="section.php" class="section-header-link">See all <i class="fa fa-caret-right"></i></h1>
  </div>
  <div class="col-md-12 ">
  
  <?php include('inc/asset-teaser-gallery.php'); ?>

  </div>
</section>
  
</div><!-- row -->




 <div class="row">
      <section class="deck">
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left teaser-border-bottom">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              <p><? dummy("text@teaser") ?></p>
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>
        <section class="module-sm">
          <h1 class="section-header">
            Ask Business <a class="section-header-link" href="section.php">See all <i class="fa fa-caret-right"></i></a>
          </h1>
        
        <ul class="list   list-light">
          <? while (dumb_luck("5")): ?>
          <li class="teaser teaser-img-left">
          
          <div class="teaser-body">
          <!-- <footer><a href="section.php" class="cat"><? dummy("text@author") ?></a> <time>3d.</time></footer> -->
          <h2 class="header"><a href="article.php"><? dummy("text@biz-letters") ?></a></h2>
          </div>
          </li>
          <? endwhile ?>
        </ul>
        </section>

        <section class="module-sm">

<h1 class="section-header">
<span class="logo-premium">Premium</span> 
<a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a></h1>
<div class="row">
<? while (dumb_luck("2")): ?>
<div class="col-xs-6">
  <article class="teaser teaser-no-logo">
    <figure class="teaser-img"><a href="section.php" class="section-header-link"></a><a href="article-premium.php"><img src="<? dummy("image@200x,16:9") ?>" width="" height="" alt="" /></a></figure>
    <h2 class="header"><? dummy("text@headline") ?></h2>
    <p class="price"><? dummy("text@number") ?> kr <span class="logo-premium"><span>PREMIUM</span></span></p>
  </article>

</div>
<? endwhile ?>
</div>

</section>
      </div>
     
</section>
    </div>










<section class="deck">

   <?php include('inc/asset-deck-tv.php'); ?>

</section>

    

      <div class="row">
      <section class="deck">
      <div class="col-md-12">
        <h1 class="deck-header">Privatøkonomi</h1>
      </div>
      <div class="col-md-12">
      <nav class="nav-deck">
        <ul>  <li><strong>GENVEJE:</strong></li>
            <li><a href="section.php">Bank</a></li>
            <li><a href="section.php">Bolig</a></li>
            <li><a href="section.php">Pension</a></li>
            <li><a href="section.php">Skat</a></li>
            <li><a href="section.php">Forsikring</a></li>
            <li><a href="section.php">Brevkassen</a></li>
        </ul>
      </nav>
      </div>
      <div class="col-md-4 col-sm-12">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <div class="col-md-4 col-sm-12">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <div class="col-md-4 col-sm-12">
      
      
          

      <ul class="list ">
        <? while (dumb_luck("3")): ?>
          <li class="teaser  ">
              
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              </div>
            </li>
            <? endwhile ?>
           </ul>
        
      
      
      </div>

      </section>
      

    </div>



    <div class="row">
      <section class="deck">
      <div class="col-md-12">
        <h1 class="deck-header">Business Events <a href="section.php" class="section-header-link">See all <i class="fa fa-caret-right"></i></a></h1>
      </div>
      
      <div class="col-md-4 col-sm-12">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <div class="col-md-4 col-sm-12">
        <article class="teaser header-20">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
            </div>
          </article>
      </div>
      <div class="col-md-4 col-sm-12">
      
      
          

      <ul class="list ">
        <? while (dumb_luck("3")): ?>
          <li class="teaser  ">
              
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              </div>
            </li>
            <? endwhile ?>
           </ul>
        
      
      
      </div>

      </section>
      

    </div>

    
<?php include('inc/assets-stocks.php'); ?>





  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
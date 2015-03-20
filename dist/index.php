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
  <div class="visible-xs banner module-sm">MOBIL BANNER</div>
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
        <? if (dumb_luck("50%")): ?>
        <? if (dumb_luck("33%")): ?>
        <article class="teaser teaser-oneliner-red"><a href="article.php"><b>Opdateres</b> <? dummy("text@headline") ?></a></article>
        <? else: ?>
        <? if (dumb_luck("50%")): ?>
        <article class="teaser teaser-oneliner-red"><a href="article.php"><b><i class="fa fa-circle zoomfade"></i> Live</b> <? dummy("text@headline") ?></a></article>
        <? else: ?>
        <article class="teaser teaser-oneliner-yellow"><a href="article.php"><b>Breaking</b> <? dummy("text@headline") ?></a></article>
        <? endif ?>
        <? endif ?>
        <? else: ?>
        
        <article class="teaser header-60 teaser-border-top-thick  margin-top-0 teaser-background-img">
        
        <div class="teaser-body">
        <? dummy("text@biz-headertags") ?>
        <h2 class="header">
         <a href="article.php"><? dummy("text@headline") ?></a></h2>

        <p class="large"><? dummy("text@teaser") ?></p>

        <? if (dumb_luck("50%")): ?>
            <ul class="related large">
              <? while (dumb_luck("1-3")): ?>
              <? dummy("text@biz-related") ?>
              <? endwhile ?>
            </ul>
        <? endif ?>
        </div>
        <a href="article.php"><figure class="teaser-img" style="background-image: url(<? dummy("image@420x,1:1") ?>);"></figure></a>

        </article>

        <? endif ?>
      </div>

      
    
    
    
      
      
    
    
      <!-- End breaking -->
    


      <div class="col-md-8">
      



      <div class="row">
        
        <div class="col-md-12">
          <article class="teaser header-35 teaser-border-top-thick teaser-border-bottom-thick margin-top-0 teaser-overflow teaser-top">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <? dummy("text@biz-headertags") ?>
                <h2 class="header">
                <a href="article.php"><? dummy("text@headline") ?>
                <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
                </a></h2>
              <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
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
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
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
            
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
            <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
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
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
            <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
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
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@732x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
            
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
          

            <h2 class="header"><a href="article.php"><? dummy("text@teaser") ?>
            <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
            <figure class="teaser-img">

              <a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image/!author@35x35,") ?>" width="" height="" alt="" /></a>
              <figcaption><cite><? dummy("text@author") ?></cite></figcaption>
            </figure>

          </article>

          <? else: ?>

          <article class="teaser teaser-tweet header-20 teaser-border-top-thick">
          

            <h2 class="header"><a href="article.php"><? dummy("text@teaser") ?>
            </a></h2>
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
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@biz-headertags") ?><? dummy("text@headline") ?></a><footer class="inline"><time class=""><? dummy("text@time-ago-short") ?></time></footer>
          <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
          </h2></div>
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


<? if (dumb_luck("10%")): ?><? endif ?>

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
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@biz-headertags") ?><? dummy("text@headline") ?></a></h2></div>
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
      <div class="divider-pink hidden-sm"></div>
    </div>
    <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser header-20 ">
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
            <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
            </div>
          </article>
        </li>
        <? endwhile ?>

    </ul>
      
</section>
      
    
    </div>

   


<div class="row">
<section class="deck">

   <?php include('inc/asset-deck-tv.php'); ?>

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
              <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </h2>
            </article>
        
          <div class="row">
              
              

      <div class="col-md-4 col-sm-4 col-xs-12 ">
          <article class="teaser header-20 teaser-border-bottom-thick-xs">
              <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
            </article>
          </div>
            <? while (dumb_luck("2")): ?>
      <div class="col-md-4 col-sm-4 col-xs-6 ">
          <article class="teaser header-20 ">
              <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
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
          <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image/!author@50x50,") ?>" width="" height="" alt="" /></a></figure>
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
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <? dummy("text@biz-headertags") ?>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
      <div class="row">
        <div class="col-md-12 col-sm-6">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>  
        </div>
        <div class="col-md-12 col-sm-6">
        <section class="module-sm text-center">
          <iframe src="http://www.jobindex.dk/cgi/partnerbanner.cgi?size=300x400&partner=business&pagetype=front;cre=mu;target=_blank;ord=6ca81a82-b751-11e4-b4f6-00259006236a;EASClick=http://ad1.emediate.dk/eas/cu=24881::camp=347212::no=360322::kw=link1-360322::cat1=bond-2944::encoding=utf-8::EASTpage_type=frontpage::EASTpath=%2Fforside::EASTauth=0::c2-2=0::uuid=6ca81a82-b751-11e4-b4f6-00259006236a::EASLink=" height="400" width="300" frameborder="0" scrolling="auto"></iframe>
        
        
        </section>
        </div>
      </div>
        
        
      </div>
     
</section>
    </div>


<div class="row">
<?php include('inc/assets-stocks.php'); ?>
</div>


<div class="row">
<?php include('inc/asset-theme.php'); ?>
</div>


<div class="row">
  <section class="deck">
    <div class="col-md-12 text-center">Banner</div>
  </section>
</div>





<div class="row">

  <?php include('inc/asset-longreads.php'); ?>
  
</div><!-- row -->


<div class="row">
  <section class="deck"><div class="col-md-12 text-center">Banner</div></section>
</div>
 <div class="row">
      
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left img-xs-100 teaser-border-bottom">
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <? dummy("text@biz-headertags") ?>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
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
          <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure>
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
            <figure class="teaser-img"><a href="article-brandview.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@420x,16:9") ?>" width="" height="" alt="" /></a></figure>
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

</div>



<div class="row">
  <section class="deck">    
    <div class="col-md-12 ">
  
        <div class=" theme-container theme-dark theme-magazine">
            

            <h1 class="theme-header-underline"><span>The Business Magazine</span></h1>


            <!-- <div class="row ">
              <div class="col-md-12 module-sm">
              <nav class="nav-responsive">
              <button class="nav-toggle btn btn-border ">Tools <i class="fa fa-bars"></i></button>
                <ul >
                  <li><button class="btn btn-border" href="#">Guld 1000 <i class="fa fa-caret-right"></i></button></li>
                  <li><button class="btn btn-border" href="#">Talent 100 <i class="fa fa-caret-right"></i></button></li>
                  <li><button class="btn btn-border" href="#">Danmarks rigeste <i class="fa fa-caret-right"></i></button></li>
                  <li><button class="btn btn-border" href="#">Magtanalysen <i class="fa fa-caret-right"></i></button></li>
                </ul>
                </nav>
              </div>
            </div> -->



           
            <div class="row">
            <div class="col-md-3">
            <figure class="teaser-img">
              <a href="#"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image/!bizmagasin@x,") ?>" width="" height="" alt="" class="img-responsive" /></a>
            </figure>
            </div>

            <div class="col-md-9">
            <div class="fact-2-col-not-xs">
              <? while (dumb_luck("5")): ?>
              <article class="teaser">
                <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
              </article>

              <? endwhile ?>
              <div class="module-sm">
              <p><a href="magazine.php" class="btn btn-primary" href="magazine.php">Read magazine <i class="fa fa-caret-right"></i></a></p>
              </div>
            </div>
              
            </div>
            </div><!-- row -->

        </div>

    </div>
</section>  
</div>


 <div class="row">
      <section class="deck">
      <div class="col-md-8 ">
        <? while (dumb_luck("8")): ?>
        <article class="teaser header-20 teaser-img-left img-xs-100 teaser-border-bottom">
            <figure class="teaser-img"><a href="article.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@160x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <div class="teaser-body">
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <? dummy("text@biz-headertags") ?>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?></a></h2>
              
            </div>
          </article>
          <? endwhile ?>
      </div>

      <div class="col-md-4">
        <div class="banner module-xs">
          <? dummy("ad@300x250") ?>
        </div>
          
          <div class="row">
        <section class="module-sm col-md-12 col-sm-6 ">
        <h2 class="section-header">Business Nyhedsbrev</h2>
        
        <form class="form-oneline">
          <div class="form-group">
            <input class="form-control" type="email" placeholder="Indtast email"></input> 
            <button class="btn btn-primary">OK</button>
          </div>
        </form>
        </section>

        <section class="module-sm col-md-12 col-sm-6">
          <h2 class="section-header">Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindelig takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>
        </section>
        </div>
        

        

        <section >

<h1 class="section-header">
<span class="logo-premium">Premium</span> 
<a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a></h1>
<div class="row">
<? while (dumb_luck("2")): ?>
<div class="col-xs-6">
  <article class="teaser teaser-no-logo">
    <figure class="teaser-img"><a href="section.php" class="section-header-link"></a><a href="article-premium.php"><img class="lazy" src="images/blank.gif" data-original="<? dummy("image@420x,16:9") ?>" width="" height="" alt="" /></a></figure>
    <h2 class="header"><a href="#"><? dummy("text@headline") ?></a></h2>
    <p class="price"><? dummy("text@number") ?> kr <span class="logo-premium"><span>PREMIUM</span></span></p>
  </article>

</div>
<? endwhile ?>
</div>

</section>
      </div>
     
</section>
    </div>





<div class="row">
<section class="deck"> 
  <div class="col-md-12">
  <div class="deck-header">
    <h1>Business in pictures</h1>
    <a href="section.php" class="section-header-link">See all <i class="fa fa-caret-right"></i></a>

    </div>
  </div>
  <div class="col-md-12 ">
  
  <?php include('inc/asset-teaser-gallery.php'); ?>

  </div>
</section>
  
</div><!-- row -->






    





    





  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
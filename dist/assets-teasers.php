<? require_once("../../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body>
  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->


  <?php // include("./inc/header.php"); ?>



  <div class="container">

<div class="row">

  <section class="deck">
      
        <div class="col-md-12">
    <h1>Floating breakpoints</h1>    
    </div>  

        <div class="col-md-12">
            <code>.flex-4-3-2</code>
        </div>
        
        
          <ul class="list-clean flex-4-3-2">
            <? while (dumb_luck("4")): ?>
              <li class="col-md-3 col-sm-4 col-xs-6">
                <article class="teaser">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image/!ecommerce-biz@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  <h2 class="header"><a href="article.php"><? dummy("text@ecommerce") ?></a></h2>
                  <div class="teaser-price"><a href="http://www.berlingske.dk/shop" target="_blank" class="btn btn-xxs btn-secondary">Køb</a> <span class="price"><? dummy("text@number") ?> kr.</span></div>
                </article>
                </li>
            <? endwhile ?>
          </ul>

        
        
      </section>

      <section class="deck">
        
        <div class="col-md-12">
            <code>.flex-4-2-2</code>
        </div>

        
        

          <ul class="list-clean flex-4-2-2">
            <? while (dumb_luck("8")): ?>
              <li class="col-md-3 col-sm-6 col-xs-6">
                <article class="teaser teaser-fixed-height">
                  <figure class="teaser-img">
                    <a href="article.php"><img src="<? dummy("image/!ecommerce-biz@400x,16:9") ?>" width="" height="" alt="" class="img-responsive" /></a>
                  </figure>
                  
                  <h2 class="header"><a href="article.php"><? dummy("text@ecommerce") ?></a></h2>
                  <div class="teaser-price"><a href="http://www.berlingske.dk/shop" target="_blank" class="btn btn-xxs btn-secondary">Køb</a> <span class="price"><? dummy("text@number") ?> kr.</span></div>
                </article>
                </li>
            <? endwhile ?>
          </ul>
        
        
      </section>


    <section class="deck">
    <div class="col-md-12">
    <h1>Teasers - Fixed height</h1>    
    </div> 
     
        <div class="col-md-12">
            <code>.teaser-fixed-height</code>
        </div>

    <? while (dumb_luck("4")): ?>
    <div class="col-md-3 col-sm-6 col-xs-6">
      <article class="teaser teaser-fixed-height">
      <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a></figure>
      <footer><a href="section.php" class="cat"><? dummy("text@item") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
      <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
      <footer class="teaser-author">
        <figure class="author-image"><img src="<? dummy("image/!author@28x28,") ?>" width="" height="" alt="" />
        <figcaption class="author-name"><? dummy("text@author") ?><span class="author-title">Analytiker</span></figcaption>
        </figure>

      </footer>
      </article>
    </div>
    <? endwhile ?>
    </section>
  </div>

  </div><!-- container -->
    



<div class="container">
    <div class="row">
     <div class="col-md-12">
    <h1>Top lists</h1>    
    </div>  

    <div class="col-md-4">
    <section>
    <code>.list .toplist</code>
    <h1 class="section-header">I'm a toplist</h1>
      <ul class="list list-xs toplist">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
      </section>
    </div>

    <div class="col-md-4">
    <section>
    <code>.list .toplist .toplist-lg</code>
    <h1 class="section-header">I'm a toplist</h1>
      <ul class="list toplist toplist-lg">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
      </section>
    </div>
    

  

  <div class="col-md-4">
    <section>
    
    <h1 class="section-header">I'm a tabbed toplist</h1>
      

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
      <ul class="list toplist toplist-lg">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="tab-berlingske">
    <ul class="list toplist toplist-lg">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul></div>
    <div role="tabpanel" class="tab-pane fade" id="tab-politiko">
    <ul class="list toplist toplist-lg">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul></div>
    <div role="tabpanel" class="tab-pane fade" id="tab-aok">
    <ul class="list toplist toplist-lg">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul></div>
  </div>

</div>




      </section>
    </div>
    

  </div>


  <div class="row">
    
  <div class="col-md-12">
    <h1>List with images</h1>
  </div>

  <div class="col-md-4">
  <section>
  <code>.list .list-image-right</code>
    <h1 class="section-header">I'm a list</h1>
    
                <ul class="list  list-image-right ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <? if (dumb_luck("90%")): ?><figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
  </div>
  <div class="col-md-4">
  <section>
    <code>.list .list-image-left</code>
    <h1 class="section-header">I'm a list</h1>
                  <ul class="list  list-image-left ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <? if (dumb_luck("90%")): ?><figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
  </div>

  </div>
  <div class="row">
    <div class="col-md-12">
    <h1>List font sizes</h1>    
    </div>  
  

  <div class="col-md-4">
  <section>
      <code>.list .list-xs</code>
                  <h1 class="section-header">I'm a list</h1>
                  <ul class="list list-xs  ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                        <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
    </div>

  

  <div class="col-md-4">

  <section>
      <code>.list</code> (default)
                  <h1 class="section-header">I'm a list</h1>
                  <ul class="list  ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                        <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
        </section>
    </div>

  

  <div class="col-md-4">
  <section>

      <code>.list .list-lg</code>
        <h1 class="section-header">I'm a list</h1>                
                  <ul class="list list-lg">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                        <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a>  <time> <? dummy("text@time-ago-short") ?></time></footer>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
    </div>



</div>

<div class="row">
    <div class="col-md-12">
    <h1>List variations</h1>    
    </div>  
  

  <div class="col-md-4">
  <section>
      <code>.list .list-light</code>
                  <h1 class="section-header">I'm a list</h1>
                  <ul class="list list-light">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
    </div>

  

  <div class="col-md-4">

 <section>
      <code>.list .list-condenced</code>
                  <h1 class="section-header">I'm a list</h1>
                  <ul class="list list-condenced">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      <div class="teaser-body">
                        <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>
    </div>

  

  <div class="col-md-4">
  <section>


      </section>
    </div>
</div>

















<div class="col-md-12">
    <h1>List with arrows</h1>    
    </div>  

 <div class="col-md-4">
  <section>

      <code>.list-arrow</code>
        <h1 class="section-header">I'm a list</h1>                
                  <ul class="list-arrow">
        <? while (dumb_luck("5")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
        
      </ul>
      </section>
    </div>



<div class="col-md-12">
  <h1>BrandView teasers</h1>
</div>
<div class="col-md-8">
    <section class="module toggle-container teaser-theme">
      <h1 class="section-header">More from BrandView<a class="section-header-link toggle-btn" href="#">Hvad er BrandView?</a></h1>
      <div class="brandview-info toggle-content">
        <p>BrandView er en service fra Berlingske Media, hvor virksomheder har mulighed for at kommunikere deres specialviden direkte til brugere og læsere af Berlingske.</p>
        <p>Indhold under BrandView produceres i et tæt samarbejde mellem Berlingske Medias content marketing bureau og virksomheden, der er afsender på budskabet. Læs mere om <a href="http://www.publicimpact.dk/">BrandView</a> eller kontakt os direkte på <a href="mailto:moas@berlingslemedia.dk">moas@berlingslemedia.dk</a>.</p>    
      </div>

      <div class="row">
        <div class="col-md-12">

          <article class="teaser teaser-brandview teaser-divider module-xs header-35">
              <figure class="teaser-img"><a href="article-brandview.php"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
          <span class="teaser-tagline">
            Sponseret af Columbus
          </span>
          <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
          <p><? dummy("text@teaser") ?></p>
          
          </article>
        </div>
        <? while (dumb_luck("3")): ?>
        <div class="col-md-4">
          <article class="teaser teaser-brandview ">
              <figure class="teaser-img"><a href="article-brandview.php"><img src="<? dummy("image@360x,16:9") ?>" width="" height="" alt="" /></a></figure>
          <span class="teaser-tagline">
            Sponseret af Columbus
          </span>
          <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
          
          </article>
          
        </div>
        <? endwhile ?>
      </div>
    </section>

</div><!-- col -->

    <div class="col-md-12">
      <code>.list-border</code>
    </div>

  </div>

</div>

  

to do:<br>
.teaser-divider<br>
.teaser-premium



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
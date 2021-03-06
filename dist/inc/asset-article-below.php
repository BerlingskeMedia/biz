
<section class="deck">



      <div class="col-md-4 col-sm-6 col-xs-12">
        
       <?php include('inc/asset-latest-news.php'); ?>

      </div><!-- col -->


 
      

      <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4">
        
       <?php include('inc/asset-most-read.php'); ?>

      </div><!-- col -->



      <div class="col-md-4 col-sm-12 col-xs-12 col-md-pull-4">
        
        <div class="row">

         <div class="banner module-sm">
            <? dummy("ad@300x250") ?>
         </div>
        
        <section class="col-md-12 col-sm-6 module-sm">
            
          
          
          
          <h2 class="section-header">Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindelig takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>
        

          
          
          
        </section>


          
          <section class="col-md-12 col-sm-6 module-sm">
          
              <h2 class="section-header">Tilmeld Business.dk nyhedsbrev</h2>

            
            <form class="form-signup ">
           
            <div class=" form-oneline ">
            
            <? if (dumb_luck("50%")): ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Email" value="bsk@berlingskemedia.dk" aria-describedby="sizing-addon3">
            <? else: ?>
            <input type="email" class="form-control input-sm form-underline" placeholder="Indtast email" aria-describedby="sizing-addon3">
            <? endif ?> 
            <button class="btn btn-sm btn-primary btn-sm ">OK <!-- <i class="fa fa-caret-right"></i> --></button>
            
           

            </div>
            
            <p class="micro">Du tilmeldes nyhedsbrevene Business Breaking, Morgen og Eftermiddag. <a href="http://nyhedsbreve.berlingske-mail.dk/?medieid=2" target="_blank">Se alle nyhedsbreve <i class="fa fa-caret-right"></i></a></p>
            </form>
            
          
          </section>

          


     </div><!-- row -->

    
      </div><!-- col -->

     </section>


<section class="deck">
  <div class="col-md-12">
  <div class="deck-header border-xs-top">
      <h1>Forsiden lige nu</h1>
      <a href="index.php" class="section-header-link">Til forsiden <i class="fa fa-caret-right"></i></a>
  </div>
    
  </div>



  <ul class="list-clean flex-4-2-2">
<? while (dumb_luck("4")): ?>
  <li class="col-md-3 col-sm-6 col-xs-6">
    <article class="teaser header-20 header-xs-15">
      <figure class="teaser-img">
        <a href="article.php"><img src="<? dummy("image@440x,16:9") ?>" width="" height="" alt="" /></a>
    

      </figure>
      <div class="teaser-body">
      <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
      <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
      
      </div>
    </article>
    </li>
<? endwhile ?>

</ul>



  
  <div class="col-md-12 text-center"><button class="btn-primary btn btn-sm">Load more <i class="fa fa-caret-down"></i></button></div>
</section>




<section class="deck">   

   <?php include('inc/asset-deck-tv.php'); ?>

</section>

     

      




      <section class="deck">
        <div class="banner">
          Here comes banner
        </div>
      </section>  


       <section class="deck">
        
        <div class="col-md-12">
        <div class="deck-header border-xs-top">
          <h1>
            Business recommends <a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
          </h1>
          </div>
        </div>



        <div class="col-md-12">
        <div class="row">
        
          <div class="col-md-8">
            <article class="teaser header-35 header-xs-20 ">
              <figure class="teaser-img"><a href="#"><img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </h2>
            </article>
        
          <div class="row">
              
              

      <div class="col-md-4 col-sm-4 col-xs-12 ">
          <article class="teaser header-20 teaser-border-bottom-thick-xs">
              <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
            </article>
          </div>
            <? while (dumb_luck("2")): ?>
      <div class="col-md-4 col-sm-4 col-xs-6 ">
          <article class="teaser header-20 header-xs-15 ">
              <figure class="teaser-img"><a href="#"><img src="<? dummy("image@394,16:9") ?>" width="" height="" alt="" /></a></figure>
              <footer><a href="section.php" class="cat"><? dummy("text@biz-cat") ?></a> <time><? dummy("text@time-ago-short") ?></time></footer>
              <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
              <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
              </a></h2>
            </article>
      </div>


      <? endwhile ?>
      <div class="col-md-12">
        <div class="text-center module-sm"><button class="btn btn-primary btn-sm">Load more <i class="fa fa-caret-down"></i></button></div>
      </div>
      </div>

        </div>
        <div class="col-md-4 col-sm-12">
           
          <div class="row">
            
            <div class="col-md-12 col-xs-12">
              
 <div class="banner module-sm">
              <? dummy("ad@300x250") ?>
            </div>

            <section class=" module-sm">
              <h1 class="section-header"> Business Direct <a href="#" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a> </h1>
              <ul class="list  list-light list-xs list-image-left ">
              <? while (dumb_luck("2")): ?>
              <li class="teaser">
                      <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure>
                      <div class="teaser-body">
                        <h2 class="header"><a href="article-businessdirect.php"><? dummy("text@headline") ?></a></h2>
                        <footer><a href="section.php" class="cat">Økonomi</a> </footer>
                      </div>
                      </li>
              <? endwhile ?>
              </ul>
              </section>


            </div>

            <div class="col-md-12 col-xs-12">
              <section class="module-sm">
          <h1 class="section-header">
            Business blogs <a href="#" class="section-header-link">More blogs <i class="fa fa-caret-right"></i></a>
          </h1>
        
        <ul class="list  teaser-round list-light">
          <? while (dumb_luck("4")): ?>
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

          </div>
          
            

              


            


           

        
        </div>
</div>


          
        
</div>



      
        
      </section>  

<?php include('inc/assets-stocks.php'); ?>
      

<?php // include('inc/opinions.php'); ?>



<section class="deck">
    <div class="banner">
      Here comes banner
    </div>
</section>  



<section class="deck">
    <div class="col-md-12 ">
    <div class="deck-header border-xs-top">
        <h1>
            Business in pictures
          </h1>
          <a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
    </div>
      
        </div>
      

        <div class="col-md-12">
          
          <?php include('inc/asset-teaser-gallery.php'); ?>


        </div>
        
  
      
      
    

  </section>
  <section class="deck">

    <div class="col-md-4 col-sm-6 ">
      
      <section class="toggle-container module-sm">

      <h1 class="section-header">
        BrandView <a class="section-header-link toggle-btn" href="#">Hvad er BrandView?</a>
      </h1>

      <div class="brandview-info toggle-content">
        <p class="small">BrandView er en service fra Berlingske Media, hvor virksomheder har mulighed for at kommunikere deres specialviden direkte til brugere og læsere af Berlingske.</p>
        <p class="small">Indhold under BrandView produceres i et tæt samarbejde mellem Berlingske Medias content marketing bureau og virksomheden, der er afsender på budskabet. <a href="http://www.publicimpact.dk/">Læs mere om BrandView</a> eller kontakt os direkte på <a href="mailto:moas@berlingslemedia.dk">moas@berlingslemedia.dk</a>.</p>    
      </div>
      
        <article class="teaser teaser-brandview header-25">
            <figure class="teaser-img"><a href="article-brandview.php"><img src="<? dummy("image@360x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <span class="teaser-tagline">
              Sponseret af Columbus
            </span>
            <h2 class="header"><a href="article-brandview.php"><? dummy("text@headline") ?></a></h2>
        </article>
      
</section>


        

    </div>
    <div class="col-md-4 col-sm-6 ">
      <section class="module-sm">
  
    <h1 class="section-header">Seneste <span class="logo-premium">Premium</span>
    <a href="#" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
    </h1>
    
                <ul class="list  list-image-right list-condenced">
                    <? while (dumb_luck("4")): ?>
                      <li class="teaser teaser-no-logo">
                      <? if (dumb_luck("90%")): ?><figure class="teaser-img"><a href="article-premium.php"><img src="<? dummy("image@100x,16:9") ?>" width="" height="" alt="" /></a></figure><? endif ?>
                      <div class="teaser-body">
                        <h2 class="header"><a href="article-premium.php"><? dummy("text@headline") ?></a></h2>
                        <p class="price"><? dummy("text@number") ?> kr <span class="logo-premium"><span>PREMIUM</span></span></p>
                      </div>
                      </li>
                    <? endwhile ?>
                  </ul>
      </section>

    </div>

    <div class="col-md-4 col-sm-12">
      
      <section class="module-sm">
  

  
  
  


</section>


    </div>
</section>  


 
















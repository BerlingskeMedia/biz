<? require_once("../../dummy/dummy.php") ?>

<?php $imageSize = rand(0,2); ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-longread">



  <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->



<?php include("./inc/header.php"); ?>

  
<?php include('inc/asset-article-longread-image.php') ?>

<div class="container">
    <div class="row">
      
      <div class="col-md-12">
        <header class="article-head">

          

          <a href="section.php" title="TITLE" class="article-tag"><span>Longread</span></a>
          <h1 class="heading"><? dummy("text@headline") ?></h1>


          <div class="article-date">Mandag d. <time datetime="2014-02-14"><? dummy("text@pol-date") ?> kl. <? dummy("text@time") ?></time> <? if (dumb_luck("25%")): ?><span class="date-updated">- Opdateret <time datetime="2014-02-14"> kl. <? dummy("text@time") ?></time></span><? endif ?></div>

         


            <?php include('inc/asset-article-byline.php'); ?>

        </header>
    </div>
  </div>
</div>

        
<div class="container">
        <div class="row">
          <div class="col-md-10 col-md-push-1">

           <div class="article-social article-social-top">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
                    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments"><? dummy("text@number") ?> kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
            </div>

            <h2 class="article-summary"><? dummy("text@long-teaser") ?></h2>
          
            <div class="article-content">

             

            <? if (dumb_luck("100%")): ?>

            <div class="article-fact article-fact-float-right article-fact-graph module-sm">
                <div class="visible-xs text-center">
                  <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=340&h=206&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                </div>
                <div class="visible-sm text-center">
                  <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=278&h=150&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                </div>
                <div class="visible-md visible-lg">
                  <img src="http://businessdk.netdania.com/backend/GetImage.aspx?instr=MAERSK/A.co&prv=ms_dlc&points=20&ts=1440&current=1426690728590&w=208&h=150&bgcolor=edd0c7&fullName=[name]%20-%201%20mdr.&end=2015-03-17" class="img-responsive">
                </div>
                  
                <div class="section-sponsor">Sponsored by Nykredit A/S <a href="http://www.nykredit.dk" target="_blank"><img src="images/nykredit_logo_negativ.jpg"></a></div>

              </div>
            <? endif ?>

              
              <? if (dumb_luck("25%")): ?>
                <!-- *** Asset - factbox theme-->
                <?php include("inc/asset-article-factbox-theme.php"); ?>
              <? endif ?>

              <? if (dumb_luck("100%")): ?>
              
                <? if (dumb_luck("50%")): ?>
                <!-- *** Asset - factbox float right-->
                <?php include("inc/asset-article-factbox-float-right.php"); ?>
              
                <? else: ?>
                <!-- *** Asset - factbox timeline  -->
                <?php include("inc/asset-article-factbox-timeline.php"); ?>
                <? endif ?>


              <? endif ?>



              
 

              
              
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
              <div class="article-link-embedded">
                <figure>
                <a href="article.php" title="TITLE"><img src="<? dummy("image@70x,16:9") ?>" width="" height="" alt="" /></a>
                </figure>
                <div class="teaser-body">
                  <span>Læs også:</span>
                  <a href="article.php" title="TITLE"><? dummy("text@headline") ?></a>  
                </div>
                
              </div>

              <p><? dummy("text@paragraph") ?></p>
                <!-- *** Asset - factbox float right-->
                <?php include("inc/asset-article-factbox-embedded.php"); ?>


              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              
              <!-- EMBEDDED IMAGE -->
              <?php include("inc/asset-article-longread-image-embedded.php"); ?>

              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>


              
              <!-- EMBEDDED IMAGE -->
              <?php include("inc/asset-article-longread-image-embedded.php"); ?>
              

              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>



              <h2><? dummy("text@item") ?></h2>

              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

              <? if (dumb_luck("50%")): ?>
              <div class="media-embeds">
              <blockquote class="twitter-tweet" lang="da"><p>Jubii! 11,8 millioner fra A. P. Møller Fonden til Helsingør Kommune! God dag;-) <a href="https://twitter.com/SthePol">@sthepol</a>&#10;<a href="http://t.co/LWfd9iStaU">http://t.co/LWfd9iStaU</a></p>&mdash; Benedikte Kiær (@benediktekiaer) <a href="https://twitter.com/benediktekiaer/status/533231937037414400">14. november 2014</a></blockquote>
              <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
              <? else: ?>
              <blockquote class="bond-quote">
                  
                  <p>
                    <? dummy("text@teaser") ?>
                  </p>
                  <small><? dummy("text@author") ?>- <? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?></small>
                  <div class="quote-share">SHARE QUOTE <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></div>

              </blockquote>
              <? endif ?>

              <h3>H3:<? dummy("text@item") ?></h3>
              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
              <div class="sm-notitification">Article continues after factbox &hellip;</div>
              

              <? while (dumb_luck("3")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>



              
              <?php include('inc/asset-article-tags.php'); ?>


              <div class="article-social text-center">
                    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
              </div>


              

              
              <div class="comments" id="article-comments">
                
             

                <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'biztesting'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    


              </div>



            </div><!-- article-content -->
          </div><!-- col -->
          
          
          

        </div><!-- row -->
      </article>  


      
      
      <div class="row">
    
      <div class="col-md-12">
  <div class="deck-header">
  <h1>Longreads</h1>
  <a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
  </div>
</div>


  
  
        <ul class="list-clean flex-4-2-2">
    <? while (dumb_luck("4")): ?>
      <li class="col-md-3 col-sm-6 col-xs-6">
        <article class="teaser header-20 ">
            <figure class="teaser-img"><a href="#"><img src="<? dummy("image@620x,16:9") ?>" width="" height="" alt="" /></a></figure>
            <div class="teaser-body">
            <footer><a href="section.php" class="cat">Longread</a> <time><? dummy("text@time-ago-short") ?></time></footer>
            <? dummy("text@biz-headertags") ?>
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?>
            <? if (dumb_luck("25%")): ?><? dummy("text@biz-external-href") ?><? endif ?>
            </a></h2>
            </div>
          </article>
        </li>
        <? endwhile ?>

    </ul>
  

      <div class="col-md-12 text-center module-sm">
        <button class="btn btn-sm btn-primary">Load more <i class="fa fa-caret-down"></i></button>
    </div>
    
    

    </div>


      
    <div class="row">
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
        
        <section class="col-md-12 col-sm-6">
            
          
          
          
          <h2 class="section-header">Gratis breaking news på mobilen</h2>
          <p class="micro">Send <strong>BUSINESS BREAK</strong> til 1929 og modtag en SMS med en bekræftelse. Det er gratis - tilmelding koster kun almindeligt takst. Du kan til hver en tid afmelde tjenesten igen.</p>
          <p class="micro">Afmeld: sms <strong>BUSINESS BREAK STOP</strong> til 1929</p>
        

          
          
          
        </section>


          
          <section class="col-md-12 col-sm-6 module-sm">
          
              <h2 class="section-header">Tilmeld Business.dk nyhedsbrev</h2>

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
          
          </section>

          <section class=" col-sm-12 col-md-12 ">
          <div class="marketing-subscription">
    <h2 class="section-header">Køb abonnement</h2>          
              <a href="#" class="a-gray">
            <p class="small"><strong>Få avisen i tre måneder inkl. digital adgang. Kun 199 kr/md. <span class="pink">Klik her <i class="fa fa-caret-right"></i></span> </strong> </p>
            <p class="micro">Samlet engangspris 597,-. Abonnementet fortsætter til normalpris, indtil det opsiges</p>
            </a>
          </div>          
          </section>


     </div><!-- row -->

    
      </div><!-- col -->

     </section>
      

      

    </div>

  


  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
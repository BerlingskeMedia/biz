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
      

      
      <article class="col-md-12">
        

        

        <div class="row">
          <div class="col-md-8 col-md-push-4">
          
            <div class="article-content">
            
            


             

              

            
                                <header class="liveblog-header">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h1 class="business-live-title">Business <span>Live <span class="beta">Beta</span></span></h1>
                                        

                                        
                                            <p>Vær konstant opdateret på seneste nyt og de bedste historier om børsmarkedet, økonomi og finans fra Danmark og globalt på hverdage fra kl. 7 til 18.</p>
                                        </div>
                                    </div>

                                </header>
                                <?php 
                                if(isset($_GET["live"])) {
                                    $live = true;
                                  }
                                 ?>
                              <?php if($live) : ?>
                              <div class="liveheader">
                              <span class="livelabel"><i class="fa fa-circle zoomfade"></i> LIVE</span>
                              <span class="timeofday">14.40.03</span>
                              <span class="hostoftheday">
                                <span>Nyhedsvært:</span> <a href="mailto:jst@berlingskemedia.dk">Bent Højgaard Sørensen</a>
                              <img src="http://dummy.medieimperium.dk/cache/6188256_jetc_byline_40x40.jpg" width="" height="" alt="">
                              </span>
                              </div>
                              <?php else: ?>
                              <div class="liveheader">
                                <span class="livelabel livelabel-offline">OFFLINE</span>
                                Opdateres hverdage mellem 7 og 18.
                              </div>
                              <?php endif; ?>

                                <div class="live-content" id="scribblelive">

                                </div>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&amp;version=v2.5&appId=685323774859260";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script async defer src="//platform.instagram.com/da_DK/embeds.js"></script>


                            
              
              
              
              


            </div><!-- article-content -->
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          <aside class="col-md-4 col-md-pull-8 hidden-sm hidden-xs">
          <div class="article-sidebar article-content-stream">


          <?php  include('inc/article-content-stream.php'); ?>

          
          
            </div><!-- article-sidebar -->
          </aside><!-- col -->


        </div><!-- row -->
      </article>  


      

      
      <?php include('./inc/asset-article-below.php'); ?>

      

    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
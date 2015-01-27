<? require_once("../../dummy/dummy.php") ?>



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


  

  <div class="container article-content">
    
      
<div class="row">
  <div class="">

  <div class="col-md-12"> 
  <h2>Imageslider - Large - 12 cols</h2>
  <?php include('inc/asset-article-image-slider.php'); ?>
</div>

<div class="col-md-8"> 
  <h2>Imageslider - Default - 8 cols</h2>
  <?php include('inc/asset-article-image-slider.php'); ?>
</div>


<div class="col-md-12"> 
  <h2>Image - Large </h2>
  <?php include('inc/asset-article-image.php'); ?>
</div>

<div class="col-md-8"> 
  <h2>Image - Default </h2>
  <?php include('inc/asset-article-image.php'); ?>
</div>

<div class="col-md-8"> 
<h2>Embedded image</h2>
  <?php include('inc/asset-article-image-embedded.php'); ?>
<? while (dumb_luck("3")): ?>
<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
</div>

<div class="col-md-8"> 
  <h2>Factbox - Embedded</h2>
  <?php include('inc/asset-article-factbox-embedded.php'); ?>
</div>

<div class="col-md-8"> 
  <h2>Factbox - Float Right</h2>
  <?php include('inc/asset-article-factbox-float-right.php'); ?>
  <? while (dumb_luck("3")): ?>
<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
</div>

<div class="col-md-8"> 
  <h2>Factbox Float Right (Business Direct Company Profile)</h2>
  <?php include('inc/asset-article-factbox-float-right-businessdirect.php'); ?>
  <? while (dumb_luck("3")): ?>
<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
</div>

<div class="col-md-8"> 
<h2>Factbox - Theme</h2>
  <?php include('inc/asset-article-factbox-theme.php'); ?>
  <? while (dumb_luck("3")): ?>
<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
</div>



<div class="col-md-8"> 
<h2>Letter box</h2>
  <?php include('inc/asset-article-letterbox.php'); ?>
</div>



<div class="col-md-8">
<h2>Embedded graph from Data Wrapper</h2>
  <div class="embedded-node">
                <iframe src="http://cf.datawrapper.de/2W39o/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="100%" height="417"></iframe>
               </div>
</div>

<div class="col-md-8">
<h2>Embedded link</h2>
  <p><? dummy("text@teaser") ?></p>
  <div class="article-link-embedded">
  <figure>
  <a href="article.php" title="TITLE"><img src="<? dummy("image@70x,16:9") ?>" width="" height="" alt="" /></a>
  </figure>
  <div class="teaser-body">
    <span>Læs også:</span>
    <a href="article.php" title="TITLE"><? dummy("text@headline") ?></a>  
 </div>
</div>

<p><? dummy("text@teaser") ?></p>

</div>

<div class="col-md-8">
  <h2>Twitter embeds</h2>
    <div class="media-embeds">
    <blockquote class="twitter-tweet" lang="da"><p>Jubii! 11,8 millioner fra A. P. Møller Fonden til Helsingør Kommune! God dag;-) <a href="https://twitter.com/SthePol">@sthepol</a>&#10;<a href="http://t.co/LWfd9iStaU">http://t.co/LWfd9iStaU</a></p>&mdash; Benedikte Kiær (@benediktekiaer) <a href="https://twitter.com/benediktekiaer/status/533231937037414400">14. november 2014</a></blockquote>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>

</div>

  <div class="col-md-8">
    <h2>Default quote</h2>
    <blockquote class="bond-quote">
                  
                  <p>
                    <? dummy("text@teaser") ?>
                  </p>
                  <small><? dummy("text@author") ?>- <? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?></small>
                  <div class="quote-share">SHARE QUOTE <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></div>

              </blockquote>

  </div>


  <div class="col-md-8">
    <h2>Video embeds</h2>
    <div class="article-video">
        <iframe width="425" height="349" src="http://www.youtube.com/embed/FKWwdQu6_ok" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

  <div class="col-md-8">
  <h2>Article tags</h2>
    <?php include('inc/asset-article-tags.php'); ?>
  </div>


</div>

      
  </div>  



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
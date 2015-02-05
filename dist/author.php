<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-large">
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
    
      <h1 class="deck-header"><? dummy("text@author") ?> <button class=" btn btn-default btn-sm" data-toggle="modal" data-target="#follow-author"><i class="fa fa-plus"></i> Subscribe</button></h1>
    
    </div>
    <section class="deck">
    <div class="col-md-4 col-sm-4 col-xs-3">
        <figure class="teaser-img"><img src="<? dummy("image/!author@400x,1:1") ?>" width="" height="" alt=""  class="img-responsive img-rounded"/></figure>
    </div>

    <div class="col-md-8 col-sm-8">
    <div class="row">

    <div class="col-md-8 col-sm-12 ">
      <p><? dummy("text@paragraph") ?></p>
    </div>
    <div class="col-md-4 col-sm-12">
      <ul class="list-author">
      <li>
          <b>Email</b>
          <i class="fa fa-envelope"></i> <a href="mailto:mih@berlingske.kd">mih@berlingske.dk</a>
        </li>

        <li>
          <b>Twitter</b>
          <i class="fa fa-twitter"></i> <a href="#">@username</a>
        </li>
        <li>
          <b>Facebook</b>
          <i class="fa fa-facebook"></i> <a href="#">facebook.com/boskakke</a>
        </li>
        <li>
          <b>LinkedIn</b>
          <i class="fa fa-linkedin"></i> <a href="#">linkedin.com/username</a>
        </li>

        
      </ul>
    </div>
    </div>
    </div>
    </section>
  </div>

  
  <section class="deck">
  <div class="row">
    <div class="col-md-12">
      <h1 class="deck-header">Articles by <? dummy("text@author") ?></h1>
    </div>
  </div>
  <div class="row">
    <? while (dumb_luck("2")): ?>
    <div class="col-md-6 col-sm-6 col-xs-6">
      <article class="teaser">
        <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
        <div class="teaser-body">
          <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
        </div>
      </article>

    </div>
    <? endwhile ?>
</div>

  <div class="row">
    <ul class="list-clean flex-4-3-2">
      <? while (dumb_luck("24")): ?>

      <li class="col-md-3 col-sm-4 col-xs-6">
        <article class="teaser">
          <figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@540x,16:9") ?>" width="" height="" alt="" /></a></figure>
          
          <div class="teaser-body">
            <h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2>
          </div>

      </article>
      </li>

      <? endwhile ?>
      </ul>


      


  </div>
  <div class="row">
    <div class="col-md-12">
      <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">Previous</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">8</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">Next</span>
      </a>
    </li>
  </ul>
</nav>
    </div>
  </div>
    </section>


    


  </div>

  

  </div><!-- container -->
    

    
<!-- Modal -->
<div class="modal fade" id="follow-author" tabindex="-1" role="dialog" aria-labelledby="Follow author" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        
      </div>
      <div class="modal-body">

      <? if (dumb_luck("50%")): ?><!-- If user is logged in -->
      <p><i class="fa fa-check color-green"></i> You are now subscribing to <? dummy("text@author") ?>'s articles (initials@somesite.com). </p>
      <p class="small"><a href="page-profile.php">Edit your subscriptions</a></p>
      <? else: ?>
      <!-- If user is NOT logged in -->
      <p >Modtag e-mail når <? dummy("text@author") ?> publicerer en ny artikel</p>
      <form class="form-signup">
      <div class="form-group form-oneline ">
              <input type="email" id="signup" class="form-control input-sm" placeholder="Indtast din email">
              <button class="btn btn-sm btn-primary btn-sm ">Sign up</button>
            </div>
          </form>
          <? endif ?>
        

      </div>
      
    </div>
  </div>
  
</div>

  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
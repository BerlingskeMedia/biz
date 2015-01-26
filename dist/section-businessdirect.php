<? require_once("../../dummy/dummy.php") ?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="da"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="da"><!--<![endif]-->

  <head>
    <title>Business.dk</title>
    <?php include("./inc/head.php"); ?> 
  </head>
  <body class="article-category-premium">
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
      

      
      <section class="col-md-12">
    
        <?php include('inc/article-header-businessdirect.php'); ?>
        

        

        

        <div class="row">
      <div class="col-md-12">
        <h2 class="section-title"><a href="frontpage-businessdirect.php" class="home"><i class="fa fa-caret-left"></i> Business Direct Home</a>Seneste pressemeddelelser</h2>
      </div>        
          <div class="col-md-8  ">
          
            




<? while (dumb_luck("20")): ?>
<article class="teaser teaser-image-left teaser-businessdirect teaser-divider header-25 teaser-nodate">
  
  <figure class="teaser-img">
    <a href="article-businessdirect.php"><img src="<? dummy("image@200x,16:9") ?>" width="" height="" alt="" /></a>
  </figure>
  <div class="teaser-body">
  
  <h2 class="header">
    <a href="article-businessdirect.php"><? dummy("text@headline") ?></a>
  </h2>
  <footer><a href="section.php" class="cat">Pressemeddelelse</a> <time>10t.</time></footer>
  <p><? dummy("text@teaser") ?></p>
  
  </div>
</article>
<? endwhile ?>




        



            
          </div><!-- col -->
          
          <!-- SIDEBAR  -->
          
          <div class="col-md-4">


            <section class="module-sm">
            
            <h1 class="section-header">
              New companies
            </h1>

          
          
          <ul class="list list-xs list-light list-condenced">
            <? while (dumb_luck("10")): ?>
            <li class="teaser"><h2 class="header"><a href="profile-businessdirect.php"><? dummy("text@businessnames") ?></a></h2></li>

          <? endwhile ?>
          </ul>
          </section>

          <section class="module-sm">
          <form class="form-signup">
            <h1 class="section-header-sm">
              Business Direct newsletter
            </h1>
            <p class="small"><? dummy("text@teaser") ?></p>
            <div class="form-group form-oneline ">
              
              <input type="email" id="signup" class="form-control input-sm" placeholder="Indtast din email">
              <button class="btn btn-sm btn-primary btn-sm ">Sign up</button>
            </div>
            <div class="checkbox">

              <!-- <label for="permission" class="label-small">
                <input type="checkbox" checked="" id="permission"> Receive occasional updates and special offers from Business.dk
              </label> -->
            </div>
          </form>
          </section>

           <section class="module">
          <h1 class="section-header">Most read</h1>
        <ul class="list toplist toplist-lg list-xs list-image-right">
        <? while (dumb_luck("5")): ?>
          <li class="teaser">
          <? if (dumb_luck("66%")): ?><figure class="teaser-img"><a href="article.php"><img src="<? dummy("image@50x50,") ?>" width="" height="" alt="" /></a></figure><? endif ?>
          <div class="teaser-body"><h2 class="header"><a href="article.php"><? dummy("text@headline") ?></a></h2></div>
          </li>
        <? endwhile ?>
      </ul>
      </section>

            
          </div>

        </div><!-- row -->
      </section>  

      

      


    </div>

  

  

  </div><!-- container -->
    



  <?php include("./inc/footer.php"); ?>

    
  </body>
</html>
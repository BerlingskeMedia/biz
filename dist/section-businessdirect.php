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
         <!-- 
**********************************************
Att. Bond dev: The header should be a custom content unit :-) 
**********************************************
-->
<header class="header-sponsor-article header-businessdirect toggle-container">
   <h1 class="site-title"><a href="frontpage-businessdirect.php" class="logo-businessdirect">BusinessDirect</a></h1>
 <nav class="small">
  <a href="#" class="toggle-btn">Hvad er BusinessDirect?</a>   
  </nav>
  <div class="brandview-info toggle-content">
    <p>Business Direct er Berlingskes presseservice, hvor virksomheder kan offentliggøre pressemeddelelser på business.dk og i Berlingske Business.</p>
    <p>Har du spørgsmål om Business Direct kan du kontakte Jesper Husen på tlf. 27 400 200 eller <a href="mailto:info@businessdirect.dk">info@businessdirect.dk</a> eller besøge vores hjemmeside: <a href="#">www.businessdirect.dk</a>.</p>    
  </div>
</header>

        

        

        

        <div class="row">
      <div class="col-md-12">
        <h1 class="section-title"><a href="frontpage-businessdirect.php" class="home"><i class="fa fa-caret-left"></i> Business Direct Home</a></h1>
      </div>        
          <div class="col-md-8  ">
          
            

<? while (dumb_luck("10")): ?><? dummy("text@businessnames") ?><? endwhile ?>


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


            

            <section>
  
    <h1 class="section-header">Seneste virksomheder</h1>
    
                <ul class="list  list-image-right ">
                    <? while (dumb_luck("5")): ?>
                      <li class="teaser">
                      
                      <div class="teaser-body">
                        <h2 class="header"><a href="article-businessdirect.php"><? dummy("text@headline") ?></a></h2>
                      </div>
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
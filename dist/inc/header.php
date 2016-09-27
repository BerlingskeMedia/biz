<div class="site-wrap">

<aside class="slider-latest-news slider-nav">
  
  <header class="slider-header ">
    <ul class="nav nav-tabs-sm" role="tablist">
      <li role="presentation" class="tab-label active"><a href="#tab-latest-slider" aria-controls="tab-latest-slider" role="tab" data-toggle="tab">Seneste nyt</a></li>
      <li role="presentation"><a href="#tab-topstories-slider" aria-controls="tab-topstories-slider" role="tab" data-toggle="tab">Topnyheder</a></li>
      
    </ul>

    <button class="btn-close-latest">
      <i class="fa fa-times"></i>
    </button>
  </header>
    

<div class="inner">

     <div role="tabpanel" class="tabs">  

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div role="tabpanel" class="tab-pane fade  " id="tab-topstories-slider">
      
      <?php include('./inc/article-content-stream.php'); ?>
      
      <div class="text-right slider-footer">
      <small ><strong><a href="./index.php">Forsiden <i class="fa fa-caret-right"></i></a></strong></small>  
    </div>

    </div>

    <div role="tabpanel" class="tab-pane fade in active" id="tab-latest-slider">
    
    <ul class="list list-clean list-visited">
      <? while (dumb_luck("25")): ?>
        <li class="teaser">
        <div class="teaser-body">
        <h2 class="header"><a href="article.php?<? dummy("text@time-ago-short") ?>">
         <? dummy("text@headline") ?></a></h2>
         <footer>
          <time><? dummy("text@time-ago-short") ?></time>
         </footer>
         </div>
         </li>
      <? endwhile ?>
    </ul>
    <div class="text-right slider-footer">
      <small ><strong><a href="news-overview.php">Se alle <i class="fa fa-caret-right"></i></a></strong></small>  
    </div>
    
    </div>
  </div>

  </div>

</div>
  

</aside>

<aside class="mobile-nav slider-nav">
<? if (dumb_luck("50%")): ?>
          <span class="mobile-logout">
            <a href="page-profile.php" class="username"><i class="fa fa-user"></i> <? dummy("text@author") ?></a>
            <a href="#" title="Log ud">Log ud <i class="fa fa-caret-right"></i></a>
          </span>

          <? else: ?>
          <span class="mobile-login">
          <a href="#" title="Log ind" data-toggle="modal" data-target="#modal-login" class=""><i class="fa fa-user"></i> Log ind</a>
          </span>
          <? endif ?>
          

  <a class="close-menu" href="#"><i class="fa fa-times"></i></a>
  

  <ul class="mobile-main-nav">
  <li class="site-search">
    <form action="./search-result.php" method="POST">
    <input type="search" class="" placeholder="Hvad søger du efter?"> 
    <button><i class="fa fa-search"></i></button>
    </form>
  </li>

    <li ><a href="section.php">Investor</a><a href="#" class="show-sub"><i class="fa fa-angle-down"></i></a>
    <ul class="sub-menu">
      <li><a href="section.php">Se alle</a></li>
      <li><a href="section.php">Økonomi</a></li>
      <li><a href="section.php">Global</a></li>
      <li><a href="section.php">Børstal</a></li>
      <li><a href="section.php">Aktier</a></li>
      <li><a href="section.php">Obligationer</a></li>
      <li><a href="section.php">Investeringsbeviser</a></li>
      <li><a href="section.php">Valuta</a></li>
      <li><a href="section.php">Markeder</a></li>
    </ul>
    </li>
    <li ><a href="section.php">Virksomheder</a><a href="#" class="show-sub"><i class="fa fa-angle-down"></i></a>
    <ul class="sub-menu">
      <li><a href="section.php">Se alle</a></li>
      <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
    </ul>
    </li>
    <li ><a href="section.php">Privatøkonomi</a><a href="#" class="show-sub"><i class="fa fa-angle-down"></i></a>
    <ul class="sub-menu">
      <li><a href="section.php">Se alle</a></li>
      <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
    </ul>
    </li>
    <li><a href="section.php">Karriere</a><a href="#" class="show-sub"><i class="fa fa-angle-down"></i></a>
    <ul class="sub-menu">
      <li><a href="section.php">Se alle</a></li>
      <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
    </ul>
    </li>
    <li><a href="section.php">TV</a><a href="#" class="show-sub"><i class="fa fa-angle-down"></i></a>
    <ul class="sub-menu">
      <li><a href="section.php">Se alle</a></li>
      <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
    </ul>
    </li>
    <li class="tool"><a href="#">Læs E-avis</a></li>
    <li class="tool"><a href="#">Køb abonnement</a></li>
    <li class="tool"><a href="#">Business Direct</a></li>
    <li class="tool"><a href="#">BrandView</a></li>
    <li class="tool"><a href="#">Business Premium</a></li>
    <li class="tool"><a href="#">Nyhedsbreve</a></li>
    <li class="tool"><a href="#">Kontakt</a></li>
    <li class="tool"><a href="#">Annoncering</a></li>
    <li class="tool sosume"><a href="#">Privatlivspolitik</a></li>
  </ul>
  <div class="mobile-icons">
    <span>Følg</span>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
  </div>
</aside>

<div class="inner-wrap">


<div class="sticky-social">
  
  <div class="inner">
    <span>Del <span class="hidden-xs"> artiklen</span>:</span>
    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="icon-social-sms visible-xs-inline-block">SMS</a>
    <a href="#" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
    <!-- <span class="comments-teaser"><a href="#" class="icon-social-letter scroll-comments"><i class="fa fa-comment"></i><span class="icon-text scroll-comments">48</span></a></span> -->
    
  </div>        

</div>



<div class="site-main-header main-header-top">
  <div class="container-main-header">
    <div class="row ">
    <div class="col-md-12">
      
         <ul>
          <li><a href="http://www.b.dk">Berlingske.dk</a></li>
          <li class="hidden-xs"><a href="#">E-avis</a></li>
          <li class="float-right-xs"><a href="#" class="btn-subscription">Køb abonnement</a></li>
         </ul>

         <ul class="pull-right nav-tools hidden-xs">
          <li><a href="#" class="sosume">Privatlivspolitik</a></li>
          <!-- <li class="social-icons"><a href="#" title="Følg os via Facebook"><i class="fa fa-facebook"></i></a> <a href="#" title="Følg os via Twitter"><i class="fa fa-twitter"></i></a> <a href="#" title="Følg os via LinkedIn"><i class="fa fa-linkedin"></i></a></li>   -->
          <? if (dumb_luck("50%")): ?>
          <li class="menu-login"><a href="page-profile.php" class="username"><i class="fa fa-user"></i> <? dummy("text@author") ?></a> <a href="#" class="btn-login" title="Log ud" >Log ud <i class="fa fa-caret-right"></i></a></li>
          <? else: ?>
          <li class="menu-login"><a href="#" title="Log ind" data-toggle="modal" data-target="#modal-login" class="btn-login">Log ind <i class="fa fa-user"></i></a></li>
          <? endif ?>
        </ul>
      

      </div>
        
    </div>
  </div>
</div>

<div class="site-main-header main-header-bottom">



<?php 
$stockvalue = rand(0,1);
$stock_change = mt_rand(0,250)/100;


?>

  <div class="container-main-header">
  <div class="row">
    <div class="header-bottom col-md-12">
        <a href="./" class="logo-business">Business</a>
  
        
        <nav class="site-nav">
<!-- <a href="http://www.business.dk/investor/aktier" class="nav-stock">
<span class="stock-title">OMX C20CAP</span>
<span class="stock-value"><? if (dumb_luck("50%")): ?><span>Lukket</span><? endif ?> 1032,21</span>


<li class="menu-businesslive nav-button <?php if($live): ?>is-live<?php endif; ?> "><a href="article-scribble.php" title="Business Live"> Live <span class="beta">Beta</span></a></li>
<li class="menu-menu nav-button"><a href="#" class="btn-toggle-nav"><i class="fa fa-bars"></i> <span class="hidden-sm hidden-xs">Indhold</span></a></li>
<li class="menu-search nav-button hidden-sm hidden-xs"><a href="#" title="Søg"><i class="fa fa-search"></i> <span>Søg</span></a></li> -->
        

        
          
        

          <ul class="main-nav">
           
              
            <li class="nav-stock">
              <a href="#">
                <? if (dumb_luck("50%")): ?>
                <span class="stock-quote negative">
                  -<?php echo $stock_change; ?>%
                </span>
                <? else: ?>
                <span class="stock-quote">
                  <?php echo $stock_change; ?>%
                </span>
                <? endif ?>
                <span class="stock-title">
                  <div>OMX C20CAP</div>
                  <div>1032,21 <? if (dumb_luck("50%")): ?>- LUKKET<? endif ?></div>
                </span>
              </a>
            </li>
                
            <li class="nav-live is-live">
              <a href="#" class="">
                LIVE
                <span class="beta">BETA</span>
              </a>
            </li>

            <li class="nav-latest menu-latest hidden-xs">
              <a href="#" class="">
                <i class="fa fa-clock-o"></i>
                <span class="hidden-xs">Seneste nyt</span>
              </a>
            </li>

            <li class="nav-search hidden-xs menu-search  ">
              <a href="#" title="Søg"><i class="fa fa-search"></i> <span>Søg</span></a>
            </li>
            
            <li class="nav-content">
              <a href="#" class="btn-toggle-nav">
                <i class="fa fa-bars"></i>
                <span class="hidden-xs">Indhold</span>
              </a>
            </li>

            
            
            
          </ul>
        
        </nav>
        
    </div>
<div class="site-main-search">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <form action="./search-result.php" method="POST">
      <input type="search" class="form-control" id="site-search" placeholder="What are you searching for?"> 
      <button class="btn"><i class="fa fa-search"></i> Søg </button>
    </form>
    </div>
  </div>
  </div>
</div><!-- search -->


  </div><!-- row -->



  </div><!-- container-main-header -->
</div>

<div class="business-live-teaser">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <a href="#"><time>10.23</time> Selskabet bag Bendtners underbukser sætter kursrekord</a>
        </div>
      </div>
    </div>
  </div>









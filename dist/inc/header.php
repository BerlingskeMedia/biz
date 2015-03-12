<div class="site-wrap">

<aside class="slider-latest-news slider-nav">
  
    <button class="btn-close-latest"><i class="fa fa-times"></i></button>
  
  <div class="inner">

  <? if (dumb_luck("50%")): ?>
    <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>
    <? else: ?>
    <ul class="list-clean">
      <? while (dumb_luck("25")): ?>
        <li><a href="article.php?<? dummy("text@time-ago-short") ?>"><time><? dummy("text@time-ago-short") ?></time> <? dummy("text@headline") ?></a></li>
      <? endwhile ?>
    </ul>
    <? endif ?>
  </div>
  <footer><a href="section.php">Se alle <i class=" fa fa-caret-right"></i></a></footer>
</aside>

<aside class="mobile-nav slider-nav">
  <a href="#" class="mobile-login" data-toggle="modal" data-target="#modal-login"><i class="fa fa-user"></i> <small>Log ind</small></a>
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
  
    <a href="#" class="icon-social-facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="icon-social-twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="icon-social-linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="icon-social-mail"><i class="fa fa-envelope"></i></a>
    <span class="pull-right comments-teaser"><a href="#" class="icon-text scroll-comments">48 kommentarer</a> <a href="#" class="icon-social-default scroll-comments"><i class="fa fa-comment"></i></a></span>
    
  </div>        

</div>



<div class="site-main-header main-header-top">
  <div class="container-main-header">
    <div class="row ">
    <div class="col-md-12">
      
         <ul>
          <li><a href="http://www.b.dk">Berlingske.dk</a></li>
          <li><a href="http://www.politiko.dk">Politiko.dk</a></li>
          <li><a href="#" class="btn btn-primary ">Buy subscription</a></li>
          <li class="hidden-xs"><a href="#">E-avis</a></li>
         </ul>

         <ul class="pull-right nav-tools hidden-xs">
          <li class="social-icons">Follow us: <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></li>  
          <li><a href="#" class="sosume">Privacy</a></li>
        </ul>
      

      </div>
        
    </div>
  </div>
</div>

<div class="site-main-header main-header-bottom">




  <div class="container-main-header">
  <div class="row">
    <div class="header-bottom col-md-12">
        <a href="./" class="logo-business">Business</a>
        
        <!-- <a href="#" class="btn-toggle-mobile-search toggle-global-search"><i class="fa fa-search"></i></a> -->
        <nav class="site-nav">
          <ul class="main-nav desktop-nav">
            <li ><a href="section.php">Investor</a>
            <ul class="sub-menu desktop-nav">
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
            <li ><a href="section.php">Virksomheder</a>
            <ul class="sub-menu">
              <li><a href="section.php">Se alle</a></li>
              <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
            </ul>
            </li>
            <li ><a href="section.php">Privatøkonomi</a>
            <ul class="sub-menu">
              <li><a href="section.php">Se alle</a></li>
              <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
            </ul>
            </li>
            <li class="<? if (dumb_luck("25%")): ?>active<? endif ?>"><a href="section.php">Karriere</a>
            <ul class="sub-menu">
              <li><a href="section.php">Se alle</a></li>
              <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
            </ul>
            </li>
            <li ><a href="section.php">TV</a>
            <ul class="sub-menu">
              <li><a href="section.php">Se alle</a></li>
              <? while (dumb_luck("6-9")): ?><li><a href="section.php"><? dummy("text@item") ?></a></li><? endwhile ?>
            </ul>
            </li>
          </ul>
          

          <ul class="main-nav nav-tools">
            <li class="menu-menu"><a href="#" class="btn-toggle-nav"><i class="fa fa-bars"></i></a></li>
            <li class="menu-latest"><a href="#" title="Seneste nyt"><i class="fa fa-clock-o"></i><ins><? dummy("text@number") ?></ins></a></li>
            <li class="menu-search hidden-xs"><a href="#" title="Søg"><i class="fa fa-search"></i></a></li>
            <li class="menu-login hidden-xs"><a href="#" title="Log ind" data-toggle="modal" data-target="#modal-login"><i class="fa fa-user"></i> <small>Log ind</small></a></li>
          </ul>
        
        </nav>
        <div class="site-search">
            <form action="./search-result.php" method="POST">
            <input type="search" class="" id="site-search" placeholder="What are you searching for?"> 
            <button class="btn-search"><i class="fa fa-search"></i></button>
            </form>
            <button class="btn-close-search"><i class="fa fa-close"></i></button>
        </div>
    </div>
  </div>
  </div>
</div>
  
<a href="#" class="close-search"></a>




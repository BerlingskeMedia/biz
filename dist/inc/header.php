<?php 
if(isset($_GET["live"])) {
  $live = true;
}
?>
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

    <li ><a href="/"><i class="fa fa-home"></i> Forside</a></li>
    <li ><a href="/"><i class="fa fa-clock-o"></i> Seneste nyt</a></li>
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
      <a href="#"><i class="fa fa-instagram"></i></a>
  </div>
</aside>

<div class="inner-wrap">

<div class="header-wrapper">
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
        
          <ul class="tools-nav">
            <li class="nav-stock">
              <a href="#">
                <!-- add class .negative if stock change is negative -->
                <? if (dumb_luck("50%")): ?>
                <span class="stock-quote negative hidden-xs">
                  -<?php echo $stock_change; ?>%
                </span>
                <? else: ?>
                <span class="stock-quote hidden-xs">
                  +<?php echo $stock_change; ?>%
                </span>
                <? endif ?>
                <span class="stock-title">
                  <div><span class="hidden-xs">OMX</span>
                    
                     <? if (dumb_luck("50%")): ?>
                <span class="stock-quote-mobile negative visible-xs">
                  -<?php echo $stock_change; ?>%
                </span>
                <? else: ?>
                <span class="stock-quote-mobile visible-xs">
                  +<?php echo $stock_change; ?>%
                </span>
                <? endif ?>

                   C20CAP</div>
                  <div class="hidden-xs">1032,21 
                  <!-- add "LUKKET" if stock market is closed -->
                  <? if (dumb_luck("50%")): ?>- LUKKET<? endif ?></div>
                </span>
              </a>
            </li>
                
            <!-- add class .is-live if chart is live -->
            <li class="nav-live <?php if($live) { echo 'is-live';} ?>">
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
        <div class="container-main-header">
        
          <form action="./search-result.php" method="POST">
            <input type="search" class="form-control" id="site-search" placeholder="What are you searching for?"> 
            <button class="btn"><i class="fa fa-search"></i> Søg </button>
          </form>
        
        </div>
      </div><!-- search -->

    </div><!-- row -->
  </div><!-- container-main-header -->
</div>

<?php if($live): ?>
<div class="business-live-teaser ">
  <div class="container-main-header" style="height: auto;">
    
        <a href="#"><time>10.23</time> <? dummy("text@headline") ?></a>
    
  </div>
</div>
<?php endif; ?>


<div class="main-nav-container hidden-sm hidden-xs">
  <div class="container-main-header">
    
        <nav>
        <ul class="main-nav">
          <li><a href="/"><i class="fa fa-home"></i></a></li>
          <li><a href="#" title="Investor">Investor</a>
          <div class="sub-nav">
              <div class="container-main-header">
                
                        <ul>
                          <li><a href="#">Økonomi</a></li>
                          <li><a href="#">Global</a></li>
                          <li><a href="#">Aktier</a></li>
                          <li><a href="#">Obligationer</a></li>
                          <li><a href="#">Investeringsbeviser</a></li>
                          <li><a href="#">Valuta</a></li>
                          <li><a href="#">Markeder</a></li>
                      </ul>      
                
              </div>

              
          </div>
          
          </li>
          <li><a href="#" title="Virksomheder">Virksomheder</a>
          <div class="sub-nav">
              <div class="container-main-header">
                <ul>
                  <li><a href="#">Finans</a></li>
                  <li><a href="#">Detail</a></li>
                  <li><a href="#">Digital</a></li>
                  <li><a href="#">Ejendomme</a></li>
                  <li><a href="#">Energi</a></li>
                  <li><a href="#">Fødevarer</a></li>
                  <li><a href="#">Industri</a></li>
                  <li><a href="#">Media</a></li>
                  <li><a href="#">Medico</a></li>
                  <li><a href="#">Rådgivning</a></li>
                  <li><a href="#">Transport</a></li>
                  <li><a href="#">Vækst</a></li>
                  </ul>
                </div>
              </div>
          </li>
          <li><a href="#" title="Privatøkonomi">Privatøkonomi</a>
          <div class="sub-nav">
            <div class="container-main-header">
              <ul>
              <li><a href="#">Bank</a></li>
              <li><a href="#">Bolig</a></li>
              <li><a href="#">Pension</a></li>
              <li><a href="#">Skat</a></li>
              <li><a href="#">Forsikring</a></li>
              <li><a href="#">Brevkassen</a></li>
              </ul>
            </div>
          </div>
          </li>
          <li><a href="#" title="Karriere">Karriere</a>
          <div class="sub-nav">
            <div class="container-main-header">
              <ul>
              <li><a href="#">Ledelse</a></li>
              <li><a href="#">Business-kvinder</a></li>
              <li><a href="#">Navne</a></li>
              <li><a href="#">Business Events</a></li>
              </ul>
            </div>
          </div>

          </li>
          <li><a href="#" title="TV">TV</a>
          <div class="sub-nav">
            <div class="container-main-header">
              <ul>
              <li><a href="#">Business TV</a></li>
              <li><a href="#">Topledernes Univers</a></li>
              <li><a href="#">Ugens vinder og taber</a></li>
              </ul>
            </div>
          </div>

          </li>
          <li><a href="#" title="Opinion">Opinion</a>
          <div class="sub-nav">
            <div class="container-main-header">
              <ul>
              <li><a href="#">Blogs</a></li>
              <li><a href="#">Debat</a></li>
              </ul>
            </div>
          </div>
          </li>
        </ul>
        </nav>
    
  </div>
</div>

</div><!-- /header-wrapper -->




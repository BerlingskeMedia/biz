
<section class="deck"> 
<div class="col-md-12 ">
   <div class="deck-header border-xs-top">
      <h1>Longreads</h1>
      <a href="section.php" class="section-header-link">Se alle <i class="fa fa-caret-right"></i></a>
    </div>
<div class="theme-splash">
  <? while (dumb_luck("3")): ?>
    <article class="teaser-splash">
    <a href="article-longread.php">
      <div class="teaser-body">
        <h2 class="header"><? dummy("text@headline") ?></h2>
      </div>
      <div class="splash-img" style="background-image: url(<? dummy("image/!longread@800x,1:1") ?>)"></div>
      </a>
    </article>
  <? endwhile ?>
</div>



<div class="teaser-splash-extra">
<div class="clearfix">
<ul class="list-clean flex-4-4-2">
<? while (dumb_luck("0-3")): ?>


  
  <? while (dumb_luck("4")): ?>
  
  
  <li class="col-md-3 col-sm-3 col-xs-6">
  <article class="teaser teaser-longread">
    
      <figure class="teaser-img">
      <a href="article-longread.php">
        <img src="<? dummy("image@350x,16:9") ?>" width="" height="" alt="" />
        </a>
      </figure>
      <h2 class="header">
        <a href="article-longread.php"><? dummy("text@headline") ?></a>
      </h2>
    
    </article>
  </li>
  
<? endwhile ?>



<? endwhile ?>
</ul>
</div><!-- row -->



<div class="text-center load-more-longreads">
  <a href="#" class="btn btn-sm btn-primary">Hent flere <i class="fa fa-caret-down"></i></a>
</div>

</div>
</div>
</section>